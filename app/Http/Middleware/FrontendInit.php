<?php namespace App\Http\Middleware;

use Closure;
use App;

use App\Models\Article;
use App\Models\Category;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Pagination\Paginator;
use App\Models\Text;
use App\Models\Lang;
use League\Flysystem\Config;

class FrontendInit {

	/**
	 * Handle an incoming request.
	 *
	 * @param  \Illuminate\Http\Request  $request
	 * @param  \Closure  $next
	 * @return mixed
	 */
	public function handle($request, Closure $next)
	{
		// Get current lang object from db
		$currentLang = Lang::where('lang',"=", $request->lang)
			->first();

		if (!$currentLang){
			abort('404');//страница 404 в файлі .ENV ставим false и робим шаблон 404 стор
		}

		// Locale setting
		App::setLocale($request->lang);

		$main = Category::where('link','=', 'main')
			->first()
			->articles
			->first();
		$news = Category::where('link','=', 'news')
			->first()
			->articles()
			->where('active','=', '1')
			->orderBy("priority", 'desc')
			->paginate(5);
		$about_us = Category::where('link','=', 'about_us')
			->first()
			->articles()
			->where('active','=', '1')
			->get()
			->sortByDesc("priority");
		$tourist = Category::where('link','=', 'tourist')
			->first()
			->articles()
			->where('active','=', '1')
			->get()
			->sortByDesc("priority");
		$government = Category::where('link','=', 'government')
			->first()
			->articles()
			->where('active','=', 1)
			->get()
			->sortByDesc("priority");
		$slides = Category::where('link','=', 'slider')
			->first()
			->articles()
			->where('active','=', 1)
			->get()
			->sortByDesc("priority");
		$advertising = Category::where('link','=', 'advertising')
			->first()
			->articles()
			->where('active','=', 1)
			->get()
			->sortByDesc("priority");

		$texts = new Text();

		/*$textsArray = Text::all();
		//$texts = [];
		foreach($textsArray as $text){
			$desription = $text->getTranslate('description');
			$texts[$text->id] = $desription;
			$texts[$text->name] = $desription;

		}*/


		//MEta



		// Share to views global template variables
		view()->share('langs', Lang::all());
		view()->share('main', $main);
		view()->share('news', $news);
		view()->share('slides', $slides);
		view()->share('government', $government);
		view()->share('about_us',$about_us);
		view()->share('tourist',$tourist);
		view()->share('advertising', $advertising);
		view()->share('texts', $texts->init());
		view()->share('version', config('app.version'));
        //view()->share('meta', $meta);

		return $next($request);
	}

}

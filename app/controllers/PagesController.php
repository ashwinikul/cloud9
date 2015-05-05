<?php

class PagesController extends BaseController {

	/**
	 * Display the Home page.
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('home.index');
	}


	/**
	 * Display Services page.
	 *
	 * @return Response
	 */
	public function pricing()
	{
		return View::make('pricing.index');
	}
	

}

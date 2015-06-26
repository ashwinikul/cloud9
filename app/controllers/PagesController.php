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
	 * Display Pricing page.
	 *
	 * @return Response
	 */
	public function pricing()
	{
		return View::make('pricing.index');
	}

	/**
	 * Display Portfolio page.
	 *
	 * @return Response
	 */
	public function portfolio()
	{
		return View::make('portfolio.index');
	}
	

}

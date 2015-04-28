<?php

class PagesController extends BaseController {

	/**
	 * Display the Home page.
	 *
	 * @return Response
	 */
	public function home()
	{
		return View::make('home');
	}


	/**
	 * Display Services page.
	 *
	 * @return Response
	 */
	public function services()
	{
		return View::make('services.index');
	}


	/**
	 * Display Contact page.
	 *
	 * @return Response
	 */
	public function contact()
	{
		return View::make('contact.index');
	}
	

}

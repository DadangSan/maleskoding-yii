<?php

/**
 * @filesource /protected/controllers/SiteController.php
 */
class SiteController extends Controller {

	/**
	 * Renders the autocomplete.
	 */
	public function actionIndex() {
		$this->render('index');
	}

	/**
	 * Returns data for the autocomplete lookup.
	 */
	public function actionLookup() {
		$term = $_GET['term'];
		$users = User::model()->findAll(array(
		    'condition' => 'firstName LIKE :firstName OR lastName LIKE :lastName',
		    'params' => array(
			':firstName' => "%$term%",
			':lastName' => "%$term%",
		    ),
			));
		$return = array();
		foreach ($users as $user) {
			$return[] = array(
			    'label' => $user->firstName . ' ' . $user->lastName,
			    'value' => '',
			    'image' => $user->profilePicturePath,
			    'city' => $user->city,
			    'url' => $user->profilePage,
			);
		}
		echo CJSON::encode($return);
	}

}
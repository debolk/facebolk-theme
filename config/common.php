<?php
/**
 * This file provides to overwrite the default HumHub / Yii configuration by your local common (Console and Web) environments
 * @see http://www.yiiframework.com/doc-2.0/guide-concept-configurations.html
 * @see http://docs.humhub.org/admin-installation-configuration.html
 * @see http://docs.humhub.org/dev-environment.html
 */
return [
	'modules' => [
		'user' => [
			'minimumUsernameLength' => 1,
			'displayNameCallback' => function($user) {
				if($user->profile->title == ""){
					return $user->profile->firstname.' '.$user->profile->lastname;
				} else {
	     				return $user->profile->title;
				}
			},
			'displayNameSubCallback' => function($user) {
				if($user->profile->title == ""){
					return null;
				} else {
	     				return $user->profile->firstname.' '.$user->profile->lastname;
				}
			},

		],
		'directory' => [
			'guestAccess' => false,
		],
	]
//	'components' => [
//		'queue' => [
//			'class' => 'humhub\modules\queue\driver\MySQL',
//		],
//	],
];

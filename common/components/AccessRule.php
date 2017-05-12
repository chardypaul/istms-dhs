<?php

namespace common\components;

use common\models\User;

class AccessRule extends \yii\filters\AccessRule {
	/**
     * @inheritdoc
     */

	protected function matchRole($user) {
		if (empty($this->role)) {
			return true;
		}

		foreach ($this->role as $roles) {
			if ($roles === '?') {
				if ($user->getIsGuest()) {
					return true;
				}
			} elseif ($roles === '@') {
				if (!$user->getIsGuest()) {
					return true;
				}
			} elseif (!$user->getIsGuest() && $roles === $user->identity->role) {
				return true;
			}
		}
	}
}


?>
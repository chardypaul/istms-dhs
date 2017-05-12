<?php

namespace common\components;


class AccessRule extends \yii\filters\AccessRule {
	/**
     * @inheritdoc
     */

	protected function matchRole($user) {
		if (empty($this->roles)) {
			return true;
		}

		foreach ($this->roles as $roles) {
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
		return false;
	}
}


?>
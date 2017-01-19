<?php
/**
 * Satorisan customer profile
 *
 * This customer profile is set up for data collection and stored about the user for ecommerce purposes
 *
 * author Adam Pedroza <apedroza6@cnm.edu>
 * @version 1.0.0
 **/
class Customer {
	/**
	 *id for this Customer; this is the primary key
	 **/
	private $profileId;
	/**
 *id of the Customer who owns this Profile; this is a foreign key
 **/
	private $userId;
	/**
	 *first name of this customer
	 **/
	private $firstName;
	/**
	 * last name of this person
	 **/
	private $lastName;

	/**
	 * accessor method for profile id
	 *
	 * @return int value of profile id
	 **/
	/**
	 * @return mixed
	 **/
	public function getProfileId() {
		return $this->profileId;
	}

	/**
	 * mutator method for profile id
	 *
	 * @param int $newProfileId new value of profile id
	 * @throws \UnexpectedValueException if $newProfileId is not an integer
	 **/
	public function setProfileId($newProfileId) {
		 //* verify the profile id is valid
		$newProfileId = filter_var($newProfileId, FILTER_VALIDATE_INT);
		if($newProfileId == false) {
			throw(new UnexpectedValueException ("profile id is not a valid integer"));
		}

		// convert and store the profile id
		$this->profileId = intval($newProfileId);
	}
}
?>

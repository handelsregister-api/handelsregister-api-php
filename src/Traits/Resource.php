<?php

namespace handelsregister\Traits;

use handelsregister\Api\RegistrationCourts;
use handelsregister\Api\RegisterTypes;
use handelsregister\Api\DocumentTypes;
use handelsregister\Api\Countries;
use handelsregister\Api\AccountLimits;
use handelsregister\Api\Announcements;
use handelsregister\Api\AnnouncementDetails;
use handelsregister\Api\Requests;

trait Resource
{
    /**
     * registration courts
     * @return \handelsregister\Api\RegistrationCourts
     */
    public function registrationCourts() {
        return new RegistrationCourts($this);
    }

    /**
     * register types.
     * @return \handelsregister\Api\RegisterTypes
     */
    public function registerTypes() {
        return new RegisterTypes($this);
    }

    /**
     * document types.
     * @return \handelsregister\Api\DocumentTypes
     */
    public function documentTypes() {
        return new DocumentTypes($this);
    }

    /**
     * countries.
     * @return \handelsregister\Api\Countries
     */
    public function countries() {
        return new Countries($this);
    }

    /**
     * request limits.
     * @return \handelsregister\Api\AccountLimits
     */
    public function accountLimits() {
        return new AccountLimits($this);
    }

    /**
     * Announcements
     * @return \handelsregister\Api\Announcements
     */
    public function announcements() {
        return new Announcements($this);
    }

    /**
     * List Announcements
     * @return \handelsregister\Api\AnnouncementDetails
     */
    public function announcementDetails() {
        return new AnnouncementDetails($this);
    }

    /**
     * Requests
     * @return \handelsregister\Api\Request
     */
    public function requests() {
        return new Requests($this);
    }
}

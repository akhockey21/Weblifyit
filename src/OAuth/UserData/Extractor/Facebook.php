<?php

/*
 * This file is part of the Oryzone PHPoAuthUserData package <https://github.com/Oryzone/PHPoAuthUserData>.
 *
 * (c) Oryzone, developed by Luciano Mammino <lmammino@oryzone.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace OAuth\UserData\Extractor;

use OAuth\UserData\Utils\ArrayUtils;
use OAuth\UserData\Utils\StringUtils;

/**
 * Class Facebook
 * @package OAuth\UserData\Extractor
 */
class Facebook extends LazyExtractor
{

    /**
     * Request contants
     */
    const REQUEST_PROFILE = 'v2.0/me';
    const REQUEST_IMAGE = 'v2.0/me/picture?type=large&redirect=false';

    const FIELD_BIRTHDAY = 'birthday';
    const FIELD_GENDER = 'gender';
    const FIELD_LOCALE = 'locale';

    /**
     * Constructor
     */
    public function __construct()
    {
        parent::__construct(
            self::getLoadersMap(), 
            self::getNormalizersMap(), 
            self::getSupportedFields()
        );
    }

    protected static function getLoadersMap()
    {
        return array_merge(self::getDefaultLoadersMap(), array(
            self::FIELD_IMAGE_URL => 'image',
            self::FIELD_BIRTHDAY => self::FIELD_BIRTHDAY,
            self::FIELD_GENDER => self::FIELD_GENDER,
            self::FIELD_LOCALE => self::FIELD_LOCALE,
        ));
    }

    public static function getNormalizersMap()
    {
        return array_merge(self::getDefaultNormalizersMap(), array(
            self::FIELD_IMAGE_URL => null,
            self::FIELD_BIRTHDAY => self::FIELD_BIRTHDAY,
            self::FIELD_GENDER => self::FIELD_GENDER,
            self::FIELD_LOCALE => self::FIELD_LOCALE,
        ));
    }

    public static function getSupportedFields()
    {
        $fields = array(self::FIELD_LOCALE, self::FIELD_BIRTHDAY, self::FIELD_GENDER);
        return array_merge(self::getAllFields(), $fields);
    }

    protected function profileLoader()
    {
        return json_decode($this->service->request(self::REQUEST_PROFILE), true);
    }

    protected function imageLoader()
    {
        $rawPicture = json_decode($this->service->request(self::REQUEST_IMAGE), true);
        if (isset($rawPicture['data'], $rawPicture['data']['url'])) {
            return $rawPicture['data']['url'];
        }

        return null;
    }

    protected function localeLoader()
    {
        return $this->getExtras();
    }

    protected function birthdayLoader()
    {
        return $this->getExtras();
    }

    protected function genderLoader()
    {
        return $this->getExtras();
    }

    protected function uniqueIdNormalizer($data)
    {
        return $data['id'];
    }

    protected function usernameNormalizer($data)
    {
        return isset($data['username']) ? $data['username'] : null;
    }

    protected function firstNameNormalizer($data)
    {
        return isset($data['first_name']) ? $data['first_name'] : null;
    }

    protected function lastNameNormalizer($data)
    {
        return isset($data['last_name']) ? $data['last_name'] : null;
    }

    protected function fullNameNormalizer($data)
    {
        return isset($data['name']) ? $data['name'] : null;
    }

    protected function emailNormalizer($data)
    {
        return isset($data['email']) ? $data['email'] : null;
    }

    protected function descriptionNormalizer($data)
    {
        return isset($data['bio']) ? $data['bio'] : null;
    }

    protected function profileUrlNormalizer($data)
    {
        return isset($data['link']) ? $data['link'] : null;
    }

    protected function locationNormalizer($data)
    {
        return isset($data['location']['name']) ? $data['location']['name'] : null;
    }

    protected function websitesNormalizer($data)
    {
        return isset($data['website']) ? StringUtils::extractUrls($data['website']) : array();
    }

    public function verifiedEmailNormalizer()
    {
        return true; // Facebook users who have access to Open Graph and OAuth always have a verified email
    }

    protected function birthdayNormalizer($data)
    {
        if (isset($data['birthday'])) {
            $pieces = explode('/', $data['birthday']);
            
            if (isset($pieces[0], $pieces[1])) {
                $temp = $pieces[0];
                $pieces[0] = $pieces[1];
                $pieces[1] = $temp;
            }

            return implode('-', array_reverse($pieces));
        }

        return null;
    }

    protected function genderNormalizer($data)
    {
        if (isset($data['gender'])) {
            switch ($data['gender']) {
                case 'female': return 'F';
                case 'male': return 'M';
            }
        }

        return null;
    }

    protected function localeNormalizer($data)
    {
        return isset($data['locale']) ? substr($data['locale'], 0, 2) : null;
    }

    protected function extraNormalizer($data)
    {
        return ArrayUtils::removeKeys($data, array(
            'id',
            'username',
            'first_name',
            'last_name',
            'name',
            'email',
            'bio',
            'link',
            'location',
            'website',
        ));
    }
}

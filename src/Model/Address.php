<?php
/**
 * Class Address
 */

namespace CheckoutFinland\SDK\Model;

/**
 * Class Address
 *
 * This class defines address details for a payment request.
 *
 * @see https://checkoutfinland.github.io/psp-api/#/?id=address
 * @package CheckoutFinland\SDK\Model
 */
class Address {

    /**
     * The street address.
     *
     * @var string
     */
    protected $streetAddress;

    /**
     * The postal code.
     *
     * @var string
     */
    protected $postalCode;

    /**
     * The city.
     *
     * @var string
     */
    protected $city;

    /**
     * The county.
     *
     * @var string
     */
    protected $county;

    /**
     * The country.
     *
     * @var string
     */
    protected $country;

    /**
     * Get the street address.
     *
     * @return string
     */
    public function getStreetAddress(): string {

        return $this->streetAddress;
    }

    /**
     * Set the sttreet address.
     *
     * @param string $streetAddress
     *
     * @return Address Return self to enable chaining.
     */
    public function setStreetAddress( string $streetAddress ) : Address {
        $this->streetAddress = $streetAddress;

        return $this;
    }

    /**
     * Get the postal code.
     *
     * @return string
     */
    public function getPostalCode(): string {

        return $this->postalCode;
    }

    /**
     * Set the tostal code.
     *
     * @param string $postalCode
     *
     * @return Address Return self to enable chaining.
     */
    public function setPostalCode( string $postalCode ) : Address {
        $this->postalCode = $postalCode;

        return $this;
    }

    /**
     * Get the city.
     *
     * @return string
     */
    public function getCity(): string {

        return $this->city;
    }

    /**
     * Set the city.
     *
     * @param string $city
     *
     * @return Address Return self to enable chaining.
     */
    public function setCity( string $city ) : Address {
        $this->city = $city;

        return $this;
    }

    /**
     * Get the county.
     *
     * @return string
     */
    public function getCounty(): string {

        return $this->county;
    }

    /**
     * Set the county.
     *
     * @param string $county
     *
     * @return Address Return self to enable chaining.
     */
    public function setCounty( string $county ) : Address {
        $this->county = $county;

        return $this;
    }

    /**
     * Get the country.
     *
     * @return string
     */
    public function getCountry(): string {

        return $this->country;
    }

    /**
     * Set the country.
     *
     * @param string $country
     *
     * @return Address Return self to enable chaining.
     */
    public function setCountry( string $country ) : Address {
        $this->country = $country;

        return $this;
    }

}

<?php
class AddressManager {
    private $addresses = ["209.131.36.159", "216.58.213.174"];
    public function outputAddresses (bool $resolve)
    {
        foreach ($this->addresses as $address) {
            print $address;
            if ($resolve) {
                print " (".gethostbyaddr($address).")";
            }
            print "<br /> \n";
        }
    }
}

$manager = new AddressManager();

$manager->outputAddresses("false");


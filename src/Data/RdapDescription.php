<?php

namespace Metaregistrar\RDAP\Data;

class RdapDescription extends RdapObject {
    /**
     * @var string|null
     */
    protected $description;

    public function __construct($key, $content) {
        parent::__construct($key, null);
        if (is_array($content)) {
            $this->description = $content[0];
        } else {
            $this->description = $content;
        }
    }

    public function dumpContents(): void {
        echo "  - Description: " . $this->getDescription() . "\n";
    }

    public function getDescription() {
        return $this->description;
    }
}

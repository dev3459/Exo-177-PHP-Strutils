<?php
class StrUtils {

    private String $str;

    public function __construct(String $str) {
        $this->setStr($str);
    }

    public function bold($str) {
        echo "<p class='bold'>".$this->getStr($str)."</p>";
    }
    public function italique($str) {
        echo "<p class='italique'>".$this->getStr($str)."</p>";
    }
    public function underline($str) {
        echo "<p class='underline'>".$this->getStr($str)."</p>";
    }
    public function capitalize($str) {
        echo "<p class='capitalize'>".$this->getStr($str)."</p>";
    }
    public function uglify($str) {
        echo "<p class='uglify'>".$this->getStr($str)."</p>";
    }

    /*
     * @return string getStr
     */
    public function getStr():string
    {
        return $this->str;
    }

    /*
     * @param string setStr
     */
    public function setStr($str): void
    {
        $this->str = $str;
    }

}

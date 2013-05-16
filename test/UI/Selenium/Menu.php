<?php
class Example extends PHPUnit_Extensions_SeleniumTestCase
{
  protected function setUp()
  {
    $this->setBrowser("*chrome");
    $this->setBrowserUrl("http://show.test/");
  }

  public function testMyTestCase()
  {
    $this->open("http://show.test/");
    for ($second = 0; ; $second++) {
        if ($second >= 60) $this->fail("timeout");
        try {
            if ("Show Manager:test" == $this->getTitle()) break;
        } catch (Exception $e) {}
        sleep(1);
    }

    $this->assertEquals("Show Manager:test", $this->getTitle());
    $this->assertEquals("Home", $this->getText("//td[1]/a/span"));
    $this->assertEquals("Shows", $this->getText("//td[2]/a/span"));
    $this->assertEquals("Sections", $this->getText("//td[3]/a/span"));
    $this->assertEquals("Classes", $this->getText("//td[4]/a/span"));
    $this->assertEquals("Prizes", $this->getText("//td[5]/a/span"));
    $this->assertEquals("Trophies", $this->getText("//td[6]/a/span"));
    $this->assertEquals("Sponsorship", $this->getText("//td[7]/a/span"));
    $this->assertEquals("Competitors", $this->getText("//td[8]/a/span"));
    $this->assertEquals("Results", $this->getText("//td[9]/a/span"));
    $this->assertEquals("Summary", $this->getText("//td[10]/a/span"));
    $this->assertEquals("BHS", $this->getText("css=h1"));
    $this->assertEquals("Summer Show 2012", $this->getText("css=h2"));
    $this->assertTrue($this->isElementPresent("css=hr"));
  }
}
?>
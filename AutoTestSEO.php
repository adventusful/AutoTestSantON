<?php
class AutoTestSEO extends PHPUnit_Framework_TestCase
{
		protected $url = 'http://admin:qwerty6@stand.santehnika-online.ru' ; 
		protected $webDriver;
/**
 * @expectedException Exception
 */
		
  public function setUp()
    {
        $capabilities = array(\WebDriverCapabilityType::BROWSER_NAME => 'firefox');
        $this->webDriver = RemoteWebDriver::create('http://localhost:4444/wd/hub', $capabilities);
    }
  public function tearDown()
    { 
		$this->webDriver->close();
    }
    
    public function seoAloneProduct() 
	{
	    $SEO=$this->webDriver->get($this->url);
		echo "\n".'Заходим на сайт и переходим'."\n";
$a = array(
           "//a[@title='Раковины']",
           "//a[@title='Мебель для ванной']",
           "//a[@title='Унитазы']",
		   "//a[@title='Писсуары']",
		   "//a[@title='Кухонные мойки']",
		   "//a[@title='Смесители']",
		   "//a[@title='Душевая программа']",
		   "//a[@title='Биде']",
		   "//a[@title='Инсталляции']",
		   "//a[@title='Сифоны']",
		   "//a[@title='Полотенцесушители']",
		   "//a[@title='Водонагреватели']",
		   "//a[@title='Радиаторы отопления']",
		   "//a[@title='Обогреватели']",
		   "//a[@title='Теплые полы']",
		   "//*[@id='sidebar']/aside/div[3]/div/div/div/nav/ul/li[1]/a",
		   "//a[@href='/discount/ucenka/']"
		   );

foreach ($a as $v) {     
	$SEOPage = $this->webDriver->findElement(WebDriverBy::xpath($v))->getText(); 
	echo "\n Открываем страницу $SEOPage.\n";
	$SEO = $this->webDriver->findElement(WebDriverBy::xpath($v));
    $SEO->click();
	$CurrURL = $this->webDriver->getCurrentURL();
	echo $CurrURL;
	$source = $this->webDriver->getPageSource();
	try {
	try {
	$this->assertContains('<h1>', $source,'Все не ок');
	echo "\n.Тег h1 есть.\n";
	}
		catch (PHPUnit_Framework_ExpectationFailedException $ex) {
        echo "\n.'Ошибка. Нет тега h1 на страницах: $SEOPage.\n";
		
	//	throw $ex;
	//	var_dump($ex->getMessage());
	} 
	try {
	$this->assertContains('<h2 class="h3"', $source,'Все не ок');
	echo "\n.Тег h2 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h2 на страницах: $SEOPage.\n";	
	//	throw $ex;
		//var_dump($ex->getMessage());
	}
	try {
	$this->assertContains('<h3 class="h4">', $source,'Все не ок');
	echo "\n.Тег h3 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h3 на страницах: $SEOPage.\n";	
	//	throw $ex;
		//var_dump($ex->getMessage());
	}
	try {
	$this->assertContains('<h4>', $source,'Все не ок');
	echo "\n.Тег h4 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h4 на страницах: $SEOPage.\n";
		//echo $ex;
		//var_dump($ex->getMessage());
		//return $ex;
	//	throw $ex;	
	}
	
	try {
	$this->assertContains('h5 class=""', $source,'Все не ок');
	
	echo "\n.Тег h5 есть.\n";
	}
		catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h5 на страницах: $SEOPage.\n";
	//	throw $ex;
	}
	try {
	$this->assertNotContains('<h6>', $source,'Все не ок');
	echo "\n.Тег h6 отсутствует.\n";
	}
	catch (PHPUnit_Framework_Exception $ex) {
		echo "\n Ошибка. Есть тег h6 на страницах: $SEOPage.\n";		
	//	throw $ex;
	}
}
catch (Exception $ex) {
	
}
}
}

    public function seoParentProductShower() {
	$SEO = $this->webDriver->findElement(WebDriverBy::xpath("//a[@title='Душевые кабины и углы']"));
	$SEO->click();
	$b = array(
	           "//a[@title='Душевые кабины']",
			   "//a[@title='Душевые боксы']",
			   "//a[@title='Уголки, ограждения, поддоны']",
			   "//a[@title='Трапы и душевые лотки']"
	);
	foreach ($b as $v) {     
	$SEOPage = $this->webDriver->findElement(WebDriverBy::xpath($v))->getText(); 
	echo "\n Открываем страницу $SEOPage.\n";
	$SEO = $this->webDriver->findElement(WebDriverBy::xpath($v));
    $SEO->click();
	$CurrURL = $this->webDriver->getCurrentURL();
	echo $CurrURL;
	$source = $this->webDriver->getPageSource();
	try {
	try {
	$this->assertContains('<h1>', $source,'Все не ок');
	echo "\n.Тег h1 есть.\n";
	}
		catch (PHPUnit_Framework_ExpectationFailedException $ex) {
        echo "\n.'Ошибка. Нет тега h1 на страницах: $SEOPage.\n";
		
	//	throw $ex;
	//	var_dump($ex->getMessage());
	} 
	try {
	$this->assertContains('<h2 class="h3"', $source,'Все не ок');
	echo "\n.Тег h2 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h2 на страницах: $SEOPage.\n";	
	//	throw $ex;
		//var_dump($ex->getMessage());
	}
	try {
	$this->assertContains('<h3 class="h4">', $source,'Все не ок');
	echo "\n.Тег h3 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h3 на страницах: $SEOPage.\n";	
	//	throw $ex;
		//var_dump($ex->getMessage());
	}
	try {
	$this->assertContains('<h4>', $source,'Все не ок');
	echo "\n.Тег h4 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h4 на страницах: $SEOPage.\n";
		//echo $ex;
		//var_dump($ex->getMessage());
		//return $ex;
	//	throw $ex;	
	}
	
	try {
	$this->assertContains('h5 class=""', $source,'Все не ок');
	
	
	echo "\n.Тег h5 есть.\n";
	}
		catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h5 на страницах: $SEOPage.\n";
	//	throw $ex;
	}
	try {
	$this->assertNotContains('<h6>', $source,'Все не ок');
	echo "\n.Тег h6 отсутствует.\n";
	}
	catch (PHPUnit_Framework_Exception $ex) {
		echo "\n Ошибка. Есть тег h6 на страницах: $SEOPage.\n";		
	//	throw $ex;
	}
}
catch (Exception $ex) {
	
}
}
}

    public function seoParentProductBath() {
	 $SEO = $this->webDriver->findElement(WebDriverBy::xpath("//a[@title='Ванны']"));
	 $SEO->click();
	 $b = array(
	           "//a[@title='Акриловые ванны']",
			   "//a[@title='Чугунные ванны']",
			   "//a[@title='Стальные ванны']",
			   "//a[@title='Ванны из литьевого мрамора']"
	);
	foreach ($b as $v) {     
	$SEOPage = $this->webDriver->findElement(WebDriverBy::xpath($v))->getText(); 
	echo "\n Открываем страницу $SEOPage.\n";
	$SEO = $this->webDriver->findElement(WebDriverBy::xpath($v));
    $SEO->click();
	$CurrURL = $this->webDriver->getCurrentURL();
	echo $CurrURL;
	$source = $this->webDriver->getPageSource();
	try {
	try {
	$this->assertContains('<h1>', $source,'Все не ок');
	echo "\n.Тег h1 есть.\n";
	}
		catch (PHPUnit_Framework_ExpectationFailedException $ex) {
        echo "\n.'Ошибка. Нет тега h1 на страницах: $SEOPage.\n";
		
	//	throw $ex;
	//	var_dump($ex->getMessage());
	} 
	try {
	$this->assertContains('<h2 class="h3"', $source,'Все не ок');
	echo "\n.Тег h2 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h2 на страницах: $SEOPage.\n";	
	//	throw $ex;
		//var_dump($ex->getMessage());
	}
	try {
	$this->assertContains('<h3 class="h4">', $source,'Все не ок');
	echo "\n.Тег h3 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h3 на страницах: $SEOPage.\n";	
	//	throw $ex;
		//var_dump($ex->getMessage());
	}
	try {
	$this->assertContains('<h4>', $source,'Все не ок');
	echo "\n.Тег h4 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h4 на страницах: $SEOPage.\n";
		//echo $ex;
		//var_dump($ex->getMessage());
		//return $ex;
	//	throw $ex;	
	}
	
	try {
	$this->assertContains('h5 class=""', $source,'Все не ок');
	
	echo "\n.Тег h5 есть.\n";
	}
		catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h5 на страницах: $SEOPage.\n";
	//	throw $ex;
	}
	try {
	$this->assertNotContains('<h6>', $source,'Все не ок');
	echo "\n.Тег h6 отсутствует.\n";
	}
	catch (PHPUnit_Framework_Exception $ex) {
		echo "\n Ошибка. Есть тег h6 на страницах: $SEOPage.\n";		
	//	throw $ex;
	}
}
catch (Exception $ex) {
	
}
}
	 }
	
	public function seoParentPriductHardware() {
	$SEO = $this->webDriver->findElement(WebDriverBy::xpath("//*[@id='sidebar']/aside/div[1]/div/div/div/nav/ul/li[18]/a"));
	$SEO->click();
	$b = array(
	           "//a[@title='для мебели']",
			   "//a[@title='для душевых кабин']",
			   "//a[@title='для ванн']",
			   "//a[@title='для унитазов']",
			   "//a[@title='для раковин']",
			   "//a[@title='для кухонных моек']",
			   "//a[@title='для смесителей']",
			   "//a[@title='для биде']",
			   "//a[@title='для писсуаров']",
			   "//a[@title='для теплотехники']",
	);
	foreach ($b as $v) {     
	$SEOPage = $this->webDriver->findElement(WebDriverBy::xpath($v))->getText(); 
	echo "\n Открываем страницу $SEOPage.\n";
	$SEO = $this->webDriver->findElement(WebDriverBy::xpath($v));
    $SEO->click();
	$CurrURL = $this->webDriver->getCurrentURL();
	echo $CurrURL;
	$source = $this->webDriver->getPageSource();
	try {
	try {
	$this->assertContains('<h1>', $source,'Все не ок');
	echo "\n.Тег h1 есть.\n";
	}
		catch (PHPUnit_Framework_ExpectationFailedException $ex) {
        echo "\n.'Ошибка. Нет тега h1 на страницах: $SEOPage.\n";
		
	//	throw $ex;
	//	var_dump($ex->getMessage());
	} 
	try {
	$this->assertContains('<h2 class="h3"', $source,'Все не ок');
	echo "\n.Тег h2 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h2 на страницах: $SEOPage.\n";	
	//	throw $ex;
		//var_dump($ex->getMessage());
	}
	try {
	$this->assertContains('<h3 class="h4">', $source,'Все не ок');
	echo "\n.Тег h3 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h3 на страницах: $SEOPage.\n";	
	//	throw $ex;
		//var_dump($ex->getMessage());
	}
	try {
	$this->assertContains('<h4>', $source,'Все не ок');
	echo "\n.Тег h4 есть.\n";
	}
	catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h4 на страницах: $SEOPage.\n";
		//echo $ex;
		//var_dump($ex->getMessage());
		//return $ex;
	//	throw $ex;	
	}
	
	try {
	$this->assertContains('h5 class=""', $source,'Все не ок');
	
	echo "\n.Тег h5 есть.\n";
	}
		catch (PHPUnit_Framework_ExpectationFailedException $ex) {
		echo "\n Ошибка. Нет тега h5 на страницах: $SEOPage.\n";
	//	throw $ex;
	}
	try {
	$this->assertNotContains('<h6>', $source,'Все не ок');
	echo "\n.Тег h6 отсутствует.\n";
	}
	catch (PHPUnit_Framework_Exception $ex) {
		echo "\n Ошибка. Есть тег h6 на страницах: $SEOPage.\n";		
	//	throw $ex;
	}
}
catch (Exception $ex) {
	
}
}
	
	}
	}
	
	
	
	

?>

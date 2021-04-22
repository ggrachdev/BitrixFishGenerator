<?

include_once 'classes/general/Libs/faker/src/autoload.php';

\Bitrix\Main\Loader::registerAutoLoadClasses('ggrachdev.fish_generator', [
    // exceptions
    "\GGrach\FishGenerator\Exceptions\BitrixRedactionException" => "classes/general/FishGenerator/Exceptions/BitrixRedactionException.php",
    "\GGrach\FishGenerator\Exceptions\GenerateElementException" => "classes/general/FishGenerator/Exceptions/GenerateElementException.php",
    "\GGrach\FishGenerator\Exceptions\GeneratePhotoException" => "classes/general/FishGenerator/Exceptions/GeneratePhotoException.php",
    "\GGrach\FishGenerator\Exceptions\GeneratorTypeException" => "classes/general/FishGenerator/Exceptions/GeneratorTypeException.php",
    "\GGrach\FishGenerator\Exceptions\SearchIblockException" => "classes/general/FishGenerator/Exceptions/SearchIblockException.php",
    
    // other
    "\GGrach\FishGenerator\Debug" => "classes/general/FishGenerator/Debug.php",
    "\GGrach\FishGenerator\Generators\PhotoGenerator" => "classes/general/FishGenerator/Generators/PhotoGenerator.php",
    "\GGrach\FishGenerator\PropertyRulesElementFilter" => "classes/general/FishGenerator/PropertyRulesElementFilter.php",
    "\GGrach\FishGenerator\Generators\ElementGenerator" => "classes/general/FishGenerator/Generators/ElementGenerator.php",
    
    // entry point
    "\GGrach\FishGenerator\Generators\FishGenerator" => "classes/general/FishGenerator/Generators/FishGenerator.php",
]);
?>
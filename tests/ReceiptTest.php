<?php
    namespace TDD\Test;
    
    require dirname(dirname(__FILE__)) . DIRECTORY_SEPARATOR . "vendor" . DIRECTORY_SEPARATOR . "autoload.php";
    

    use PHPUnit\Framework\TestCase;
    use TDD\Receipt;

    class ReceiptTest extends TestCase{

        public $receipt;

        public function setUp() {
            $this->receipt = new Receipt();
        }

        public function tearDown() {
            unset($this->receipt);
        }
        
     public function testTotal() {
        $input = [56, 128, 89, 24, 133, 233, 212, 23];
        $output = $this->receipt->total($input);
        $expected = 898;

        $this->assertEquals(
             $expected,
             $output,
             'Wanneer ik de getallen oplet moet er het volgende uitkomen'
        );
     }

     public function testProduct() {
         $input = [56, 128, 89, 24, 133, 233, 212, 23];
         $output = $this->receipt->product($input);
         $expected = 2313505327644672;

         $this->assertEquals(
            $expected,
            $output,
            "Wanneer ik de getallen vermenigvuldig moet er het volgende uitkomen"
       );
     }

      /** 
      * @dataProvider provideProduct
     */

     public function provideProduct() {
        return [
            [[2,3,4], 24, "Eerste test"],
            [[6,3], 18, "Tweede test"],
            [[9,3], 27, "Derde test"],
            [[10,3], 30, "Vierde test"],
            [[15,3], "Vijde test"],
            [[10,10], 100, "Zesde test"]
        ];
     }

    }
?>
<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: transaction.proto

namespace chain33\phpsdk\lib\protobuf;

class Transaction
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \chain33\phpsdk\lib\protobuf\Common::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0ae41a0a117472616e73616374696f6e2e70726f746f1221636861696e33" .
            "332e70687073646b2e6c69622e70726f746f6275662e747970657322360a" .
            "0d41737365747347656e65736973120e0a06616d6f756e74180220012803" .
            "12150a0d72657475726e4164647265737318032001280922650a14417373" .
            "6574735472616e73666572546f4578656312110a09636f696e746f6b656e" .
            "180120012809120e0a06616d6f756e74180220012803120c0a046e6f7465" .
            "18032001280c12100a08657865634e616d65180420012809120a0a02746f" .
            "180520012809225f0a0e417373657473576974686472617712110a09636f" .
            "696e746f6b656e180120012809120e0a06616d6f756e7418022001280312" .
            "0c0a046e6f746518032001280c12100a08657865634e616d651804200128" .
            "09120a0a02746f180520012809224d0a0e4173736574735472616e736665" .
            "7212110a09636f696e746f6b656e180120012809120e0a06616d6f756e74" .
            "180220012803120c0a046e6f746518032001280c120a0a02746f18042001" .
            "280922350a054173736574120c0a0465786563180120012809120e0a0673" .
            "796d626f6c180220012809120e0a06616d6f756e74180320012803229d01" .
            "0a084372656174655478120a0a02746f180120012809120e0a06616d6f75" .
            "6e74180220012803120b0a03666565180320012803120c0a046e6f746518" .
            "042001280c12120a0a69735769746864726177180520012808120f0a0769" .
            "73546f6b656e18062001280812130a0b746f6b656e53796d626f6c180720" .
            "01280912100a08657865634e616d65180820012809120e0a066578656365" .
            "7218092001280922520a0c526557726974655261775478120a0a02747818" .
            "0120012809120a0a02746f180320012809120e0a06657870697265180420" .
            "012809120b0a03666565180520012803120d0a05696e6465781806200128" .
            "0522250a164372656174655472616e73616374696f6e47726f7570120b0a" .
            "0374787318012003280922180a08556e7369676e5478120c0a0464617461" .
            "18012001280c22500a0c4e6f42616c616e6365547873120e0a0674784865" .
            "7873180120032809120f0a0770617941646472180220012809120f0a0770" .
            "7269766b6579180320012809120e0a06657870697265180420012809224e" .
            "0a0b4e6f42616c616e63655478120d0a057478486578180120012809120f" .
            "0a0770617941646472180220012809120f0a07707269766b657918032001" .
            "2809120e0a0665787069726518042001280922d9010a0b5472616e736163" .
            "74696f6e120e0a0665786563657218012001280c120f0a077061796c6f61" .
            "6418022001280c123f0a097369676e617475726518032001280b322c2e63" .
            "6861696e33332e70687073646b2e6c69622e70726f746f6275662e747970" .
            "65732e5369676e6174757265120b0a03666565180420012803120e0a0665" .
            "7870697265180520012803120d0a056e6f6e6365180620012803120a0a02" .
            "746f18072001280912120a0a67726f7570436f756e74180820012805120e" .
            "0a0668656164657218092001280c120c0a046e657874180a2001280c224b" .
            "0a0c5472616e73616374696f6e73123b0a0374787318012003280b322e2e" .
            "636861696e33332e70687073646b2e6c69622e70726f746f6275662e7479" .
            "7065732e5472616e73616374696f6e22540a0d52696e675369676e617475" .
            "726512430a056974656d7318012003280b32342e636861696e33332e7068" .
            "7073646b2e6c69622e70726f746f6275662e74797065732e52696e675369" .
            "676e61747572654974656d22360a1152696e675369676e61747572654974" .
            "656d120e0a067075626b657918012003280c12110a097369676e61747572" .
            "6518022003280c223a0a095369676e6174757265120a0a02747918012001" .
            "2805120e0a067075626b657918022001280c12110a097369676e61747572" .
            "6518032001280c22410a0c416464724f76657276696577120f0a07726563" .
            "69766572180120012803120f0a0762616c616e6365180220012803120f0a" .
            "077478436f756e7418032001280322660a0752657141646472120c0a0461" .
            "646472180120012809120c0a04666c6167180220012805120d0a05636f75" .
            "6e7418032001280512110a09646972656374696f6e180420012805120e0a" .
            "06686569676874180520012803120d0a05696e6465781806200128032213" .
            "0a054865785478120a0a02747818012001280922740a0b5265706c795478" .
            "496e666f120c0a046861736818012001280c120e0a066865696768741802" .
            "20012803120d0a05696e64657818032001280312380a0661737365747318" .
            "042003280b32282e636861696e33332e70687073646b2e6c69622e70726f" .
            "746f6275662e74797065732e4173736574221a0a0952657154784c697374" .
            "120d0a05636f756e74180120012803224a0a0b5265706c7954784c697374" .
            "123b0a0374787318012003280b322e2e636861696e33332e70687073646b" .
            "2e6c69622e70726f746f6275662e74797065732e5472616e73616374696f" .
            "6e221e0a0d5265714765744d656d706f6f6c120d0a056973416c6c180120" .
            "012808222f0a0c52657150726f706572466565120f0a077478436f756e74" .
            "180120012805120e0a06747853697a6518022001280522230a0e5265706c" .
            "7950726f70657246656512110a0970726f70657246656518012001280322" .
            "3b0a0a5478486173684c697374120e0a0668617368657318012003280c12" .
            "0d0a05636f756e74180220012803120e0a06657870697265180320032803" .
            "224f0a0c5265706c795478496e666f73123f0a077478496e666f73180120" .
            "03280b322e2e636861696e33332e70687073646b2e6c69622e70726f746f" .
            "6275662e74797065732e5265706c795478496e666f22250a0a5265636569" .
            "70744c6f67120a0a027479180120012805120b0a036c6f6718022001280c" .
            "228b010a0752656365697074120a0a02747918012001280512370a024b56" .
            "18022003280b322b2e636861696e33332e70687073646b2e6c69622e7072" .
            "6f746f6275662e74797065732e4b657956616c7565123b0a046c6f677318" .
            "032003280b322d2e636861696e33332e70687073646b2e6c69622e70726f" .
            "746f6275662e74797065732e526563656970744c6f6722560a0b52656365" .
            "69707444617461120a0a027479180120012805123b0a046c6f6773180320" .
            "03280b322d2e636861696e33332e70687073646b2e6c69622e70726f746f" .
            "6275662e74797065732e526563656970744c6f6722d1010a085478526573" .
            "756c74120e0a06686569676874180120012803120d0a05696e6465781802" .
            "20012805123a0a02747818032001280b322e2e636861696e33332e706870" .
            "73646b2e6c69622e70726f746f6275662e74797065732e5472616e736163" .
            "74696f6e12430a0b726563656970746461746518042001280b322e2e6368" .
            "61696e33332e70687073646b2e6c69622e70726f746f6275662e74797065" .
            "732e526563656970744461746112110a09626c6f636b74696d6518052001" .
            "280312120a0a616374696f6e4e616d651806200128092292030a11547261" .
            "6e73616374696f6e44657461696c123a0a02747818012001280b322e2e63" .
            "6861696e33332e70687073646b2e6c69622e70726f746f6275662e747970" .
            "65732e5472616e73616374696f6e123f0a07726563656970741802200128" .
            "0b322e2e636861696e33332e70687073646b2e6c69622e70726f746f6275" .
            "662e74797065732e5265636569707444617461120e0a0670726f6f667318" .
            "032003280c120e0a06686569676874180420012803120d0a05696e646578" .
            "18052001280312110a09626c6f636b74696d65180620012803120e0a0661" .
            "6d6f756e7418072001280312100a0866726f6d6164647218082001280912" .
            "120a0a616374696f6e4e616d6518092001280912380a0661737365747318" .
            "0a2003280b32282e636861696e33332e70687073646b2e6c69622e70726f" .
            "746f6275662e74797065732e4173736574123c0a08747850726f6f667318" .
            "0b2003280b322a2e636861696e33332e70687073646b2e6c69622e70726f" .
            "746f6275662e74797065732e547850726f6f6612100a0866756c6c486173" .
            "68180c2001280c22570a125472616e73616374696f6e44657461696c7312" .
            "410a0374787318012003280b32342e636861696e33332e70687073646b2e" .
            "6c69622e70726f746f6275662e74797065732e5472616e73616374696f6e" .
            "44657461696c22190a085265714164647273120d0a056164647273180120" .
            "03280922280a175265714465636f64655261775472616e73616374696f6e" .
            "120d0a057478486578180120012809222b0a09557365725772697465120d" .
            "0a05746f706963180120012809120f0a07636f6e74656e74180220012809" .
            "22400a0b557067726164654d65746112100a087374617274696e67180120" .
            "012808120f0a0776657273696f6e180220012809120e0a06686569676874" .
            "18032001280322340a0d5265715478486173684c697374120e0a06686173" .
            "68657318012003280912130a0b697353686f727448617368180220012808" .
            "223a0a07547850726f6f66120e0a0670726f6f667318012003280c120d0a" .
            "05696e64657818022001280d12100a08726f6f744861736818032001280c" .
            "423d5a1d6769746875622e636f6d2f3333636e2f636861696e33332f7479" .
            "706573e2021b636861696e33332f70687073646b2f6c69622f70726f746f" .
            "627566620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

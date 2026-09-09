class Cat {
use MakesSound;
}
 
class Dog {
use HasSmell;
}
 
trait hasSSmell {
    public $smell;
    public function sniff() {
        return 'smells like' . $this->smell;
    }
}
 
trait MakesSound {
    public $sound;
    public function noise() {
        return 'sounds like' . $this->sound;
    }
}
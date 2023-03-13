<?php 
        // class Enemy {
        //     private $name;
        //     public $stamina;
        //     public $attack;
    
        //     public function __construct($name, $stamina = 100, $attack = 10) {
        //         $this->name = $name;
        //         $this->stamina = $stamina;
        //         $this->attack = $attack;
        //     }
    
        //     public function sayMyName() {
        //         echo $this->name.'があらわれた！';
        //     } 
        //     public function powerUp() {
        //     $this->attack += 10;
        //     echo '攻撃力が'.$this->attack.'になった。</br>';
        //     }
        // }

        // $slime = new Enemy('スライム');
        // $slime->sayMyName();
        // echo $slime->stamina;
        // echo $slime->attack;
        // echo '</br>';
        // $kuribo = new Enemy('クリボー', 200, 10);
        // echo $kuribo->stamina;
        // echo $kuribo->attack;

        
        //     $slime = new Enemy('スライム');
        //     $slime->powerUp();

        class Enemy {
            public $name;
            public $stamina;
            public $attack;
            public static $count = 0;
        
            public function __construct($name, $stamina = 100, $attack = 10) {
                $this->name = $name;
                $this->stamina = $stamina;
                $this->attack = $attack;
                Self::$count += 1;
            }
        
            public static function getEnemyCount() {
                echo Self::$count.'体の敵を作りました！';
            }
    }
    Enemy::getEnemyCount();
    $slime_A = new Enemy('スライム');
    $slime_B = new Enemy('スライム');
    $slime_C = new Enemy('スライム');
    $slime_D = new Enemy('スライム');
    Enemy::getEnemyCount();

     ?>
 
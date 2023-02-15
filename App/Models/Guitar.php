<?php


    namespace App\Models;


    use App\Services\Db;
    use \Exception;

    class Guitar {

        public static function getAll() {
            $db = Db::getInstance();
            $sql = 'SELECT guitars.*, cats.name as cat_name FROM guitars JOIN cats ON guitars.id_cat=cats.id_cat';
            return $db::query($sql, self::class);
        }
        public static function getByCat(int $cid): ?array {
            $db = Db::getInstance();
            $sql = 'SELECT guitars.*, cats.id_cat as cat_name FROM guitars JOIN cats ON guitars.id_cat=cats.id_cat WHERE cats.id_cat=:cid';
            return $db::query($sql, self::class, ['cid' => $cid]);
        }
        public static function getById(int $id) {
            $db = Db::getInstance();
            $sql = 'SELECT guitars.*, cats.id_cat as cat_name FROM guitars JOIN cats ON guitars.id_cat=cats.id_cat WHERE id_guitar=:id';
            return $db::query($sql, self::class, ['id' => $id]);
        }

        

        public static function delete(int $id): void {
            $db = Db::getInstance();
            $sql = 'DELETE FROM guitars WHERE id_guitar=:id';
            
            if (!$db::execute($sql, ['id' => $id])) {
                throw new Exception('WTF maaan. What the shit are ya doin. There\'s no guitar with id=' . $id);
                die;
            }
        }
        public static function add(array $fields): void {
            
            $name = trim($fields['name']);
            $cost = trim($fields['cost']);
            $sale = trim($fields['sale']);
            $cat = trim($fields['cat']);
            $image = $_FILES['image'];


            $imageExt = pathinfo($image['name'], PATHINFO_EXTENSION);
			$imageName = mt_rand(100000000, 10000000000000) . '.' . $imageExt;

			copy($image['tmp_name'], BASE_DIR . '/Assets/img/models/' .  $imageName);

            $fields = [
                'name' => $name,
                'cost' => $cost,
                'sale' => $sale,
                'img' => $imageName,
                'id_cat' => $cat,
            ];

            
            $db = Db::getInstance();
            $sql = 'INSERT guitars (name, img, cost, sale, id_cat) VALUES (:name, :img, :cost, :sale, :id_cat)';
            if (!$db::execute($sql, $fields)) {
                throw new Exception('Some error while adding a guitar. Check your fields');
            }
        }

        public static function edit(array $fields, $crntGuitar): void {
            $name = trim($fields['name']);
            $cost = trim($fields['cost']);
            $sale = trim($fields['sale']);
            $cat = trim($fields['cat']);
            $image = $_FILES['image'];

            if ($image['name'] !== '') {
                $imageExt = pathinfo($image['name'], PATHINFO_EXTENSION);
                $imageName = mt_rand(100000000, 10000000000000) . '.' . $imageExt;
    
                copy($image['tmp_name'], BASE_DIR . '/Assets/img/models/' .  $imageName);
            }
            $imageName = $crntGuitar->img;

            $fields = [
                'name' => $name,
                'cost' => $cost,
                'sale' => $sale,
                'img' => $imageName,
                'id_cat' => $cat,
                'guitarId' => $crntGuitar->id_guitar,
            ];

            
            $db = Db::getInstance();
            $sql = 'UPDATE guitars SET name=:name, img=:img, cost=:cost, sale=:sale, id_cat=:id_cat WHERE id_guitar=:guitarId';
            if (!$db::execute($sql, $fields)) {
                throw new Exception('Some error while updating a guitar. Check your fields');
            }
        }
    }
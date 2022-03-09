<?php
use App\Comic;
use Illuminate\Database\Seeder;

class ComicTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $comics = config('comics');

        foreach($comics as $comic){
            $newComics = new Comic();
            $newComics->title = $comic["title"];
            $newComics->description = $comic["description"];
            $newComics->thumb = $comic["thumb"];
            $newComics->price = $comic["price"];
            $newComics->series = $comic["series"];
            $newComics->sale_date = $comic["sale_date"];
            $newComics->type = $comic["type"];
            $newComics->save();
        }
    }
}

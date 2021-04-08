<?php

namespace Database\Factories;

use App\Models\Photo;
use Illuminate\Database\Eloquent\Factories\Factory;

class PhotoFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Photo::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $photos = array(
            0 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/237/300/300',
            ),
            1 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/530/300/300',
            ),
            2 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/552/300/300',
            ),
            3 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/76/300/300',
            ),
            4 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/648/300/300',
            ),
            5 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/316/300/300',
            ),
            6 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/973/300/300',
            ),
            7 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/918/300/300',
            ),
            8 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/919/300/300',
            ),
            9 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/545/300/300',
            ),
            10 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/507/300/300',
            ),
            11 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/183/300/300',
            ),
            12 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/121/300/300',
            ),
            13 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/545/300/300',
            ),
            14 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/411/300/300',
            ),
            15 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/166/300/300',
            ),
            16 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/432/300/300',
            ),
            17 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/449/300/300',
            ),
            18 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/879/300/300',
            ),
            19 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/1042/300/300',
            ),
            20 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/607/300/300',
            ),
            21 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/766/300/300',
            ),
            22 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/495/300/300',
            ),
            23 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/612/300/300',
            ),
            24 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/460/300/300',
            ),
            25 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/315/300/300',
            ),
            26 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/45/300/300',
            ),
            27 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/360/300/300',
            ),
            28 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/251/300/300',
            ),
            29 =>
            (object) array(
                'photo' => 'https://picsum.photos/300/300',
            ),
            30 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/294/300/300',
            ),
            31 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/693/300/300',
            ),
            32 =>
            (object) array(
                'photo' => 'https://picsum.photos/id/782/300/300',
            ),
        );

        return [
            'categoryId' => rand(1, 5),
            'photo' => "https://picsum.photos/id/{$this->faker->numberBetween(1, 3000)}/300/300",
            'title' => $this->faker->name,
        ];
    }
}

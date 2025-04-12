<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductInfo;
use App\Models\Tag;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
        ]);

        User::factory()->create([
            'name' => 'moderator',
            'email' => 'moderator@moderator.com',
            'password' => Hash::make('moderator'),
        ]);

        User::factory()->create([
            'name' => 'user',
            'email' => 'user@user.com',
            'password' => Hash::make('user'),
        ]);




        $adminRole = Role::firstOrCreate(['name' => 'admin']);
        $moderatorRole = Role::firstOrCreate(['name' => 'moderator']);
        $userRole = Role::firstOrCreate(['name' => 'user']);


        $permissions = Permission::all();
        $adminRole->syncPermissions($permissions);

        $user = User::first();
        if ($user) {
            $user->assignRole('admin');
        }

        $user = User::first();
        if ($user) {
            $user->assignRole('moderator');
        }

        $user = User::first();
        if ($user) {
            $user->assignRole('user');
        }


        $tags = [
            'Action',
            'Adventure',
            'RPG',
            'Simulation',
            'Strategy',
            'Sports',
            'Puzzle',
            'Racing',
            'Fighting',
            'Platformer',
            'Shooter',
            'Family',
            'Multiplayer',
            'Indie',
            'Exclusive'
        ];

        foreach ($tags as $tagName) {
            Tag::firstOrCreate(['name' => $tagName]);
        }

        $this->command->info('Product tags seeded successfully!');

        $products = [
            [
                'name' => 'Super Adventure Quest',
                'description' => 'Embark on an epic journey through magical realms. Discover hidden treasures and ancient artifacts. ' .
                    'Battle fearsome monsters and legendary creatures. Form alliances with mystical beings and fellow adventurers. ' .
                    'Level up your character with powerful abilities and equipment. Complete challenging quests across vast landscapes.',
                'description_title' => 'Epic Fantasy Adventure',
                'price' => 59.99,
                'has_free_demo' => false,
                'discount' => 20,
                'discount_end_date' => now()->addDays(30),
                'tags' => ['Action', 'Adventure', 'RPG']
            ],
            [
                'name' => 'Racing Thunder 2024',
                'description' => 'Experience high-speed thrills with stunning next-gen graphics. Race across beautifully detailed tracks worldwide. ' .
                    'Customize your vehicles with extensive modification options. Compete online against skilled racers globally. ' .
                    'Master advanced driving techniques and strategies. Experience realistic physics and weather conditions.',
                'description_title' => 'Next-Gen Racing',
                'price' => 0,
                'has_free_demo' => false,
                'discount' => 0,
                'tags' => ['Racing', 'Sports', 'Multiplayer']
            ],
            [
                'name' => 'Farm Life Simulator',
                'description' => 'Build and manage your dream farm from the ground up. Cultivate crops and raise various livestock. ' .
                    'Interact with friendly neighbors and local merchants. Expand your farm with new buildings and equipment. ' .
                    'Experience changing seasons affecting your farming strategy. Participate in local festivals and community events.',
                'description_title' => 'Relaxing Farm Simulation',
                'price' => 29.99,
                'has_free_demo' => false,
                'discount' => 15,
                'discount_end_date' => now()->addDays(15),
                'tags' => ['Simulation', 'Family', 'Indie']
            ],
            [
                'name' => 'Ninja Warriors Ultimate',
                'description' => 'Master the ancient arts of stealth and combat. Learn and execute devastating martial arts combinations. ' .
                    'Navigate through challenging obstacle courses and dojos. Face off against legendary martial arts masters. ' .
                    'Unlock secret techniques and special abilities. Compete in intense multiplayer tournaments.',
                'description_title' => 'Ultimate Fighting Experience',
                'price' => 39.99,
                'has_free_demo' => false,
                'discount' => 15,
                'discount_end_date' => now()->addDays(15),
                'tags' => ['Fighting', 'Action', 'Multiplayer']
            ],
            [
                'name' => 'Puzzle Masters',
                'description' => 'Challenge your mind with increasingly complex puzzles. Solve intricate riddles and brain teasers. ' .
                    'Progress through various difficulty levels and modes. Compete with friends in multiplayer puzzle challenges. ' .
                    'Unlock new puzzle types and special challenges. Track your progress with detailed statistics.',
                'description_title' => 'Brain-Teasing Puzzles',
                'price' => 0,
                'has_free_demo' => false,
                'discount' => 0,
                'tags' => ['Puzzle', 'Family', 'Strategy']
            ],
            [
                'name' => 'Space Colony X',
                'description' => 'Build and manage your own thriving space colony. Explore vast alien worlds and gather resources. ' .
                    'Research advanced technologies and expand your base. Protect your colony from cosmic threats and disasters. ' .
                    'Establish trade routes with other space settlements. Lead your colony to become a galactic powerhouse.',
                'description_title' => 'Space Exploration Strategy',
                'price' => 44.99,
                'has_free_demo' => true,
                'discount' => 0,
                'tags' => ['Strategy', 'Simulation', 'Exclusive']
            ],
            [
                'name' => 'Pixel Platformer Pro',
                'description' => 'Experience classic platforming with modern gameplay twists. Navigate through beautifully crafted retro levels. ' .
                    'Collect power-ups and special abilities along the way. Face challenging boss battles and obstacles. ' .
                    'Discover hidden secrets and alternate paths. Complete speed-running challenges and time trials.',
                'description_title' => 'Retro Platform Adventure',
                'price' => 0,
                'has_free_demo' => false,
                'discount' => 0,
                'tags' => ['Platformer', 'Indie', 'Action']
            ],
            [
                'name' => 'Zombie Defense Force',
                'description' => 'Fight for survival in a zombie-infested world. Build and fortify your base against undead hordes. ' .
                    'Scavenge for supplies and craft essential items. Team up with other survivors in multiplayer mode. ' .
                    'Develop your character\'s survival skills. Uncover the mystery behind the zombie outbreak.',
                'description_title' => 'Survival Horror Shooter',
                'price' => 34.99,
                'has_free_demo' => false,
                'discount' => 25,
                'discount_end_date' => now()->addDays(20),
                'tags' => ['Shooter', 'Action', 'Multiplayer']
            ],
            [
                'name' => 'Medieval Kingdom Wars',
                'description' => 'Rule and expand your medieval empire with strategy. Engage in epic battles and siege warfare. ' .
                    'Manage your kingdom\'s economy and resources. Form alliances and wage diplomatic warfare. ' .
                    'Research medieval technologies and fortifications. Lead your armies to glorious conquest.',
                'description_title' => 'Epic Strategy Warfare',
                'price' => 49.99,
                'has_free_demo' => false,
                'discount' => 30,
                'discount_end_date' => now()->addDays(10),
                'tags' => ['Strategy', 'RPG', 'Exclusive']
            ],
            [
                'name' => 'Family Party Games',
                'description' => 'Enjoy a diverse collection of family-friendly mini-games. Compete in exciting party game challenges. ' .
                    'Play together with up to four players locally. Experience various themed game modes and settings. ' .
                    'Track high scores and unlock new mini-games. Perfect for family game nights and parties.',
                'description_title' => 'Fun for Everyone',
                'price' => 24.99,
                'has_free_demo' => true,
                'discount' => 0,
                'tags' => ['Family', 'Multiplayer', 'Puzzle']
            ],
            [
                'name' => 'Cyber Blade 2077',
                'description' => 'Immerse yourself in a dystopian cyberpunk world. Customize your character with cybernetic enhancements. ' .
                    'Engage in fast-paced combat with high-tech weapons. Explore a vast, detailed futuristic cityscape. ' .
                    'Make choices that impact the story and world. Uncover corporate conspiracies and cyber crimes.',
                'description_title' => 'Cyberpunk Action RPG',
                'price' => 59.99,
                'has_free_demo' => false,
                'discount' => 10,
                'discount_end_date' => now()->addDays(25),
                'tags' => ['RPG', 'Action', 'Exclusive']
            ],
            [
                'name' => 'Sports Championship 24',
                'description' => 'Experience multiple sports disciplines in one package. Compete in realistic sports simulations. ' .
                    'Play in various tournament modes and championships. Challenge friends in local and online multiplayer. ' .
                    'Create and customize your athlete\'s appearance. Track statistics and improve your performance.',
                'description_title' => 'Ultimate Sports Collection',
                'price' => 54.99,
                'has_free_demo' => true,
                'discount' => 0,
                'tags' => ['Sports', 'Multiplayer', 'Family']
            ],
            [
                'name' => 'Mystery Detective',
                'description' => 'Investigate complex cases as a skilled detective. Gather evidence and interrogate suspects. ' .
                    'Solve intricate puzzles to uncover clues. Make crucial decisions affecting case outcomes. ' .
                    'Experience branching storylines and multiple endings. Explore detailed crime scenes and locations.',
                'description_title' => 'Interactive Mystery Adventure',
                'price' => 29.99,
                'has_free_demo' => false,
                'discount' => 40,
                'discount_end_date' => now()->addDays(5),
                'tags' => ['Adventure', 'Puzzle', 'Indie']
            ],
            [
                'name' => 'Retro Arcade Collection',
                'description' => 'Relive the golden age of arcade gaming. Play modernized versions of classic games. ' .
                    'Experience enhanced graphics and sound effects. Compete for high scores on online leaderboards. ' .
                    'Unlock additional classic game variations. Perfect blend of nostalgia and modern gaming.',
                'description_title' => 'Nostalgic Gaming',
                'price' => 0,
                'has_free_demo' => false,
                'discount' => 0,
                'tags' => ['Action', 'Indie', 'Family']
            ],
            [
                'name' => 'Monster Hunter World',
                'description' => 'Track and hunt massive creatures in vast environments. Craft equipment from monster materials. ' .
                    'Join hunting parties with other players online. Explore diverse and dynamic ecosystems. ' .
                    'Master different weapon types and hunting styles. Face increasingly challenging monster encounters.',
                'description_title' => 'Epic Monster Hunting',
                'price' => 39.99,
                'has_free_demo' => false,
                'discount' => 35,
                'discount_end_date' => now()->addDays(15),
                'tags' => ['Action', 'RPG', 'Multiplayer']
            ]
        ];

        foreach ($products as $productData) {
            $tags = $productData['tags'];
            unset($productData['tags']);

            $product = Product::create($productData);

            $tagModels = Tag::whereIn('name', $tags)->get();
            foreach ($tagModels as $tag) {
                $product->tags()->attach($tag->id);
            }
        }
    }
}

<?php

namespace Tests\Unit;

use App\Models\User;
use Database\Factories\UserFactory;
use phpDocumentor\Reflection\Types\False_;
use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    /** @test */
    public function testLanding_page_loads_correctly(){

        $response = $this->get('/');

        $response->assertStatus(200);
        $response->assertStatus('Laravel pharmacy finder');


    }

    /** @test */
    public function testPharmacy_page_load_correctly()
    {

        $controller = new pharmacyController();
        $view = $controller->create([
                'name' => "pharmacy name",
                'owner' => "Owner name",
                'details'=> "this is pharmacy",
                'location'=> "12.12.40",
                'image'=>"path/img"]
        );

        $response = $this->get('/pharmacy');
        $this->assertStatus(200);


    }

    /** @test */
    public function testContact_page_loads_correctly(){

        $response = $this->get('/contact');

        $response->assertStatus(200);
        $response->assertStatus('Laravel pharmacy finder Contact US');


    }

    /** @test */
    public function testAbout_page_loads_correctly(){

        $response = $this->get('/about');

        $response->assertStatus(200);
        $response->assertStatus('Laravel pharmacy finder About us');


    }

    /** @test */
    public function testResult_page_loads_correctly(){

        $response = $this->get('/result');

        $response->assertStatus(200);
        $response->assertStatus('Laravel pharmacy finder Results');


    }

    /** @test */
    public function testMap_CanBeUploaded()
    {
        $this->visit('/map')
            ->type('File Name', 'name')
            ->attach('/pathToMap', 'photo')
            ->press('Upload')
            ->see('Upload Successful!');
    }




    /**the pharmacisit  can creat drug from pharmacy map */
    /** @test */
    public function testCreate_Drug_in_Pharmacy_control_page()
    {
        $data = [
            'name' => "New drug",
            'description' => "This is a drug",
            'price' => 10,
        ];

        $user = User::factory(User::class)->create($data);
        $response = $this->actingAs($user, 'api')->json('POST', '/api/drug', $data);
        $response->assertStatus(200);
        $response->assertJson(['message' => "drug Created!"]);

    }

    /** @test */
    public function testGettingAllDrugs_for_pharmacy_page()
    {

        $response = $this->json('GET', '/api/drugs');
        $response->assertStatus(200);
        $response->assertJsonStructure(
            [
                [
                    'id',
                    'name',
                    'description',
                    'price',
                    'created_at',
                    'updated_at'
                ]
            ]
        );
    }

    /** @test */
    public function testUpdateDrugs_for_pharmacy()
    {
        $response = $this->json('GET', '/api/Drugs');
        $response->assertStatus(200);
        $drug = $response->getData()[0];
        $user = factory(\App\User::class)->create();
        $update = $this->actingAs($user, 'api')->json('PATCH', '/api/drugs/' . $drug->id,['name' => "Changed for test"]);
        $update->assertStatus(200);
        $update->assertJson(['message' => "Product Updated!"]);
}

    /** @test */
    public function testDeleteDrugs_from_pharmacy()
    {
        $response = $this->json('GET', '/api/drugs');
        $response->assertStatus(200);
        $drug = $response->getData()[0];
        $user = factory(\App\User::class)->create();
        $delete = $this->actingAs($user, 'api')->json('DELETE', '/api/drugs/'.$drug->id);
        $delete->assertStatus(200);
        $delete->assertJson(['message' => "Drug Deleted!"]);
    }


    /** @test */
    public function testReturnDrug_for_result_page()
    {
        $data = [
            'name' => "New drug",
            'description' => "This is a drug",
            'price' => 10,
        ];

        $user = User::factory(User::class)->create($data);
        $response = $this->json('POST', '/api/drug', $data);
        $response->assertStatus(200);
        $response->assertJson(['status' => true]);
    }

    /** @test */
    public function testReturnPharmacy_for_result_page()
    {
        $data = [
            'name' => "Pharmacy",
            'location' => "This is a location",

        ];

        $user = User::factory(User::class)->create($data);
        $response = $this->json('POST', '/api/pharmacy', $data);
        $response->assertStatus(200);
        $response->assertJson(['status' => true]);
    }

    /** @test */
    public function testPharmacy_location_added_activated()
    {
        $controller = new locationController();
        $view = $controller->create([
            'location'=> "pharmacy location",
            'activated'=> "true"
        ]);
        $this->assertEquals("activated",true);
        $this->assertStatus(200);
        $this->assertJson(['message' => "checked location!"]);

    }


    /** @test */
    public function testCheck_user_location()
    {
        $controller = new locationController();
        $view = $controller->create([
            'location'=> "user location"
        ]);

        $this->assertStatus(200);
        $this->assertJson(['message' => "checked location!"]);

    }

    /** @test */
    public function testSort_pharmacies_location_nearest_to_far()
    {
        factory(location::class)->create([
            'name'=>'pharmacy2',
            'location'=>'road2'

    ]);

        factory(location::class)->create([
            'name'=>'pharmacy3',
            'location'=>'road3'

        ]);


        factory(location::class)->create([
            'name'=>'pharmacy1',
            'location'=>'road1'

        ]);


        $response = $this->get('/result/filter');
        $response->assertSeeinOrder(['pharmacy1','pharmacy2','pharmacy3']);

    }

    /** @test  */
   public function testPharmaciest_can_register(){
       $data = [
           'name'=>'joe',
           'last_name'=>'smith',
           'pharmacy name'=>'med life',
           'email'=>'jsmith@mail.com',
           'pharmacy_license_info'=>"lic num =555 , date=45",
           'password'=>'word',
           'password_confirmation'=>'word',

       ];

       $response = $this->post('/register', $data);
       $response->assertRedirect('/')
                -> assertSessionHas('status','account to be activated');


       $this->assertDatabaseHas('users',$data);
   }






}

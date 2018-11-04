<?php

use Illuminate\Database\Seeder;
use NguyenManh1997\LaravelVietNamDatabase\Models\Province;

class ProvincesTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
    	\DB::table('provinces')->truncate();
		Province::create( [
		'province_id'=>'01',
		'name'=>'Hà Nội',
		'type'=>'Thành Phố'
		] );

					

		Province::create( [
		'province_id'=>'02',
		'name'=>'Hà Giang',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'04',
		'name'=>'Cao Bằng',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'06',
		'name'=>'Bắc Kạn',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'08',
		'name'=>'Tuyên Quang',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'10',
		'name'=>'Lào Cai',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'11',
		'name'=>'Điện Biên',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'12',
		'name'=>'Lai Châu',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'14',
		'name'=>'Sơn La',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'15',
		'name'=>'Yên Bái',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'17',
		'name'=>'Hòa Bình',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'19',
		'name'=>'Thái Nguyên',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'20',
		'name'=>'Lạng Sơn',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'22',
		'name'=>'Quảng Ninh',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'24',
		'name'=>'Bắc Giang',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'25',
		'name'=>'Phú Thọ',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'26',
		'name'=>'Vĩnh Phúc',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'27',
		'name'=>'Bắc Ninh',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'30',
		'name'=>'Hải Dương',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'31',
		'name'=>'Hải Phòng',
		'type'=>'Thành Phố'
		] );

					

		Province::create( [
		'province_id'=>'33',
		'name'=>'Hưng Yên',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'34',
		'name'=>'Thái Bình',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'35',
		'name'=>'Hà Nam',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'36',
		'name'=>'Nam Định',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'37',
		'name'=>'Ninh Bình',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'38',
		'name'=>'Thanh Hóa',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'40',
		'name'=>'Nghệ An',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'42',
		'name'=>'Hà Tĩnh',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'44',
		'name'=>'Quảng Bình',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'45',
		'name'=>'Quảng Trị',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'46',
		'name'=>'Thừa Thiên Huế',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'48',
		'name'=>'Đà Nẵng',
		'type'=>'Thành Phố'
		] );

					

		Province::create( [
		'province_id'=>'49',
		'name'=>'Quảng Nam',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'51',
		'name'=>'Quảng Ngãi',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'52',
		'name'=>'Bình Định',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'54',
		'name'=>'Phú Yên',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'56',
		'name'=>'Khánh Hòa',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'58',
		'name'=>'Ninh Thuận',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'60',
		'name'=>'Bình Thuận',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'62',
		'name'=>'Kon Tum',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'64',
		'name'=>'Gia Lai',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'66',
		'name'=>'Đắk Lắk',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'67',
		'name'=>'Đắk Nông',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'68',
		'name'=>'Lâm Đồng',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'70',
		'name'=>'Bình Phước',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'72',
		'name'=>'Tây Ninh',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'74',
		'name'=>'Bình Dương',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'75',
		'name'=>'Đồng Nai',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'77',
		'name'=>'Bà Rịa - Vũng Tàu',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'79',
		'name'=>'Hồ Chí Minh',
		'type'=>'Thành Phố'
		] );

					

		Province::create( [
		'province_id'=>'80',
		'name'=>'Long An',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'82',
		'name'=>'Tiền Giang',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'83',
		'name'=>'Bến Tre',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'84',
		'name'=>'Trà Vinh',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'86',
		'name'=>'Vĩnh Long',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'87',
		'name'=>'Đồng Tháp',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'89',
		'name'=>'An Giang',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'91',
		'name'=>'Kiên Giang',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'92',
		'name'=>'Cần Thơ',
		'type'=>'Thành Phố'
		] );

					

		Province::create( [
		'province_id'=>'93',
		'name'=>'Hậu Giang',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'94',
		'name'=>'Sóc Trăng',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'95',
		'name'=>'Bạc Liêu',
		'type'=>'Tỉnh'
		] );

					

		Province::create( [
		'province_id'=>'96',
		'name'=>'Cà Mau',
		'type'=>'Tỉnh'
		] );

    }
}

<?php

use Illuminate\Database\Seeder;
use NguyenManh1997\VietNam\Models\Ward;

class WardsTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	\DB::table('wards')->truncate();
        Ward::create( [
		'ward_id'=>'00001',
		'name'=>'Phúc Xá',
		'type'=>'Phường',
		'location'=>'21 02 52N, 105 50 52E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00004',
		'name'=>'Trúc Bạch',
		'type'=>'Phường',
		'location'=>'21 02 50N, 105 50 21E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00006',
		'name'=>'Vĩnh Phúc',
		'type'=>'Phường',
		'location'=>'21 02 37N, 105 48 28E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00007',
		'name'=>'Cống Vị',
		'type'=>'Phường',
		'location'=>'21 02 08N, 105 48 28E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00008',
		'name'=>'Liễu Giai',
		'type'=>'Phường',
		'location'=>'21 02 21N, 105 48 56E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00010',
		'name'=>'Nguyễn Trung Trực',
		'type'=>'Phường',
		'location'=>'21 02 36N, 105 50 43E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00013',
		'name'=>'Quán Thánh',
		'type'=>'Phường',
		'location'=>'21 02 26N, 105 50 23E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00016',
		'name'=>'Ngọc Hà',
		'type'=>'Phường',
		'location'=>'21 02 24N, 105 49 23E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00019',
		'name'=>'Điện Biên',
		'type'=>'Phường',
		'location'=>'21 02 04N, 105 50 07E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00022',
		'name'=>'Đội Cấn',
		'type'=>'Phường',
		'location'=>'21 02 10N, 105 49 31E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00025',
		'name'=>'Ngọc Khánh',
		'type'=>'Phường',
		'location'=>'21 01 52N, 105 48 27E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00028',
		'name'=>'Kim Mã',
		'type'=>'Phường',
		'location'=>'21 01 53N, 105 49 20E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00031',
		'name'=>'Giảng Võ',
		'type'=>'Phường',
		'location'=>'21 01 42N, 105 48 58E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00034',
		'name'=>'Thành Công',
		'type'=>'Phường',
		'location'=>'21 01 17N, 105 48 50E',
		'district_id'=>'001'
		] );
					
		Ward::create( [
		'ward_id'=>'00037',
		'name'=>'Phúc Tân',
		'type'=>'Phường',
		'location'=>'21 02 17N, 105 51018E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00040',
		'name'=>'Đồng Xuân',
		'type'=>'Phường',
		'location'=>'21 02 22N, 105 50 54E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00043',
		'name'=>'Hàng Mã',
		'type'=>'Phường',
		'location'=>'21 02 17N, 105 50 42E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00046',
		'name'=>'Hàng Buồm',
		'type'=>'Phường',
		'location'=>'21 02 11N, 105 51 02E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00049',
		'name'=>'Hàng Đào',
		'type'=>'Phường',
		'location'=>'21 02 07N, 105 50 54E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00052',
		'name'=>'Hàng Bồ',
		'type'=>'Phường',
		'location'=>'21 02 09N, 105 50 46E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00055',
		'name'=>'Cửa Đông',
		'type'=>'Phường',
		'location'=>'21 02 00N, 105 50 37E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00058',
		'name'=>'Lý Thái Tổ',
		'type'=>'Phường',
		'location'=>'21 01 56N, 105 51 11E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00061',
		'name'=>'Hàng Bạc',
		'type'=>'Phường',
		'location'=>'21 02 01N, 105 51 03E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00064',
		'name'=>'Hàng Gai',
		'type'=>'Phường',
		'location'=>'21 01 59N, 105 50 48E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00067',
		'name'=>'Chương Dương Độ',
		'type'=>'Phường',
		'location'=>'21 01 38N, 105 51 37E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00070',
		'name'=>'Hàng Trống',
		'type'=>'Phường',
		'location'=>'21 01 47N, 105 50 55E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00073',
		'name'=>'Cửa Nam',
		'type'=>'Phường',
		'location'=>'21 01 34N, 105 50 27E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00076',
		'name'=>'Hàng Bông',
		'type'=>'Phường',
		'location'=>'21 01 46N, 105 50 37E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00079',
		'name'=>'Tràng Tiền',
		'type'=>'Phường',
		'location'=>'21 01 34N, 105 51 10E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00082',
		'name'=>'Trần Hưng Đạo',
		'type'=>'Phường',
		'location'=>'21 01 26N, 105 50 41E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00085',
		'name'=>'Phan Chu Trinh',
		'type'=>'Phường',
		'location'=>'21 01 21N, 105 51 20E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00088',
		'name'=>'Hàng Bài',
		'type'=>'Phường',
		'location'=>'21 01 20N, 105 51 00E',
		'district_id'=>'002'
		] );
					
		Ward::create( [
		'ward_id'=>'00091',
		'name'=>'Phú Thượng',
		'type'=>'Phường',
		'location'=>'21 05 08N, 105 48 24E',
		'district_id'=>'003'
		] );
					
		Ward::create( [
		'ward_id'=>'00094',
		'name'=>'Nhật Tân',
		'type'=>'Phường',
		'location'=>'21 04 42N, 105 49 22E',
		'district_id'=>'003'
		] );
					
		Ward::create( [
		'ward_id'=>'00097',
		'name'=>'Tứ Liên',
		'type'=>'Phường',
		'location'=>'21 04 07N, 105 50 09E',
		'district_id'=>'003'
		] );
					
		Ward::create( [
		'ward_id'=>'00100',
		'name'=>'Quảng An',
		'type'=>'Phường',
		'location'=>'21 03 42N, 105 49 24E',
		'district_id'=>'003'
		] );
					
		Ward::create( [
		'ward_id'=>'00103',
		'name'=>'Xuân La',
		'type'=>'Phường',
		'location'=>'21 03 41N, 105 48 12E',
		'district_id'=>'003'
		] );
					
		Ward::create( [
		'ward_id'=>'00106',
		'name'=>'Yên Phụ',
		'type'=>'Phường',
		'location'=>'21 03 17N, 105 50 17E',
		'district_id'=>'003'
		] );
					
		Ward::create( [
		'ward_id'=>'00109',
		'name'=>'Bưởi',
		'type'=>'Phường',
		'location'=>'21 03 17N, 105 48 40E',
		'district_id'=>'003'
		] );
					
		Ward::create( [
		'ward_id'=>'00112',
		'name'=>'Thuỵ Khuê',
		'type'=>'Phường',
		'location'=>'21 02 46N, 105 49 23E',
		'district_id'=>'003'
		] );
					
		Ward::create( [
		'ward_id'=>'00115',
		'name'=>'Thượng Thanh',
		'type'=>'Phường',
		'location'=>'21 04 01N, 105 52 50E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00118',
		'name'=>'Ngọc Thuỵ',
		'type'=>'Phường',
		'location'=>'21 03 48N, 105 51 24E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00121',
		'name'=>'Giang Biên',
		'type'=>'Phường',
		'location'=>'21 04 02N, 105 55 04E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00124',
		'name'=>'Đức Giang',
		'type'=>'Phường',
		'location'=>'21 03 58N, 105 53 46E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00127',
		'name'=>'Việt Hưng',
		'type'=>'Phường',
		'location'=>'21 03 17N, 105 54 05E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00130',
		'name'=>'Gia Thuỵ',
		'type'=>'Phường',
		'location'=>'21 03 06N, 105 53 16E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00133',
		'name'=>'Ngọc Lâm',
		'type'=>'Phường',
		'location'=>'21 02 52N, 105 52 26E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00136',
		'name'=>'Phúc Lợi',
		'type'=>'Phường',
		'location'=>'21 02 31N, 105 55 25E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00139',
		'name'=>'Bồ Đề',
		'type'=>'Phường',
		'location'=>'21 02 09N, 105 52 10E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00142',
		'name'=>'Sài Đồng',
		'type'=>'Phường',
		'location'=>'21 02 05N, 105 54 38E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00145',
		'name'=>'Long Biên',
		'type'=>'Phường',
		'location'=>'21 01 09N, 105 53 10E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00148',
		'name'=>'Thạch Bàn',
		'type'=>'Phường',
		'location'=>'21 01 20N, 105 55 00E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00151',
		'name'=>'Phúc Đồng',
		'type'=>'Phường',
		'location'=>'21 02 27N, 105 53 38E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00154',
		'name'=>'Cự Khối',
		'type'=>'Phường',
		'location'=>'21 00 24N, 105 53 59E',
		'district_id'=>'004'
		] );
					
		Ward::create( [
		'ward_id'=>'00157',
		'name'=>'Nghĩa Đô',
		'type'=>'Phường',
		'location'=>'21 03 00N, 105 47 58E',
		'district_id'=>'005'
		] );
					
		Ward::create( [
		'ward_id'=>'00160',
		'name'=>'Nghĩa Tân',
		'type'=>'Phường',
		'location'=>'21 02 53N, 105 47 09E',
		'district_id'=>'005'
		] );
					
		Ward::create( [
		'ward_id'=>'00163',
		'name'=>'Mai Dịch',
		'type'=>'Phường',
		'location'=>'21 02 09N, 105 46 23E',
		'district_id'=>'005'
		] );
					
		Ward::create( [
		'ward_id'=>'00166',
		'name'=>'Dịch Vọng',
		'type'=>'Phường',
		'location'=>'21 02 06N, 105 47 28E',
		'district_id'=>'005'
		] );
					
		Ward::create( [
		'ward_id'=>'00167',
		'name'=>'Dịch Vọng Hậu',
		'type'=>'Phường',
		'location'=>'21 02 10N, 105 47 00E',
		'district_id'=>'005'
		] );
					
		Ward::create( [
		'ward_id'=>'00169',
		'name'=>'Quan Hoa',
		'type'=>'Phường',
		'location'=>'21 02 10N, 105 47 56E',
		'district_id'=>'005'
		] );
					
		Ward::create( [
		'ward_id'=>'00172',
		'name'=>'Yên Hoà',
		'type'=>'Phường',
		'location'=>'21 01 24N, 105 47 28E',
		'district_id'=>'005'
		] );
					
		Ward::create( [
		'ward_id'=>'00175',
		'name'=>'Trung Hoà',
		'type'=>'Phường',
		'location'=>'21 00 37N, 105 47 56E',
		'district_id'=>'005'
		] );
					
		Ward::create( [
		'ward_id'=>'00178',
		'name'=>'Cát Linh',
		'type'=>'Phường',
		'location'=>'21 01 43N, 105 49 33E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00181',
		'name'=>'Văn Miếu',
		'type'=>'Phường',
		'location'=>'21 01 38N, 105 50 10E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00184',
		'name'=>'Quốc Tử Giám',
		'type'=>'Phường',
		'location'=>'21 01 38N, 105 49 49E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00187',
		'name'=>'Láng Thượng',
		'type'=>'Phường',
		'location'=>'21 01 24N, 105 48 10E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00190',
		'name'=>'Ô Chợ Dừa',
		'type'=>'Phường',
		'location'=>'21 01 20N, 105 49 18E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00193',
		'name'=>'Văn Chương',
		'type'=>'Phường',
		'location'=>'21 01 28N, 105 50 02E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00196',
		'name'=>'Hàng Bột',
		'type'=>'Phường',
		'location'=>'21 01 24N, 105 49 43E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00199',
		'name'=>'Láng Hạ',
		'type'=>'Phường',
		'location'=>'21 01 03N, 105 48 36E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00202',
		'name'=>'Khâm Thiên',
		'type'=>'Phường',
		'location'=>'21 01 14N, 105 50 12E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00205',
		'name'=>'Thổ Quan',
		'type'=>'Phường',
		'location'=>'21 01 08N, 105 49 53E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00208',
		'name'=>'Nam Đồng',
		'type'=>'Phường',
		'location'=>'21 00 55N, 105 49 43E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00211',
		'name'=>'Trung Phụng',
		'type'=>'Phường',
		'location'=>'21 01 02N, 105 50 11E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00214',
		'name'=>'Quang Trung',
		'type'=>'Phường',
		'location'=>'21 00 46N, 105 49 24E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00217',
		'name'=>'Trung Liệt',
		'type'=>'Phường',
		'location'=>'21 00 42N, 105 49 15E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00220',
		'name'=>'Phương Liên',
		'type'=>'Phường',
		'location'=>'21 00 45N, 105 50 07E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00223',
		'name'=>'Thịnh Quang',
		'type'=>'Phường',
		'location'=>'21 00 35N, 105 48 57E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00226',
		'name'=>'Trung Tự',
		'type'=>'Phường',
		'location'=>'21 00 26N, 105 49 50E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00229',
		'name'=>'Kim Liên',
		'type'=>'Phường',
		'location'=>'21 00 27N, 105 50 00E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00232',
		'name'=>'Phương Mai',
		'type'=>'Phường',
		'location'=>'21 00 14N, 105 50 10E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00235',
		'name'=>'Ngã Tư Sở',
		'type'=>'Phường',
		'location'=>'21 00 22N, 105 48 54E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00238',
		'name'=>'Khương Thượng',
		'type'=>'Phường',
		'location'=>'21 00 11N, 105 49 36E',
		'district_id'=>'006'
		] );
					
		Ward::create( [
		'ward_id'=>'00241',
		'name'=>'Nguyễn Du',
		'type'=>'Phường',
		'location'=>'21 01 10N, 105 50 36E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00244',
		'name'=>'Bạch Đằng',
		'type'=>'Phường',
		'location'=>'21 00 57N, 105 51 49E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00247',
		'name'=>'Phạm Đình Hổ',
		'type'=>'Phường',
		'location'=>'21 00 58N, 105 51 21E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00250',
		'name'=>'Bùi Thị Xuân',
		'type'=>'Phường',
		'location'=>'21 00 58N, 105 50 54E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00253',
		'name'=>'Ngô Thì Nhậm',
		'type'=>'Phường',
		'location'=>'21 01 01N, 105 51 05E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00256',
		'name'=>'Lê Đại Hành',
		'type'=>'Phường',
		'location'=>'21 00 48N, 105 50 40E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00259',
		'name'=>'Đồng Nhân',
		'type'=>'Phường',
		'location'=>'21 00 46N, 105 51 17E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00262',
		'name'=>'Phố Huế',
		'type'=>'Phường',
		'location'=>'21 00 44N, 105 51 06E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00265',
		'name'=>'Đống Mác',
		'type'=>'Phường',
		'location'=>'21 00 44N, 105 51 27E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00268',
		'name'=>'Thanh Lương',
		'type'=>'Phường',
		'location'=>'21 00 26N, 105 52 11E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00271',
		'name'=>'Thanh Nhàn',
		'type'=>'Phường',
		'location'=>'21 00 25N, 105 51 15E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00274',
		'name'=>'Cầu Dền',
		'type'=>'Phường',
		'location'=>'21 00 25N, 105 50 53E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00277',
		'name'=>'Bách Khoa',
		'type'=>'Phường',
		'location'=>'21 00 18N, 105 50 38E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00280',
		'name'=>'Đồng Tâm',
		'type'=>'Phường',
		'location'=>'20 59 56N, 105 50 34E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00283',
		'name'=>'Vĩnh Tuy',
		'type'=>'Phường',
		'location'=>'20 59 57N, 105 52 05E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00286',
		'name'=>'Bạch Mai',
		'type'=>'Phường',
		'location'=>'21 00 04N, 105 51 00E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00289',
		'name'=>'Quỳnh Mai',
		'type'=>'Phường',
		'location'=>'21 00 06N, 105 51 28E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00292',
		'name'=>'Quỳnh Lôi',
		'type'=>'Phường',
		'location'=>'21 00 04N, 105 51 16E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00295',
		'name'=>'Minh Khai',
		'type'=>'Phường',
		'location'=>'20 59 49N, 105 51 16E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00298',
		'name'=>'Trương Định',
		'type'=>'Phường',
		'location'=>'20 59 47N, 105 50 47E',
		'district_id'=>'007'
		] );
					
		Ward::create( [
		'ward_id'=>'00301',
		'name'=>'Thanh Trì',
		'type'=>'Phường',
		'location'=>'20 59 43N, 105 53 23E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00304',
		'name'=>'Vĩnh Hưng',
		'type'=>'Phường',
		'location'=>'20 59 18N, 105 52 25E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00307',
		'name'=>'Định Công',
		'type'=>'Phường',
		'location'=>'20 59 02N, 105 49 37E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00310',
		'name'=>'Mai Động',
		'type'=>'Phường',
		'location'=>'20 59 32N, 105 51 47E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00313',
		'name'=>'Tương Mai',
		'type'=>'Phường',
		'location'=>'20 59 18N, 105 50 51E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00316',
		'name'=>'Đại Kim',
		'type'=>'Phường',
		'location'=>'20 58 33N, 105 49 18E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00319',
		'name'=>'Tân Mai',
		'type'=>'Phường',
		'location'=>'20 59 01N, 105 50 51E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00322',
		'name'=>'Hoàng Văn Thụ',
		'type'=>'Phường',
		'location'=>'20 59 14N, 105 51 30E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00325',
		'name'=>'Giáp Bát',
		'type'=>'Phường',
		'location'=>'20 59 05N, 105 50 28E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00328',
		'name'=>'Lĩnh Nam',
		'type'=>'Phường',
		'location'=>'20 58 37N, 105 53 48E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00331',
		'name'=>'Thịnh Liệt',
		'type'=>'Phường',
		'location'=>'20 58 31N, 105 50 50E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00334',
		'name'=>'Trần Phú',
		'type'=>'Phường',
		'location'=>'20 58 10N, 105 52 55E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00337',
		'name'=>'Hoàng Liệt',
		'type'=>'Phường',
		'location'=>'20 57 47N, 105 50 07E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00340',
		'name'=>'Yên Sở',
		'type'=>'Phường',
		'location'=>'20 57 56N, 105 52 14E',
		'district_id'=>'008'
		] );
					
		Ward::create( [
		'ward_id'=>'00343',
		'name'=>'Nhân Chính',
		'type'=>'Phường',
		'location'=>'21 00 11N, 105 48 07E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00346',
		'name'=>'Thượng Đình',
		'type'=>'Phường',
		'location'=>'21 00 01N, 105 48 51E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00349',
		'name'=>'Khương Trung',
		'type'=>'Phường',
		'location'=>'20 59 54N, 105 49 10E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00352',
		'name'=>'Khương Mai',
		'type'=>'Phường',
		'location'=>'20 59 43N, 105 49 39E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00355',
		'name'=>'Thanh Xuân Trung',
		'type'=>'Phường',
		'location'=>'20 59 48N, 105 48 14E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00358',
		'name'=>'Phương Liệt',
		'type'=>'Phường',
		'location'=>'20 59 31N, 105 50 09E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00361',
		'name'=>'Hạ Đình',
		'type'=>'Phường',
		'location'=>'20 59 28N, 105 48 10E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00364',
		'name'=>'Khương Đình',
		'type'=>'Phường',
		'location'=>'20 59 21N, 105 49 05E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00367',
		'name'=>'Thanh Xuân Bắc',
		'type'=>'Phường',
		'location'=>'20 59 40N, 105 47 49E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00370',
		'name'=>'Thanh Xuân Nam',
		'type'=>'Phường',
		'location'=>'20 59 18N, 105 47 47E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00373',
		'name'=>'Kim Giang',
		'type'=>'Phường',
		'location'=>'20 59 00N, 105 48 41E',
		'district_id'=>'009'
		] );
					
		Ward::create( [
		'ward_id'=>'00376',
		'name'=>'Sóc Sơn',
		'type'=>'Thị Trấn',
		'location'=>'21 15 28N, 105 51 12E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00379',
		'name'=>'Bắc Sơn',
		'type'=>'Xã',
		'location'=>'21 21 42N, 105 49 12E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00382',
		'name'=>'Minh Trí',
		'type'=>'Xã',
		'location'=>'21 18 09N, 105 45 51E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00385',
		'name'=>'Hồng Kỳ',
		'type'=>'Xã',
		'location'=>'21 18 55N, 105 50 49E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00388',
		'name'=>'Nam Sơn',
		'type'=>'Xã',
		'location'=>'21 18 36N, 105 48 51E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00391',
		'name'=>'Trung Giã',
		'type'=>'Xã',
		'location'=>'21 18 44N, 105 52 43E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00394',
		'name'=>'Tân Hưng',
		'type'=>'Xã',
		'location'=>'21 17 55N, 105 54 14E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00397',
		'name'=>'Minh Phú',
		'type'=>'Xã',
		'location'=>'21 16 58N, 105 46 27E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00400',
		'name'=>'Phù Linh',
		'type'=>'Xã',
		'location'=>'21 16 49N, 105 50 30E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00403',
		'name'=>'Bắc Phú',
		'type'=>'Xã',
		'location'=>'21 16 46N, 105 53 59E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00406',
		'name'=>'Tân Minh',
		'type'=>'Xã',
		'location'=>'21 16 08N, 105 52 09E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00409',
		'name'=>'Quang Tiến',
		'type'=>'Xã',
		'location'=>'21 15 08N, 105 48 54E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00412',
		'name'=>'Hiền Ninh',
		'type'=>'Xã',
		'location'=>'21 15 33N, 105 47 19E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00415',
		'name'=>'Tân Dân',
		'type'=>'Xã',
		'location'=>'21 15 25N, 105 43 53E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00418',
		'name'=>'Tiên Dược',
		'type'=>'Xã',
		'location'=>'21 14 57N, 105 50 41E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00421',
		'name'=>'Việt Long',
		'type'=>'Xã',
		'location'=>'21 15 09N, 105 55 10E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00424',
		'name'=>'Xuân Giang',
		'type'=>'Xã',
		'location'=>'21 14 44N, 105 53 55E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00427',
		'name'=>'Mai Đình',
		'type'=>'Xã',
		'location'=>'21 13 33N, 105 49 45E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00430',
		'name'=>'Đức Hoà',
		'type'=>'Xã',
		'location'=>'21 13 50N, 105 52 57E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00433',
		'name'=>'Thanh Xuân',
		'type'=>'Xã',
		'location'=>'21 13 31N, 105 45 15E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00436',
		'name'=>'Đông Xuân',
		'type'=>'Xã',
		'location'=>'21 12 59N, 105 51 56E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00439',
		'name'=>'Kim Lũ',
		'type'=>'Xã',
		'location'=>'21 12 39N, 105 54 19E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00442',
		'name'=>'Phú Cường',
		'type'=>'Xã',
		'location'=>'21 12 21N, 105 47 12E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00445',
		'name'=>'Phú Minh',
		'type'=>'Xã',
		'location'=>'21 12 11N, 105 49 07E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00448',
		'name'=>'Phù Lỗ',
		'type'=>'Xã',
		'location'=>'21 12 11N, 105 51 04E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00451',
		'name'=>'Xuân Thu',
		'type'=>'Xã',
		'location'=>'21 11 51N, 105 53 23E',
		'district_id'=>'016'
		] );
					
		Ward::create( [
		'ward_id'=>'00454',
		'name'=>'Đông Anh',
		'type'=>'Thị Trấn',
		'location'=>'21 09 05N, 105 50 39E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00457',
		'name'=>'Xuân Nộn',
		'type'=>'Xã',
		'location'=>'21 10 58N, 105 52 05E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00460',
		'name'=>'Thuỵ Lâm',
		'type'=>'Xã',
		'location'=>'21 10 38N, 105 53 49E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00463',
		'name'=>'Bắc Hồng',
		'type'=>'Xã',
		'location'=>'21 10 39N, 105 48 11E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00466',
		'name'=>'Nguyên Khê',
		'type'=>'Xã',
		'location'=>'21 10 36N, 105 50 05E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00469',
		'name'=>'Nam Hồng',
		'type'=>'Xã',
		'location'=>'21 09 48N, 105 47 09E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00472',
		'name'=>'Tiên Dương',
		'type'=>'Xã',
		'location'=>'21 08 54N, 105 49 49E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00475',
		'name'=>'Vân Hà',
		'type'=>'Xã',
		'location'=>'21 09 03N, 105 54 45E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00478',
		'name'=>'Uy Nỗ',
		'type'=>'Xã',
		'location'=>'21 08 41N, 105 51 26E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00481',
		'name'=>'Vân Nội',
		'type'=>'Xã',
		'location'=>'21 08 46N, 105 48 38E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00484',
		'name'=>'Liên Hà',
		'type'=>'Xã',
		'location'=>'21 08 46N, 105 53 37E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00487',
		'name'=>'Việt Hùng',
		'type'=>'Xã',
		'location'=>'21 08 27N, 105 52 38E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00490',
		'name'=>'Kim Nỗ',
		'type'=>'Xã',
		'location'=>'21 08 14N, 105 47 43E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00493',
		'name'=>'Kim Chung',
		'type'=>'Xã',
		'location'=>'21 08 03N, 105 46 27E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00496',
		'name'=>'Dục Tú',
		'type'=>'Xã',
		'location'=>'21 06 53N, 105 53 53E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00499',
		'name'=>'Đại Mạch',
		'type'=>'Xã',
		'location'=>'21 07 08N, 105 44 53E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00502',
		'name'=>'Vĩnh Ngọc',
		'type'=>'Xã',
		'location'=>'21 06 42N, 105 49 27E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00505',
		'name'=>'Cổ Loa',
		'type'=>'Xã',
		'location'=>'21 06 49N, 105 51 45E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00508',
		'name'=>'Hải Bối',
		'type'=>'Xã',
		'location'=>'21 06 34N, 105 47 48E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00511',
		'name'=>'Xuân Canh',
		'type'=>'Xã',
		'location'=>'21 05 47N, 105 50 59E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00514',
		'name'=>'Võng La',
		'type'=>'Xã',
		'location'=>'21 06 33N, 105 46 06E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00517',
		'name'=>'Tầm Xá',
		'type'=>'Xã',
		'location'=>'21 05 57N, 105 49 59E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00520',
		'name'=>'Mai Lâm',
		'type'=>'Xã',
		'location'=>'21 05 27N, 105 53 14E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00523',
		'name'=>'Đông Hội',
		'type'=>'Xã',
		'location'=>'21 05 12N, 105 52 02E',
		'district_id'=>'017'
		] );
					
		Ward::create( [
		'ward_id'=>'00526',
		'name'=>'Yên Viên',
		'type'=>'Thị Trấn',
		'location'=>'21 05 10N, 105 54 46E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00529',
		'name'=>'Yên Thường',
		'type'=>'Xã',
		'location'=>'21 06 18N, 105 54 59E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00532',
		'name'=>'Yên Viên',
		'type'=>'Xã',
		'location'=>'21 05 24N, 105 54 32E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00535',
		'name'=>'Ninh Hiệp',
		'type'=>'Xã',
		'location'=>'21 04 47N, 105 57 02E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00538',
		'name'=>'Đình Xuyên',
		'type'=>'Xã',
		'location'=>'21 04 40N, 105 55 57E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00541',
		'name'=>'Dương Hà',
		'type'=>'Xã',
		'location'=>'21 03 53N, 105 55 51E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00544',
		'name'=>'Phù Đổng',
		'type'=>'Xã',
		'location'=>'21 03 25N, 105 57 46E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00547',
		'name'=>'Trung Mầu',
		'type'=>'Xã',
		'location'=>'21 03 40N, 105 59 10E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00550',
		'name'=>'Lệ Chi',
		'type'=>'Xã',
		'location'=>'21 02 59N, 106 00 10E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00553',
		'name'=>'Cổ Bi',
		'type'=>'Xã',
		'location'=>'21 01 59N, 105 56 17E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00556',
		'name'=>'Đặng Xá',
		'type'=>'Xã',
		'location'=>'21 01 59N, 105 57 46E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00559',
		'name'=>'Phú Thị',
		'type'=>'Xã',
		'location'=>'21 01 35N, 105 57 57E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00562',
		'name'=>'Kim Sơn',
		'type'=>'Xã',
		'location'=>'21 01 41N, 105 59 28E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00565',
		'name'=>'Trâu Quỳ',
		'type'=>'Thị Trấn',
		'location'=>'21 00 35N, 105 56 12E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00568',
		'name'=>'Dương Quang',
		'type'=>'Xã',
		'location'=>'21 00 29N, 105 59 18E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00571',
		'name'=>'Dương Xá',
		'type'=>'Xã',
		'location'=>'21 00 09N, 105 57 43E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00574',
		'name'=>'Đông Dư',
		'type'=>'Xã',
		'location'=>'20 59 46N, 105 54 45E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00577',
		'name'=>'Đa Tốn',
		'type'=>'Xã',
		'location'=>'20 59 08N, 105 56 03E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00580',
		'name'=>'Kiêu Kỵ',
		'type'=>'Xã',
		'location'=>'20 58 48N, 105 56 55E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00583',
		'name'=>'Bát Tràng',
		'type'=>'Xã',
		'location'=>'20 58 49N, 105 54 51E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00586',
		'name'=>'Kim Lan',
		'type'=>'Xã',
		'location'=>'20 57 45N, 105 54 05E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00589',
		'name'=>'Văn Đức',
		'type'=>'Xã',
		'location'=>'20 56 30N, 105 53 44E',
		'district_id'=>'018'
		] );
					
		Ward::create( [
		'ward_id'=>'00592',
		'name'=>'Cầu Diễn',
		'type'=>'Thị Trấn',
		'location'=>'21 02 26N, 105 45 45E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00595',
		'name'=>'Thượng Cát',
		'type'=>'Xã',
		'location'=>'21 05 44N, 105 44 03E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00598',
		'name'=>'Liên Mạc',
		'type'=>'Xã',
		'location'=>'21 05 18N, 105 15 42E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00601',
		'name'=>'Đông Ngạc',
		'type'=>'Xã',
		'location'=>'21 05 08N, 105 46 54E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00604',
		'name'=>'Thuỵ Phương',
		'type'=>'Xã',
		'location'=>'21 05 03N, 105 46 04E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00607',
		'name'=>'Tây Tựu',
		'type'=>'Xã',
		'location'=>'21 04 14N, 105 43 55E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00610',
		'name'=>'Xuân Đỉnh',
		'type'=>'Xã',
		'location'=>'21 04 06N, 105 47 24E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00613',
		'name'=>'Minh Khai',
		'type'=>'Xã',
		'location'=>'21 03 39N, 105 44 41E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00616',
		'name'=>'Cổ Nhuế',
		'type'=>'Xã',
		'location'=>'21 03 37N, 105 46 24E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00619',
		'name'=>'Phú Diễn',
		'type'=>'Xã',
		'location'=>'21 03 00N, 105 45 22E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00622',
		'name'=>'Xuân Phương',
		'type'=>'Xã',
		'location'=>'21 02 26N, 105 44 28E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00625',
		'name'=>'Mỹ Đình',
		'type'=>'Xã',
		'location'=>'21 01 44N, 105 46 02E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00628',
		'name'=>'Tây Mỗ',
		'type'=>'Xã',
		'location'=>'21 00 33N, 105 44 29E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00631',
		'name'=>'Mễ Trì',
		'type'=>'Xã',
		'location'=>'20 00 26N, 105 46 17E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00634',
		'name'=>'Đại Mỗ',
		'type'=>'Xã',
		'location'=>'20 59 54N, 105 45 06E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00637',
		'name'=>'Trung Văn',
		'type'=>'Xã',
		'location'=>'20 59 38N, 105 46 47E',
		'district_id'=>'019'
		] );
					
		Ward::create( [
		'ward_id'=>'00640',
		'name'=>'Văn Điển',
		'type'=>'Thị Trấn',
		'location'=>'20 56 58N, 105 50 36E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00643',
		'name'=>'Tân Triều',
		'type'=>'Xã',
		'location'=>'20 58 27N, 105 47 51E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00646',
		'name'=>'Thanh Liệt',
		'type'=>'Xã',
		'location'=>'20 57 47N, 105 48 40E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00649',
		'name'=>'Tả Thanh Oai',
		'type'=>'Xã',
		'location'=>'20 56 09N, 105 48 11E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00652',
		'name'=>'Hữu Hoà',
		'type'=>'Xã',
		'location'=>'20 56 49N, 105 47 46E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00655',
		'name'=>'Tam Hiệp',
		'type'=>'Xã',
		'location'=>'20 57 04N, 105 49 41E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00658',
		'name'=>'Tứ Hiệp',
		'type'=>'Xã',
		'location'=>'20 56 49N, 105 51 11E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00661',
		'name'=>'Yên Mỹ',
		'type'=>'Xã',
		'location'=>'20 56 35N, 105 52 25E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00664',
		'name'=>'Vĩnh Quỳnh',
		'type'=>'Xã',
		'location'=>'20 55 58N, 105 49 43E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00667',
		'name'=>'Ngũ Hiệp',
		'type'=>'Xã',
		'location'=>'20 55 43N, 105 51 30E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00670',
		'name'=>'Duyên Hà',
		'type'=>'Xã',
		'location'=>'20 55 32N, 105 52 36E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00673',
		'name'=>'Ngọc Hồi',
		'type'=>'Xã',
		'location'=>'20 55 11N, 105 50 31E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00676',
		'name'=>'Vạn Phúc',
		'type'=>'Xã',
		'location'=>'20 55 06N, 105 53 47E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00679',
		'name'=>'Đại Áng',
		'type'=>'Xã',
		'location'=>'20 54 42N, 105 49 06E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00682',
		'name'=>'Liên Ninh',
		'type'=>'Xã',
		'location'=>'20 54 35N, 105 51 07E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00685',
		'name'=>'Đông Mỹ',
		'type'=>'Xã',
		'location'=>'20 54 58N, 105 52 34E',
		'district_id'=>'020'
		] );
					
		Ward::create( [
		'ward_id'=>'00688',
		'name'=>'Quang Trung',
		'type'=>'Phường',
		'location'=>'22 50 54N, 104 59 01E',
		'district_id'=>'024'
		] );
					
		Ward::create( [
		'ward_id'=>'00691',
		'name'=>'Trần Phú',
		'type'=>'Phường',
		'location'=>'22 50 04N, 104 59 28E',
		'district_id'=>'024'
		] );
					
		Ward::create( [
		'ward_id'=>'00692',
		'name'=>'Ngọc Hà',
		'type'=>'Phường',
		'location'=>'',
		'district_id'=>'024'
		] );
					
		Ward::create( [
		'ward_id'=>'00694',
		'name'=>'Nguyễn Trãi',
		'type'=>'Phường',
		'location'=>'22 49 05N, 104 58 21E',
		'district_id'=>'024'
		] );
					
		Ward::create( [
		'ward_id'=>'00697',
		'name'=>'Minh Khai',
		'type'=>'Phường',
		'location'=>'22 50 31N, 105 02 00E',
		'district_id'=>'024'
		] );
					
		Ward::create( [
		'ward_id'=>'00700',
		'name'=>'Ngọc Đường',
		'type'=>'Xã',
		'location'=>'22 50 31N, 105 02 00E',
		'district_id'=>'024'
		] );
					
		Ward::create( [
		'ward_id'=>'00703',
		'name'=>'Kim Thạch',
		'type'=>'Xã',
		'location'=>'22 47 34N, 105 02 34E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00706',
		'name'=>'Phú Linh',
		'type'=>'Xã',
		'location'=>'22 44 14N, 105 01 00E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00709',
		'name'=>'Kim Linh',
		'type'=>'Xã',
		'location'=>'22 44 51N, 105 05 17E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00712',
		'name'=>'Phó Bảng',
		'type'=>'Thị Trấn',
		'location'=>'23 15 14N, 105 11 14E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00715',
		'name'=>'Lũng Cú',
		'type'=>'Xã',
		'location'=>'23 21 30N, 105 18 48E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00718',
		'name'=>'Má Lé',
		'type'=>'Xã',
		'location'=>'23 18 52N, 105 18 34E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00721',
		'name'=>'Đồng Văn',
		'type'=>'Thị Trấn',
		'location'=>'23 17 23N, 105 21 29E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00724',
		'name'=>'Lũng Táo',
		'type'=>'Xã',
		'location'=>'23 17 00N, 105 16 15E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00727',
		'name'=>'Phố Là',
		'type'=>'Xã',
		'location'=>'23 15 56N, 105 09 42E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00730',
		'name'=>'Thài Phìn Tủng',
		'type'=>'Xã',
		'location'=>'23 15 44N, 105 17 56E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00733',
		'name'=>'Sủng Là',
		'type'=>'Xã',
		'location'=>'23 14 42N, 105 12 48E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00736',
		'name'=>'Xà Phìn',
		'type'=>'Xã',
		'location'=>'23 15 29N, 105 14 55E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00739',
		'name'=>'Tả Phìn',
		'type'=>'Xã',
		'location'=>'23 14 15N, 105 18 53E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00742',
		'name'=>'Tả Lủng',
		'type'=>'Xã',
		'location'=>'23 14 01N, 105 21 02E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00745',
		'name'=>'Phố Cáo',
		'type'=>'Xã',
		'location'=>'23 12 51N, 105 10 11E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00748',
		'name'=>'Sính Lủng',
		'type'=>'Xã',
		'location'=>'23 12 53N, 105 16 43E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00751',
		'name'=>'Sảng Tủng',
		'type'=>'Xã',
		'location'=>'23 12 24N, 105 14 11E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00754',
		'name'=>'Lũng Thầu',
		'type'=>'Xã',
		'location'=>'23 11 18N, 105 10 05E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00757',
		'name'=>'Hố Quáng Phìn',
		'type'=>'Xã',
		'location'=>'23 10 21N, 105 16 06E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00760',
		'name'=>'Vần Chải',
		'type'=>'Xã',
		'location'=>'23 08 51N, 105 12 21E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00763',
		'name'=>'Lũng Phìn',
		'type'=>'Xã',
		'location'=>'23 07 45N, 105 16 33E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00766',
		'name'=>'Sủng Trái',
		'type'=>'Xã',
		'location'=>'23 07 25N, 105 14 56E',
		'district_id'=>'026'
		] );
					
		Ward::create( [
		'ward_id'=>'00769',
		'name'=>'Mèo Vạc',
		'type'=>'Thị Trấn',
		'location'=>'23 09 09N, 105 24 21E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00772',
		'name'=>'Thượng Phùng',
		'type'=>'Xã',
		'location'=>'23 16 44N, 105 25 49E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00775',
		'name'=>'Pải Lủng',
		'type'=>'Xã',
		'location'=>'23 14 32N, 105 23 25E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00778',
		'name'=>'Xín Cái',
		'type'=>'Xã',
		'location'=>'23 12 52N, 105 27 27E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00781',
		'name'=>'Pả Vi',
		'type'=>'Xã',
		'location'=>'23 12 20N, 105 23 55E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00784',
		'name'=>'Giàng Chu Phìn',
		'type'=>'Xã',
		'location'=>'23 11 45N, 105 27 13E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00787',
		'name'=>'Sủng Trà',
		'type'=>'Xã',
		'location'=>'23 10 18N, 105 21 09E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00790',
		'name'=>'Sủng Máng',
		'type'=>'Xã',
		'location'=>'23 09 22N, 105 20 42E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00793',
		'name'=>'Sơn Vĩ',
		'type'=>'Xã',
		'location'=>'23 09 21N, 105 32 26E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00796',
		'name'=>'Tả Lủng',
		'type'=>'Xã',
		'location'=>'23 09 14N, 105 23 10E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00799',
		'name'=>'Cán Chu Phìn',
		'type'=>'Xã',
		'location'=>'23 08 24N, 105 28 03E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00802',
		'name'=>'Lũng Pù',
		'type'=>'Xã',
		'location'=>'23 07 29N, 105 29 51E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00805',
		'name'=>'Lũng Chinh',
		'type'=>'Xã',
		'location'=>'23 08 15N, 105 19 39E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00808',
		'name'=>'Tát Ngà',
		'type'=>'Xã',
		'location'=>'23 06 06N, 105 25 08E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00811',
		'name'=>'Nậm Ban',
		'type'=>'Xã',
		'location'=>'23 04 49N, 105 21 28E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00814',
		'name'=>'Khâu Vai',
		'type'=>'Xã',
		'location'=>'23 03 54N, 105 29 03E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00815',
		'name'=>'Niêm Tòng',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00817',
		'name'=>'Niêm Sơn',
		'type'=>'Xã',
		'location'=>'23 01 52N, 105 25 34E',
		'district_id'=>'027'
		] );
					
		Ward::create( [
		'ward_id'=>'00820',
		'name'=>'Yên Minh',
		'type'=>'Thị Trấn',
		'location'=>'23 06 58N, 105 08 25E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00823',
		'name'=>'Thắng Mố',
		'type'=>'Xã',
		'location'=>'23 13 59N, 105 05 35E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00826',
		'name'=>'Phú Lũng',
		'type'=>'Xã',
		'location'=>'23 14 27N, 105 04 04E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00829',
		'name'=>'Sủng Tráng',
		'type'=>'Xã',
		'location'=>'23 12 29N, 105 06 44E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00832',
		'name'=>'Bạch Đích',
		'type'=>'Xã',
		'location'=>'23 12 22N, 105 02 44E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00835',
		'name'=>'Na Khê',
		'type'=>'Xã',
		'location'=>'23 10 13N, 105 01 55E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00838',
		'name'=>'Sủng Thài',
		'type'=>'Xã',
		'location'=>'23 10 12N, 105 08 28E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00841',
		'name'=>'Hữu Vinh',
		'type'=>'Xã',
		'location'=>'23 08 47N, 105 10 31E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00844',
		'name'=>'Lao Và Chải',
		'type'=>'Xã',
		'location'=>'23 06 44N, 105 05 17E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00847',
		'name'=>'Mậu Duệ',
		'type'=>'Xã',
		'location'=>'23 03 57N, 105 13 25E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00850',
		'name'=>'Đông Minh',
		'type'=>'Xã',
		'location'=>'23 05 25N, 105 10 07E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00853',
		'name'=>'Mậu Long',
		'type'=>'Xã',
		'location'=>'23 04 21N, 105 17 35E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00856',
		'name'=>'Ngam La',
		'type'=>'Xã',
		'location'=>'23 02 46N, 105 10 23E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00859',
		'name'=>'Ngọc Long',
		'type'=>'Xã',
		'location'=>'22 59 21N, 105 19 24E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00862',
		'name'=>'Đường Thượng',
		'type'=>'Xã',
		'location'=>'22 59 20N, 105 10 23E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00865',
		'name'=>'Lũng Hồ',
		'type'=>'Xã',
		'location'=>'22 59 01N, 105 14 21E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00868',
		'name'=>'Du Tiến',
		'type'=>'Xã',
		'location'=>'22 55 18N, 105 17 24E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00871',
		'name'=>'Du Già',
		'type'=>'Xã',
		'location'=>'22 55 28N, 105 12 01E',
		'district_id'=>'028'
		] );
					
		Ward::create( [
		'ward_id'=>'00874',
		'name'=>'Tam Sơn',
		'type'=>'Thị Trấn',
		'location'=>'23 04 16N, 104 58 13E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00877',
		'name'=>'Bát Đại Sơn',
		'type'=>'Xã',
		'location'=>'23 08 48N, 104 58 26E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00880',
		'name'=>'Nghĩa Thuận',
		'type'=>'Xã',
		'location'=>'23 08 49N, 104 54 48E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00883',
		'name'=>'Cán Tỷ',
		'type'=>'Xã',
		'location'=>'23 06 07N, 105 02 37E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00886',
		'name'=>'Cao Mã Pờ',
		'type'=>'Xã',
		'location'=>'23 06 27N, 104 50 31E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00889',
		'name'=>'Thanh Vân',
		'type'=>'Xã',
		'location'=>'23 06 05N, 104 58 07E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00892',
		'name'=>'Tùng Vài',
		'type'=>'Xã',
		'location'=>'23 04 34N, 104 53 00E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00895',
		'name'=>'Đông Hà',
		'type'=>'Xã',
		'location'=>'23 01 26N, 105 01 38E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00898',
		'name'=>'Quản Bạ',
		'type'=>'Xã',
		'location'=>'23 02 43N, 105 00 35E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00901',
		'name'=>'Lùng Tám',
		'type'=>'Xã',
		'location'=>'23 02 15N, 105 05 05E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00904',
		'name'=>'Quyết Tiến',
		'type'=>'Xã',
		'location'=>'23 00 16N, 104 58 01E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00907',
		'name'=>'Tả Ván',
		'type'=>'Xã',
		'location'=>'23 00 53N, 104 51 41E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00910',
		'name'=>'Thái An',
		'type'=>'Xã',
		'location'=>'22 58 47N, 105 05 21E',
		'district_id'=>'029'
		] );
					
		Ward::create( [
		'ward_id'=>'00913',
		'name'=>'Vị Xuyên',
		'type'=>'Thị Trấn',
		'location'=>'22 39 59N, 104 58 11E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00916',
		'name'=>'Nông Trường Việt Lâm',
		'type'=>'Thị Trấn',
		'location'=>'22 37 19N, 104 57 41E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00919',
		'name'=>'Minh Tân',
		'type'=>'Xã',
		'location'=>'22 58 08N, 104 54 26E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00922',
		'name'=>'Thuận Hoà',
		'type'=>'Xã',
		'location'=>'22 55 57N, 104 59 53E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00925',
		'name'=>'Tùng Bá',
		'type'=>'Xã',
		'location'=>'22 53 59N, 105 05 47E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00928',
		'name'=>'Thanh Thủy',
		'type'=>'Xã',
		'location'=>'22 54 12N, 104 51 27E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00931',
		'name'=>'Thanh Đức',
		'type'=>'Xã',
		'location'=>'22 53 24N, 104 08 27E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00934',
		'name'=>'Phong Quang',
		'type'=>'Xã',
		'location'=>'22 52 22N, 104 56 51E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00937',
		'name'=>'Xín Chải',
		'type'=>'Xã',
		'location'=>'22 51 48N, 104 46 31E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00940',
		'name'=>'Phương Tiến',
		'type'=>'Xã',
		'location'=>'22 50 27N, 104 52 06E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00943',
		'name'=>'Lao Chải',
		'type'=>'Xã',
		'location'=>'22 49 46N, 104 46 23E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00946',
		'name'=>'Phương Độ',
		'type'=>'Xã',
		'location'=>'22 49 17N, 104 54 48E',
		'district_id'=>'024'
		] );
					
		Ward::create( [
		'ward_id'=>'00949',
		'name'=>'Phương Thiện',
		'type'=>'Xã',
		'location'=>'22 47 08N, 104 56 40E',
		'district_id'=>'024'
		] );
					
		Ward::create( [
		'ward_id'=>'00952',
		'name'=>'Cao Bồ',
		'type'=>'Xã',
		'location'=>'22 45 05N, 104 52 49E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00955',
		'name'=>'Đạo Đức',
		'type'=>'Xã',
		'location'=>'22 44 04N, 104 58 21E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00958',
		'name'=>'Thượng Sơn',
		'type'=>'Xã',
		'location'=>'22 40 36N, 104 49 58E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00961',
		'name'=>'Linh Hồ',
		'type'=>'Xã',
		'location'=>'22 41 59N, 105 05 04E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00964',
		'name'=>'Quảng Ngần',
		'type'=>'Xã',
		'location'=>'22 39 23N, 104 52 47E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00967',
		'name'=>'Việt Lâm',
		'type'=>'Xã',
		'location'=>'22 38 46N, 104 55 40E',
		'district_id'=>'030'
		] );

		// -------------------
		
		Ward::create( [
		'ward_id'=>'00970',
		'name'=>'Ngọc Linh',
		'type'=>'Xã',
		'location'=>'22 38 58N, 105 00 46E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00973',
		'name'=>'Ngọc Minh',
		'type'=>'Xã',
		'location'=>'22 37 33N, 105 06 08E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00976',
		'name'=>'Bạch Ngọc',
		'type'=>'Xã',
		'location'=>'22 33 52N, 105 03 33E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00979',
		'name'=>'Trung Thành',
		'type'=>'Xã',
		'location'=>'22 34 09N, 104 57 56E',
		'district_id'=>'030'
		] );
					
		Ward::create( [
		'ward_id'=>'00982',
		'name'=>'Minh Sơn',
		'type'=>'Xã',
		'location'=>'22 50 56N, 105 12 24E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'00985',
		'name'=>'Giáp Trung',
		'type'=>'Xã',
		'location'=>'22 48 19N, 105 17 59E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'00988',
		'name'=>'Yên Định',
		'type'=>'Xã',
		'location'=>'22 47 46N, 105 06 36E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'00991',
		'name'=>'Yên Phú',
		'type'=>'Thị Trấn',
		'location'=>'22 45 41N, 105 20 12E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'00994',
		'name'=>'Minh Ngọc',
		'type'=>'Xã',
		'location'=>'22 44 47N, 105 10 03E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'00997',
		'name'=>'Yên Phong',
		'type'=>'Xã',
		'location'=>'22 46 32N, 105 24 32E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'01000',
		'name'=>'Lạc Nông',
		'type'=>'Xã',
		'location'=>'22 44 39N, 105 15 23E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'01003',
		'name'=>'Phú Nam',
		'type'=>'Xã',
		'location'=>'22 43 34N, 105 25 51E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'01006',
		'name'=>'Yên Cường',
		'type'=>'Xã',
		'location'=>'22 41 08N, 105 21 58E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'01009',
		'name'=>'Thượng Tân',
		'type'=>'Xã',
		'location'=>'22 41 01N, 105 14 57E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'01012',
		'name'=>'Đường Âm',
		'type'=>'Xã',
		'location'=>'22 39 26N, 105 28 04E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'01015',
		'name'=>'Đường Hồng',
		'type'=>'Xã',
		'location'=>'22 38 21N, 105 24 39E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'01018',
		'name'=>'Phiêng Luông',
		'type'=>'Xã',
		'location'=>'22 37 48N, 105 18 12E',
		'district_id'=>'031'
		] );
					
		Ward::create( [
		'ward_id'=>'01021',
		'name'=>'Vinh Quang',
		'type'=>'Thị Trấn',
		'location'=>'22 44 32N, 104 40 54E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01024',
		'name'=>'Bản Máy',
		'type'=>'Xã',
		'location'=>'22 49 25N, 104 34 04E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01027',
		'name'=>'Thàng Tín',
		'type'=>'Xã',
		'location'=>'22 49 04N, 104 38 19E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01030',
		'name'=>'Thèn Chu Phìn',
		'type'=>'Xã',
		'location'=>'22 48 07N, 104 42 45E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01033',
		'name'=>'Pố Lồ',
		'type'=>'Xã',
		'location'=>'22 47 06N, 104 41 00E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01036',
		'name'=>'Bản Phùng',
		'type'=>'Xã',
		'location'=>'22 47 20N, 104 34 24E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01039',
		'name'=>'Túng Sán',
		'type'=>'Xã',
		'location'=>'22 45 43N, 104 46 12E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01042',
		'name'=>'Chiến Phố',
		'type'=>'Xã',
		'location'=>'22 46 27N, 104 37 48E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01045',
		'name'=>'Đản Ván',
		'type'=>'Xã',
		'location'=>'22 46 23N, 104 43 34E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01048',
		'name'=>'Tụ Nhân',
		'type'=>'Xã',
		'location'=>'22 44 11N, 104 39 38E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01051',
		'name'=>'Tân Tiến',
		'type'=>'Xã',
		'location'=>'22 44 20N, 104 43 30E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01054',
		'name'=>'Nàng Đôn',
		'type'=>'Xã',
		'location'=>'22 42 33N, 104 35 49E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01057',
		'name'=>'Pờ Ly Ngài',
		'type'=>'Xã',
		'location'=>'22 42 13N, 104 37 02E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01060',
		'name'=>'Sán Xả Hồ',
		'type'=>'Xã',
		'location'=>'22 42 04N, 104 38 32E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01063',
		'name'=>'Bản Luốc',
		'type'=>'Xã',
		'location'=>'22 41 37N, 104 39 48E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01066',
		'name'=>'Ngàm Đăng Vài',
		'type'=>'Xã',
		'location'=>'22 42 39N, 104 42 41E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01069',
		'name'=>'Bản Nhùng',
		'type'=>'Xã',
		'location'=>'22 42 22N, 104 45 10E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01072',
		'name'=>'Tả Sử Choóng',
		'type'=>'Xã',
		'location'=>'22 40 33N, 104 45 48E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01075',
		'name'=>'Nậm Dịch',
		'type'=>'Xã',
		'location'=>'22 40 01N, 104 41 50E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01078',
		'name'=>'Bản Péo',
		'type'=>'Xã',
		'location'=>'22 39 24N, 104 44 14E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01081',
		'name'=>'Hồ Thầu',
		'type'=>'Xã',
		'location'=>'22 37 47N, 104 37 53E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01084',
		'name'=>'Nam Sơn',
		'type'=>'Xã',
		'location'=>'22 37 34N, 104 42 01E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01087',
		'name'=>'Nậm Tỵ',
		'type'=>'Xã',
		'location'=>'22 36 13N, 104 45 55E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01090',
		'name'=>'Thông Nguyên',
		'type'=>'Xã',
		'location'=>'22 34 37N, 104 44 53E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01093',
		'name'=>'Nậm Khòa',
		'type'=>'Xã',
		'location'=>'22 33 58N, 104 40 12E',
		'district_id'=>'032'
		] );
					
		Ward::create( [
		'ward_id'=>'01096',
		'name'=>'Cốc Pài',
		'type'=>'Thị Trấn',
		'location'=>'22 41 18N, 104 26 14E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01099',
		'name'=>'Nàn Xỉn',
		'type'=>'Xã',
		'location'=>'22 46 52N, 104 33 07E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01102',
		'name'=>'Bản Díu',
		'type'=>'Xã',
		'location'=>'22 44 46N, 104 33 53E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01105',
		'name'=>'Chí Cà',
		'type'=>'Xã',
		'location'=>'22 43 55N, 104 27 06E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01108',
		'name'=>'Xín Mần',
		'type'=>'Xã',
		'location'=>'22 45 36N, 104 29 57E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01111',
		'name'=>'Trung Thịnh',
		'type'=>'Xã',
		'location'=>'22 42 18N, 104 34 36E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01114',
		'name'=>'Thèn Phàng',
		'type'=>'Xã',
		'location'=>'22 43 13N, 104 29 58E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01117',
		'name'=>'Ngán Chiên',
		'type'=>'Xã',
		'location'=>'22 42 12N, 104 33 05E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01120',
		'name'=>'Pà Vầy Sủ',
		'type'=>'Xã',
		'location'=>'22 42 03N, 104 22 58E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01123',
		'name'=>'Cốc Rế',
		'type'=>'Xã',
		'location'=>'22 40 30N, 104 31 02E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01126',
		'name'=>'Thu Tà',
		'type'=>'Xã',
		'location'=>'22 39 50N, 104 34 08E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01129',
		'name'=>'Nàn Ma',
		'type'=>'Xã',
		'location'=>'22 39 18N, 104 25 38E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01132',
		'name'=>'Tả Nhìu',
		'type'=>'Xã',
		'location'=>'22 40 13N, 104 29 11E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01135',
		'name'=>'Bản Ngò',
		'type'=>'Xã',
		'location'=>'22 38 32N, 104 27 25E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01138',
		'name'=>'Chế Là',
		'type'=>'Xã',
		'location'=>'22 37 33N, 104 30 54E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01141',
		'name'=>'Nấm Dẩn',
		'type'=>'Xã',
		'location'=>'22 35 51N, 104 29 40E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01144',
		'name'=>'Quảng Nguyên',
		'type'=>'Xã',
		'location'=>'22 35 21N, 104 33 53E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01147',
		'name'=>'Nà Chì',
		'type'=>'Xã',
		'location'=>'22 31 34N, 104 28 21E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01150',
		'name'=>'Khuôn Lùng',
		'type'=>'Xã',
		'location'=>'22 30 09N, 104 32 11E',
		'district_id'=>'033'
		] );
					
		Ward::create( [
		'ward_id'=>'01153',
		'name'=>'Việt Quang',
		'type'=>'Thị Trấn',
		'location'=>'22 25 38N, 104 48 13E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01156',
		'name'=>'Vĩnh Tuy',
		'type'=>'Thị Trấn',
		'location'=>'22 16 03N, 104 53 45E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01159',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'22 32 44N, 104 50 09E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01162',
		'name'=>'Tân Thành',
		'type'=>'Xã',
		'location'=>'22 33 08N, 104 54 25E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01165',
		'name'=>'Đồng Tiến',
		'type'=>'Xã',
		'location'=>'22 31 17N, 105 00 42E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01168',
		'name'=>'Đồng Tâm',
		'type'=>'Xã',
		'location'=>'22 30 03N, 104 56 00E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01171',
		'name'=>'Tân Quang',
		'type'=>'Xã',
		'location'=>'22 29 53N, 104 52 14E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01174',
		'name'=>'Thượng Bình',
		'type'=>'Xã',
		'location'=>'22 28 37N, 105 01 59E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01177',
		'name'=>'Hữu Sản',
		'type'=>'Xã',
		'location'=>'22 26 23N, 105 04 10E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01180',
		'name'=>'Kim Ngọc',
		'type'=>'Xã',
		'location'=>'22 26 20N, 104 56 15E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01183',
		'name'=>'Việt Vinh',
		'type'=>'Xã',
		'location'=>'22 26 48N, 104 51 45E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01186',
		'name'=>'Bằng Hành',
		'type'=>'Xã',
		'location'=>'22 26 12N, 104 59 54E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01189',
		'name'=>'Quang Minh',
		'type'=>'Xã',
		'location'=>'22 23 48N, 104 52 10E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01192',
		'name'=>'Liên Hiệp',
		'type'=>'Xã',
		'location'=>'22 22 55N, 105 01 48E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01195',
		'name'=>'Vô Điếm',
		'type'=>'Xã',
		'location'=>'22 22 04N, 104 56 07E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01198',
		'name'=>'Việt Hồng',
		'type'=>'Xã',
		'location'=>'22 21 59N, 104 47 14E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01201',
		'name'=>'Hùng An',
		'type'=>'Xã',
		'location'=>'22 20 56N, 104 51 07E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01204',
		'name'=>'Đức Xuân',
		'type'=>'Xã',
		'location'=>'22 18 51N, 105 00 51E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01207',
		'name'=>'Tiên Kiều',
		'type'=>'Xã',
		'location'=>'22 18 49N, 104 48 59E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01210',
		'name'=>'Vĩnh Hảo',
		'type'=>'Xã',
		'location'=>'22 15 13N, 104 52 01E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01213',
		'name'=>'Vĩnh Phúc',
		'type'=>'Xã',
		'location'=>'22 15 04N, 104 47 28E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01216',
		'name'=>'Đồng Yên',
		'type'=>'Xã',
		'location'=>'22 12 25N, 104 48 14E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01219',
		'name'=>'Đông Thành',
		'type'=>'Xã',
		'location'=>'22 12 50N, 104 51 03E',
		'district_id'=>'034'
		] );
					
		Ward::create( [
		'ward_id'=>'01222',
		'name'=>'Xuân Minh',
		'type'=>'Xã',
		'location'=>'22 30 03N, 104 45 07E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01225',
		'name'=>'Tiên Nguyên',
		'type'=>'Xã',
		'location'=>'22 30 06N, 104 40 08E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01228',
		'name'=>'Tân Nam',
		'type'=>'Xã',
		'location'=>'22 29 20N, 104 35 09E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01231',
		'name'=>'Bản Rịa',
		'type'=>'Xã',
		'location'=>'22 27 01N, 104 28 58E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01234',
		'name'=>'Yên Thành',
		'type'=>'Xã',
		'location'=>'22 25 32N, 104 31 57E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01237',
		'name'=>'Yên Bình',
		'type'=>'Xã',
		'location'=>'22 24 05N, 104 36 01E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01240',
		'name'=>'Tân Trịnh',
		'type'=>'Xã',
		'location'=>'22 24 58N, 104 44 32E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01243',
		'name'=>'Tân Bắc',
		'type'=>'Xã',
		'location'=>'22 25 32N, 104 42 42E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01246',
		'name'=>'Bằng Lang',
		'type'=>'Xã',
		'location'=>'22 21 48N, 104 38 05E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01249',
		'name'=>'Yên Hà',
		'type'=>'Xã',
		'location'=>'22 20 28N, 104 42 17E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01252',
		'name'=>'Hương Sơn',
		'type'=>'Xã',
		'location'=>'22 18 55N, 104 45 28E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01255',
		'name'=>'Xuân Giang',
		'type'=>'Xã',
		'location'=>'22 18 52N, 104 38 24E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01258',
		'name'=>'Nà Khương',
		'type'=>'Xã',
		'location'=>'22 16 50N, 104 34 31E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01261',
		'name'=>'Tiên Yên',
		'type'=>'Xã',
		'location'=>'22 17 20N, 104 42 17E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01264',
		'name'=>'Vĩ Thượng',
		'type'=>'Xã',
		'location'=>'22 14 11N, 104 44 09E',
		'district_id'=>'035'
		] );
					
		Ward::create( [
		'ward_id'=>'01267',
		'name'=>'Sông Hiến',
		'type'=>'Phường',
		'location'=>'22 39 47N, 106 13 55E',
		'district_id'=>'040'
		] );
					
		Ward::create( [
		'ward_id'=>'01270',
		'name'=>'Sông Bằng',
		'type'=>'Phường',
		'location'=>'22 39 53N, 106 16 29E',
		'district_id'=>'040'
		] );
					
		Ward::create( [
		'ward_id'=>'01273',
		'name'=>'Hợp Giang',
		'type'=>'Phường',
		'location'=>'22 39 57N, 106 15 25E',
		'district_id'=>'040'
		] );
					
		Ward::create( [
		'ward_id'=>'01276',
		'name'=>'Tân Giang',
		'type'=>'Phường',
		'location'=>'22 38 39N, 106 15 55E',
		'district_id'=>'040'
		] );
					
		Ward::create( [
		'ward_id'=>'01279',
		'name'=>'Ngọc Xuân',
		'type'=>'Xã',
		'location'=>'22 41 10N, 106 14 58E',
		'district_id'=>'040'
		] );
					
		Ward::create( [
		'ward_id'=>'01282',
		'name'=>'Đề Thám',
		'type'=>'Xã',
		'location'=>'22 40 14N, 106 13 01E',
		'district_id'=>'040'
		] );
					
		Ward::create( [
		'ward_id'=>'01285',
		'name'=>'Hoà Chung',
		'type'=>'Xã',
		'location'=>'22 38 43N, 106 14 47E',
		'district_id'=>'040'
		] );
					
		Ward::create( [
		'ward_id'=>'01288',
		'name'=>'Duyệt Trung',
		'type'=>'Xã',
		'location'=>'22 37 45N, 106 17 19E',
		'district_id'=>'040'
		] );
					
		Ward::create( [
		'ward_id'=>'01290',
		'name'=>'Pác Mi Ầu',
		'type'=>'Thị Trấn',
		'location'=>'',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01291',
		'name'=>'Đức Hạnh',
		'type'=>'Xã',
		'location'=>'23 02 42N, 105 32 08E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01294',
		'name'=>'Lý Bôn',
		'type'=>'Xã',
		'location'=>'22 56 46N, 105 30 28E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01296',
		'name'=>'Nam Cao',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01297',
		'name'=>'Nam Quang',
		'type'=>'Xã',
		'location'=>'22 55 12N, 105 26 35E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01300',
		'name'=>'Vĩnh Quang',
		'type'=>'Xã',
		'location'=>'22 53 18N, 105 35 08E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01303',
		'name'=>'Quảng Lâm',
		'type'=>'Xã',
		'location'=>'22 51 44N, 105 21 46E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01304',
		'name'=>'Thạch Lâm',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01306',
		'name'=>'Tân Việt',
		'type'=>'Xã',
		'location'=>'22 51 05N, 105 26 22E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01309',
		'name'=>'Vĩnh Phong',
		'type'=>'Xã',
		'location'=>'22 50 11N, 105 34 54E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01312',
		'name'=>'Mông Ân',
		'type'=>'Xã',
		'location'=>'22 49 16N, 105 30 02E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01315',
		'name'=>'Thái Học',
		'type'=>'Xã',
		'location'=>'22 44 45N, 103 33 20E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01316',
		'name'=>'Thái Sơn',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01318',
		'name'=>'Yên Thổ',
		'type'=>'Xã',
		'location'=>'22 41 39N, 105 31 48E',
		'district_id'=>'042'
		] );
					
		Ward::create( [
		'ward_id'=>'01321',
		'name'=>'Bảo Lạc',
		'type'=>'Thị Trấn',
		'location'=>'22 56 46N, 105 40 38E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01324',
		'name'=>'Cốc Pàng',
		'type'=>'Xã',
		'location'=>'23 02 18N, 105 37 08E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01327',
		'name'=>'Thượng Hà',
		'type'=>'Xã',
		'location'=>'23 00 24N, 105 41 01E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01330',
		'name'=>'Cô Ba',
		'type'=>'Xã',
		'location'=>'22 59 52N, 105 44 19E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01333',
		'name'=>'Bảo Toàn',
		'type'=>'Xã',
		'location'=>'22 57 32N, 105 35 49E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01336',
		'name'=>'Khánh Xuân',
		'type'=>'Xã',
		'location'=>'22 57 23N, 105 47 42E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01339',
		'name'=>'Xuân Trường',
		'type'=>'Xã',
		'location'=>'22 55 29N, 105 49 07E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01342',
		'name'=>'Hồng Trị',
		'type'=>'Xã',
		'location'=>'22 53 07N, 105 40 09E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01343',
		'name'=>'Kim Cúc',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01345',
		'name'=>'Phan Thanh',
		'type'=>'Xã',
		'location'=>'22 53 28N, 105 44 46E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01348',
		'name'=>'Hồng An',
		'type'=>'Xã',
		'location'=>'22 50 14N, 105 50 01E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01351',
		'name'=>'Hưng Đạo',
		'type'=>'Xã',
		'location'=>'22 48 58N, 105 40 34E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01352',
		'name'=>'Hưng Thịnh',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01354',
		'name'=>'Huy Giáp',
		'type'=>'Xã',
		'location'=>'22 48 56N, 105 46 38E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01357',
		'name'=>'Đình Phùng',
		'type'=>'Xã',
		'location'=>'22 45 57N, 105 47 22E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01359',
		'name'=>'Sơn Lập',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01360',
		'name'=>'Sơn Lộ',
		'type'=>'Xã',
		'location'=>'22 43 52N, 105 39 11E',
		'district_id'=>'043'
		] );
					
		Ward::create( [
		'ward_id'=>'01363',
		'name'=>'Thông Nông',
		'type'=>'Thị Trấn',
		'location'=>'22 46 51N, 105 58 51E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01366',
		'name'=>'Cần Yên',
		'type'=>'Xã',
		'location'=>'22 54 48N, 105 53 42E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01367',
		'name'=>'Cần Nông',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01369',
		'name'=>'Vị Quang',
		'type'=>'Xã',
		'location'=>'22 54 52N, 105 57 00E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01372',
		'name'=>'Lương Thông',
		'type'=>'Xã',
		'location'=>'22 51 40N, 105 55 57E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01375',
		'name'=>'Đa Thông',
		'type'=>'Xã',
		'location'=>'22 48 29N, 105 58 27E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01378',
		'name'=>'Ngọc Động',
		'type'=>'Xã',
		'location'=>'22 47 51N, 105 55 41E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01381',
		'name'=>'Yên Sơn',
		'type'=>'Xã',
		'location'=>'22 46 51N, 105 53 43E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01384',
		'name'=>'Lương Can',
		'type'=>'Xã',
		'location'=>'22 45 43N, 106 00 57E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01387',
		'name'=>'Thanh Long',
		'type'=>'Xã',
		'location'=>'22 44 34N, 105 57 05E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01390',
		'name'=>'Bình Lãng',
		'type'=>'Xã',
		'location'=>'22 42 54N, 105 58 59E',
		'district_id'=>'044'
		] );
					
		Ward::create( [
		'ward_id'=>'01392',
		'name'=>'Xuân Hoà',
		'type'=>'Thị Trấn',
		'location'=>'',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01393',
		'name'=>'Lũng Nặm',
		'type'=>'Xã',
		'location'=>'22 57 41N, 106 06 11E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01396',
		'name'=>'Kéo Yên',
		'type'=>'Xã',
		'location'=>'22 56 49N, 106 04 28E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01399',
		'name'=>'Trường Hà',
		'type'=>'Xã',
		'location'=>'22 57 40N, 106 02 30E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01402',
		'name'=>'Vân An',
		'type'=>'Xã',
		'location'=>'22 58 20N, 106 08 39E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01405',
		'name'=>'Cải Viên',
		'type'=>'Xã',
		'location'=>'22 58 08N, 106 11 28E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01408',
		'name'=>'Nà Sác',
		'type'=>'Xã',
		'location'=>'22 55 53N, 106 01 24E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01411',
		'name'=>'Nội Thôn',
		'type'=>'Xã',
		'location'=>'22 56 15N, 106 10 33E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01414',
		'name'=>'Tổng Cọt',
		'type'=>'Xã',
		'location'=>'22 55 11N, 106 13 25E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01417',
		'name'=>'Sóc Hà',
		'type'=>'Xã',
		'location'=>'22 54 56N, 105 59 23E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01420',
		'name'=>'Thượng Thôn',
		'type'=>'Xã',
		'location'=>'22 53 59N, 106 08 16E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01423',
		'name'=>'Vần Dính',
		'type'=>'Xã',
		'location'=>'22 53 34N, 106 04 28E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01426',
		'name'=>'Hồng Sĩ',
		'type'=>'Xã',
		'location'=>'22 52 34N, 106 09 42E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01429',
		'name'=>'Sĩ Hai',
		'type'=>'Xã',
		'location'=>'22 52 26N, 106 11 37E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01432',
		'name'=>'Quý Quân',
		'type'=>'Xã',
		'location'=>'22 51 36N, 106 01 12E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01435',
		'name'=>'Mã Ba',
		'type'=>'Xã',
		'location'=>'22 50 54N, 106 11 24E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01438',
		'name'=>'Phù Ngọc',
		'type'=>'Xã',
		'location'=>'22 50 33N, 106 07 53E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01441',
		'name'=>'Đào Ngạn',
		'type'=>'Xã',
		'location'=>'22 50 41N, 106 05 46E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01444',
		'name'=>'Hạ Thôn',
		'type'=>'Xã',
		'location'=>'22 49 01N, 106 11 00E',
		'district_id'=>'045'
		] );
					
		Ward::create( [
		'ward_id'=>'01447',
		'name'=>'Hùng Quốc',
		'type'=>'Thị Trấn',
		'location'=>'22 50 50N, 106 19 02E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01450',
		'name'=>'Cô Mười',
		'type'=>'Xã',
		'location'=>'22 52 41N, 106 15 14E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01453',
		'name'=>'Tri Phương',
		'type'=>'Xã',
		'location'=>'22 51 42N, 106 23 35E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01456',
		'name'=>'Quang Hán',
		'type'=>'Xã',
		'location'=>'22 50 18N, 106 17 44E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01459',
		'name'=>'Quang Vinh',
		'type'=>'Xã',
		'location'=>'22 50 03N, 106 14 37E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01462',
		'name'=>'Xuân Nội',
		'type'=>'Xã',
		'location'=>'22 49 15N, 106 22 14E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01465',
		'name'=>'Quang Trung',
		'type'=>'Xã',
		'location'=>'22 49 45N, 106 24 47E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01468',
		'name'=>'Lưu Ngọc',
		'type'=>'Xã',
		'location'=>'22 47 57N, 106 15 48E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01471',
		'name'=>'Cao Chương',
		'type'=>'Xã',
		'location'=>'22 47 35N, 106 19 45E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01474',
		'name'=>'Quốc Toản',
		'type'=>'Xã',
		'location'=>'22 44 10N, 106 19 21E',
		'district_id'=>'046'
		] );
					
		Ward::create( [
		'ward_id'=>'01477',
		'name'=>'Trùng Khánh',
		'type'=>'Thị Trấn',
		'location'=>'22 49 54N, 106 31 36E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01480',
		'name'=>'Ngọc Khê',
		'type'=>'Xã',
		'location'=>'22 54 00N, 106 33 35E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01481',
		'name'=>'Ngọc Côn',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01483',
		'name'=>'Phong Nậm',
		'type'=>'Xã',
		'location'=>'22 53 56N, 106 31 08E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01486',
		'name'=>'Ngọc Chung',
		'type'=>'Xã',
		'location'=>'22 53 00N, 106 27 39E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01489',
		'name'=>'Đình Phong',
		'type'=>'Xã',
		'location'=>'22 52 15N, 106 36 25E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01492',
		'name'=>'Lăng Yên',
		'type'=>'Xã',
		'location'=>'22 51 32N, 106 26 10E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01495',
		'name'=>'Đàm Thuỷ',
		'type'=>'Xã',
		'location'=>'22 51 00N, 106 41 36E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01498',
		'name'=>'Khâm Thành',
		'type'=>'Xã',
		'location'=>'22 51 32N, 106 31 28E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01501',
		'name'=>'Chí Viễn',
		'type'=>'Xã',
		'location'=>'22 49 43N, 106 38 25E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01504',
		'name'=>'Lăng Hiếu',
		'type'=>'Xã',
		'location'=>'22 50 45N, 106 29 10E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01507',
		'name'=>'Phong Châu',
		'type'=>'Xã',
		'location'=>'22 49 05N, 106 35 48E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01510',
		'name'=>'Đình Minh',
		'type'=>'Xã',
		'location'=>'22 49 33N, 106 32 36E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01513',
		'name'=>'Cảnh Tiên',
		'type'=>'Xã',
		'location'=>'22 48 51N, 106 30 39E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01516',
		'name'=>'Trung Phúc',
		'type'=>'Xã',
		'location'=>'22 47 29N, 106 26 40E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01519',
		'name'=>'Cao Thăng',
		'type'=>'Xã',
		'location'=>'22 47 12N, 106 34 20E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01522',
		'name'=>'Đức Hồng',
		'type'=>'Xã',
		'location'=>'22 47 20N, 106 30 52E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01525',
		'name'=>'Thông Hoè',
		'type'=>'Xã',
		'location'=>'22 45 44N, 106 29 09E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01528',
		'name'=>'Thân Giáp',
		'type'=>'Xã',
		'location'=>'22 44 55N, 106 32 42E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01531',
		'name'=>'Đoài Côn',
		'type'=>'Xã',
		'location'=>'22 44 08N, 106 31 24E',
		'district_id'=>'047'
		] );
					
		Ward::create( [
		'ward_id'=>'01534',
		'name'=>'Minh Long',
		'type'=>'Xã',
		'location'=>'22 48 50N, 106 44 57E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01537',
		'name'=>'Lý Quốc',
		'type'=>'Xã',
		'location'=>'22 47 01N, 106 47 31E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01540',
		'name'=>'Thắng Lợi',
		'type'=>'Xã',
		'location'=>'22 45 32N, 106 41 50E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01543',
		'name'=>'Đồng Loan',
		'type'=>'Xã',
		'location'=>'22 45 41N, 106 44 20E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01546',
		'name'=>'Đức Quang',
		'type'=>'Xã',
		'location'=>'22 44 53N, 106 38 26E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01549',
		'name'=>'Kim Loan',
		'type'=>'Xã',
		'location'=>'22 44 35N, 106 36 04E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01552',
		'name'=>'Quang Long',
		'type'=>'Xã',
		'location'=>'22 41 53N, 106 43 44E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01555',
		'name'=>'An Lạc',
		'type'=>'Xã',
		'location'=>'22 42 01N, 106 36 22E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01558',
		'name'=>'Thanh Nhật',
		'type'=>'Thị Trấn',
		'location'=>'22 41 33N, 106 39 56E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01561',
		'name'=>'Vinh Quý',
		'type'=>'Xã',
		'location'=>'22 39 29N, 106 38 31E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01564',
		'name'=>'Việt Chu',
		'type'=>'Xã',
		'location'=>'22 39 41N, 106 42 27E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01567',
		'name'=>'Cô Ngân',
		'type'=>'Xã',
		'location'=>'22 36 57N, 106 37 14E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01570',
		'name'=>'Thái Đức',
		'type'=>'Xã',
		'location'=>'22 37 31N, 106 41 13E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01573',
		'name'=>'Thị Hoa',
		'type'=>'Xã',
		'location'=>'22 35 42N, 106 41 32E',
		'district_id'=>'048'
		] );
					
		Ward::create( [
		'ward_id'=>'01576',
		'name'=>'Quảng Uyên',
		'type'=>'Thị Trấn',
		'location'=>'22 41 33N, 106 26 35E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01579',
		'name'=>'Phi Hải',
		'type'=>'Xã',
		'location'=>'22 45 04N, 106 23 42E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01582',
		'name'=>'Quảng Hưng',
		'type'=>'Xã',
		'location'=>'22 45 10N, 106 26 37E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01585',
		'name'=>'Bình Lăng',
		'type'=>'Xã',
		'location'=>'22 43 27N, 106 29 45E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01588',
		'name'=>'Quốc Dân',
		'type'=>'Xã',
		'location'=>'22 42 47N, 106 23 10E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01591',
		'name'=>'Quốc Phong',
		'type'=>'Xã',
		'location'=>'22 42 43N, 106 25 59E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01594',
		'name'=>'Độc Lập',
		'type'=>'Xã',
		'location'=>'22 41 46N, 106 29 11E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01597',
		'name'=>'Cai Bộ',
		'type'=>'Xã',
		'location'=>'22 40 42N, 106 32 16E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01600',
		'name'=>'Đoài Khôn',
		'type'=>'Xã',
		'location'=>'22 40 29N, 106 22 15E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01603',
		'name'=>'Phúc Sen',
		'type'=>'Xã',
		'location'=>'22 41 04N, 106 24 17E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01606',
		'name'=>'Chí Thảo',
		'type'=>'Xã',
		'location'=>'22 40 08N, 106 28 09E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01609',
		'name'=>'Tự Do',
		'type'=>'Xã',
		'location'=>'22 39 23N, 106 23 57E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01612',
		'name'=>'Hồng Định',
		'type'=>'Xã',
		'location'=>'22 38 00N, 106 27 05E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01615',
		'name'=>'Hồng Quang',
		'type'=>'Xã',
		'location'=>'22 36 59N, 106 29 27E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01618',
		'name'=>'Ngọc Động',
		'type'=>'Xã',
		'location'=>'22 36 52N, 106 23 46E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01621',
		'name'=>'Hoàng Hải',
		'type'=>'Xã',
		'location'=>'22 35 28N, 106 24 31E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01624',
		'name'=>'Hạnh Phúc',
		'type'=>'Xã',
		'location'=>'22 35 44N, 106 26 58E',
		'district_id'=>'049'
		] );
					
		Ward::create( [
		'ward_id'=>'01627',
		'name'=>'Tà Lùng',
		'type'=>'Thị Trấn',
		'location'=>'22 29 16N, 106 34 02E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01630',
		'name'=>'Triệu Ẩu',
		'type'=>'Xã',
		'location'=>'22 37 58N, 106 34 23E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01633',
		'name'=>'Hồng Đại',
		'type'=>'Xã',
		'location'=>'22 37 40N, 106 31 22E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01636',
		'name'=>'Cách Linh',
		'type'=>'Xã',
		'location'=>'22 34 58N, 106 33 42E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01639',
		'name'=>'Đại Sơn',
		'type'=>'Xã',
		'location'=>'22 32 52N, 106 32 46E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01642',
		'name'=>'Lương Thiện',
		'type'=>'Xã',
		'location'=>'22 33 49N, 106 28 38E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01645',
		'name'=>'Tiên Thành',
		'type'=>'Xã',
		'location'=>'22 32 12N, 106 26 27E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01648',
		'name'=>'Hoà Thuận',
		'type'=>'Thị Trấn',
		'location'=>'22 31 40N, 106 31 20E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01651',
		'name'=>'Mỹ Hưng',
		'type'=>'Xã',
		'location'=>'22 30 03N, 106 31 24E',
		'district_id'=>'050'
		] );
					
		Ward::create( [
		'ward_id'=>'01654',
		'name'=>'Nước Hai',
		'type'=>'Thị Trấn',
		'location'=>'22 44 29N, 106 08 48E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01657',
		'name'=>'Dân Chủ',
		'type'=>'Xã',
		'location'=>'22 48 41N, 106 04 19E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01660',
		'name'=>'Nam Tuấn',
		'type'=>'Xã',
		'location'=>'22 47 16N, 106 08 42E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01663',
		'name'=>'Đức Xuân',
		'type'=>'Xã',
		'location'=>'22 47 13N, 106 14 10E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01666',
		'name'=>'Đại Tiến',
		'type'=>'Xã',
		'location'=>'22 46 21N, 106 12 00E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01669',
		'name'=>'Đức Long',
		'type'=>'Xã',
		'location'=>'22 46 03N, 106 06 49E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01672',
		'name'=>'Ngũ Lão',
		'type'=>'Xã',
		'location'=>'22 43 55N, 106 15 23E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01675',
		'name'=>'Trương Lương',
		'type'=>'Xã',
		'location'=>'22 43 35N, 106 04 08E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01678',
		'name'=>'Bình Long',
		'type'=>'Xã',
		'location'=>'22 43 27N, 106 07 30E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01681',
		'name'=>'Nguyễn Huệ',
		'type'=>'Xã',
		'location'=>'22 43 10N, 106 18 25E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01684',
		'name'=>'Công Trừng',
		'type'=>'Xã',
		'location'=>'22 42 31N, 106 01 51E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01687',
		'name'=>'Hồng Việt',
		'type'=>'Xã',
		'location'=>'22 42 50N, 106 08 48E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01690',
		'name'=>'Bế Triều',
		'type'=>'Xã',
		'location'=>'22 43 49N, 106 11 15E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01693',
		'name'=>'Vĩnh Quang',
		'type'=>'Xã',
		'location'=>'22 42 29N, 106 13 05E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01696',
		'name'=>'Hoàng Tung',
		'type'=>'Xã',
		'location'=>'22 40 48N, 106 09 16E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01699',
		'name'=>'Trương Vương',
		'type'=>'Xã',
		'location'=>'22 40 01N, 106 20 31E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01702',
		'name'=>'Quang Trung',
		'type'=>'Xã',
		'location'=>'22 40 14N, 106 18 20E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01705',
		'name'=>'Hưng Đạo',
		'type'=>'Xã',
		'location'=>'22 40 46N, 106 11 21E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01708',
		'name'=>'Bạch Đằng',
		'type'=>'Xã',
		'location'=>'22 35 59N, 106 10 59E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01711',
		'name'=>'Bình Dương',
		'type'=>'Xã',
		'location'=>'22 37 17N, 106 08 41E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01714',
		'name'=>'Lê Chung',
		'type'=>'Xã',
		'location'=>'22 36 43N, 106 15 08E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01717',
		'name'=>'Hà Trì',
		'type'=>'Xã',
		'location'=>'22 37 04N, 106 20 33E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01720',
		'name'=>'Chu Trinh',
		'type'=>'Xã',
		'location'=>'22 36 17N, 106 18 55E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01723',
		'name'=>'Hồng Nam',
		'type'=>'Xã',
		'location'=>'22 33 20N, 106 22 18E',
		'district_id'=>'051'
		] );
					
		Ward::create( [
		'ward_id'=>'01726',
		'name'=>'Nguyên Bình',
		'type'=>'Thị Trấn',
		'location'=>'22 39 34N, 105 57 53E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01729',
		'name'=>'Tĩnh Túc',
		'type'=>'Thị Trấn',
		'location'=>'22 38 52N, 105 52 44E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01732',
		'name'=>'Yên Lạc',
		'type'=>'Xã',
		'location'=>'22 45 52N, 105 51 24E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01735',
		'name'=>'Triệu Nguyên',
		'type'=>'Xã',
		'location'=>'22 43 36N, 105 54 41E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01738',
		'name'=>'Ca Thành',
		'type'=>'Xã',
		'location'=>'22 41 56N, 105 49 01E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01741',
		'name'=>'Thái Học',
		'type'=>'Xã',
		'location'=>'22 41 06N, 106 00 05E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01744',
		'name'=>'Vũ Nông',
		'type'=>'Xã',
		'location'=>'22 40 41N, 105 52 39E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01747',
		'name'=>'Minh Tâm',
		'type'=>'Xã',
		'location'=>'22 41 15N, 106 06 03E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01750',
		'name'=>'Thể Dục',
		'type'=>'Xã',
		'location'=>'22 39 59N, 105 56 10E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01753',
		'name'=>'Bắc Hợp',
		'type'=>'Xã',
		'location'=>'22 40 15N, 106 03 32E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01756',
		'name'=>'Mai Long',
		'type'=>'Xã',
		'location'=>'22 38 38N, 105 46 59E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01759',
		'name'=>'Lang Môn',
		'type'=>'Xã',
		'location'=>'22 39 11N, 106 06 35E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01762',
		'name'=>'Minh Thanh',
		'type'=>'Xã',
		'location'=>'22 38 58N, 106 01 04E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01765',
		'name'=>'Hoa Thám',
		'type'=>'Xã',
		'location'=>'22 35 39N, 106 04 35E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01768',
		'name'=>'Phan Thanh',
		'type'=>'Xã',
		'location'=>'22 35 17N, 105 48 25E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01771',
		'name'=>'Quang Thành',
		'type'=>'Xã',
		'location'=>'22 36 12N, 105 55 34E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01774',
		'name'=>'Tam Kim',
		'type'=>'Xã',
		'location'=>'22 35 42N, 106 00 46E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01777',
		'name'=>'Thành Công',
		'type'=>'Xã',
		'location'=>'22 33 16N, 105 52 04E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01780',
		'name'=>'Thịnh Vượng',
		'type'=>'Xã',
		'location'=>'22 33 10N, 106 08 03E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01783',
		'name'=>'Hưng Đạo',
		'type'=>'Xã',
		'location'=>'22 33 28N, 105 57 40E',
		'district_id'=>'052'
		] );
					
		Ward::create( [
		'ward_id'=>'01786',
		'name'=>'Đông Khê',
		'type'=>'Thị Trấn',
		'location'=>'22 25 27N, 106 26 23E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01789',
		'name'=>'Canh Tân',
		'type'=>'Xã',
		'location'=>'22 33 20N, 106 14 52E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01792',
		'name'=>'Kim Đồng',
		'type'=>'Xã',
		'location'=>'22 32 26N, 106 19 21E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01795',
		'name'=>'Minh Khai',
		'type'=>'Xã',
		'location'=>'22 30 42N, 106 10 35E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01798',
		'name'=>'Thị Ngân',
		'type'=>'Xã',
		'location'=>'22 30 15N, 106 25 07E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01801',
		'name'=>'Đức Thông',
		'type'=>'Xã',
		'location'=>'22 27 49N, 106 16 46E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01804',
		'name'=>'Thái Cường',
		'type'=>'Xã',
		'location'=>'22 29 41N, 106 20 55E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01807',
		'name'=>'Vân Trình',
		'type'=>'Xã',
		'location'=>'22 29 42N, 106 23 33E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01810',
		'name'=>'Thuỵ Hùng',
		'type'=>'Xã',
		'location'=>'22 28 54N, 106 28 56E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01813',
		'name'=>'Quang Trọng',
		'type'=>'Xã',
		'location'=>'22 26 25N, 106 09 17E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01816',
		'name'=>'Trọng Con',
		'type'=>'Xã',
		'location'=>'22 25 07N, 106 21 49E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01819',
		'name'=>'Lê Lai',
		'type'=>'Xã',
		'location'=>'22 26 34N, 106 25 18E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01822',
		'name'=>'Đức Long',
		'type'=>'Xã',
		'location'=>'22 36 38N, 106 30 54E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01825',
		'name'=>'Danh Sỹ',
		'type'=>'Xã',
		'location'=>'22 25 38N, 106 30 01E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01828',
		'name'=>'Lê Lợi',
		'type'=>'Xã',
		'location'=>'22 23 31N, 106 28 20E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01831',
		'name'=>'Đức Xuân',
		'type'=>'Xã',
		'location'=>'22 23 16N, 105 25 55E',
		'district_id'=>'053'
		] );
					
		Ward::create( [
		'ward_id'=>'01834',
		'name'=>'Nguyễn Thị Minh Khai',
		'type'=>'Phường',
		'location'=>'22 09 42N, 105 50 38E',
		'district_id'=>'058'
		] );
					
		Ward::create( [
		'ward_id'=>'01837',
		'name'=>'Sông Cầu',
		'type'=>'Phường',
		'location'=>'22 08 44N, 105 49 04E',
		'district_id'=>'058'
		] );
					
		Ward::create( [
		'ward_id'=>'01840',
		'name'=>'Đức Xuân',
		'type'=>'Phường',
		'location'=>'22 08 24N, 105 50 50E',
		'district_id'=>'058'
		] );
					
		Ward::create( [
		'ward_id'=>'01843',
		'name'=>'Phùng Chí Kiên',
		'type'=>'Phường',
		'location'=>'22 08 04N, 105 49 58E',
		'district_id'=>'058'
		] );
					
		Ward::create( [
		'ward_id'=>'01846',
		'name'=>'Huyền Tụng',
		'type'=>'Xã',
		'location'=>'22 10 20N, 105 50 08E',
		'district_id'=>'058'
		] );
					
		Ward::create( [
		'ward_id'=>'01849',
		'name'=>'Dương Quang',
		'type'=>'Xã',
		'location'=>'22 10 08N, 105 48 23E',
		'district_id'=>'058'
		] );
					
		Ward::create( [
		'ward_id'=>'01852',
		'name'=>'Nông Thượng',
		'type'=>'Xã',
		'location'=>'22 06 44N, 105 49 27E',
		'district_id'=>'058'
		] );
					
		Ward::create( [
		'ward_id'=>'01855',
		'name'=>'Xuất Hoá',
		'type'=>'Xã',
		'location'=>'22 05 44N, 105 53 04E',
		'district_id'=>'058'
		] );
					
		Ward::create( [
		'ward_id'=>'01858',
		'name'=>'Bằng Thành',
		'type'=>'Xã',
		'location'=>'22 41 00N, 105 42 43E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01861',
		'name'=>'Nhạn Môn',
		'type'=>'Xã',
		'location'=>'22 39 50N, 105 37 27E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01864',
		'name'=>'Bộc Bố',
		'type'=>'Xã',
		'location'=>'22 37 34N, 105 39 30E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01867',
		'name'=>'Công Bằng',
		'type'=>'Xã',
		'location'=>'22 36 52N, 105 34 01E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01870',
		'name'=>'Giáo Hiệu',
		'type'=>'Xã',
		'location'=>'22 37 27N, 105 36 52E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01873',
		'name'=>'Xuân La',
		'type'=>'Xã',
		'location'=>'22 35 10N, 105 42 07E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01876',
		'name'=>'An Thắng',
		'type'=>'Xã',
		'location'=>'22 32 22N, 105 46 02E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01879',
		'name'=>'Cổ Linh',
		'type'=>'Xã',
		'location'=>'22 33 45N, 105 37 28E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01882',
		'name'=>'Nghiên Loan',
		'type'=>'Xã',
		'location'=>'22 31 10N, 105 42 59E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01885',
		'name'=>'Cao Tân',
		'type'=>'Xã',
		'location'=>'22 30 58N, 105 38 10E',
		'district_id'=>'060'
		] );
					
		Ward::create( [
		'ward_id'=>'01888',
		'name'=>'Chợ Rã',
		'type'=>'Thị Trấn',
		'location'=>'22 28 22N, 105 42 58E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01891',
		'name'=>'Bành Trạch',
		'type'=>'Xã',
		'location'=>'22 27 31N, 105 45 54E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01894',
		'name'=>'Phúc Lộc',
		'type'=>'Xã',
		'location'=>'22 27 49N, 105 50 55E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01897',
		'name'=>'Hà Hiệu',
		'type'=>'Xã',
		'location'=>'22 26 32N, 105 51 29E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01900',
		'name'=>'Cao Thượng',
		'type'=>'Xã',
		'location'=>'22 28 55N, 105 37 39E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01903',
		'name'=>'Cao Trĩ',
		'type'=>'Xã',
		'location'=>'22 27 24N, 105 41 15E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01906',
		'name'=>'Khang Ninh',
		'type'=>'Xã',
		'location'=>'22 25 39N, 105 40 00E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01909',
		'name'=>'Nam Mẫu',
		'type'=>'Xã',
		'location'=>'22 25 07N, 105 36 03E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01912',
		'name'=>'Thượng Giáo',
		'type'=>'Xã',
		'location'=>'22 25 32N, 105 42 36E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01915',
		'name'=>'Địa Linh',
		'type'=>'Xã',
		'location'=>'22 24 51N, 105 45 20E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01918',
		'name'=>'Yến Dương',
		'type'=>'Xã',
		'location'=>'22 22 58N, 105 46 22E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01921',
		'name'=>'Chu Hương',
		'type'=>'Xã',
		'location'=>'22 22 00N, 105 48 45E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01924',
		'name'=>'Quảng Khê',
		'type'=>'Xã',
		'location'=>'22 21 33N, 105 41 49E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01927',
		'name'=>'Mỹ Phương',
		'type'=>'Xã',
		'location'=>'22 19 33N, 105 49 53E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01930',
		'name'=>'Hoàng Trĩ',
		'type'=>'Xã',
		'location'=>'22 19 26N, 105 39 36E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01933',
		'name'=>'Đồng Phúc',
		'type'=>'Xã',
		'location'=>'22 18 32N, 105 44 30E',
		'district_id'=>'061'
		] );
					
		Ward::create( [
		'ward_id'=>'01936',
		'name'=>'Nà Phặc',
		'type'=>'Thị Trấn',
		'location'=>'22 22 54N, 105 54 14E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01939',
		'name'=>'Thượng Ân',
		'type'=>'Xã',
		'location'=>'22 31 13N, 106 01 46E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01942',
		'name'=>'Bằng Vân',
		'type'=>'Xã',
		'location'=>'22 29 56N, 106 04 23E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01945',
		'name'=>'Cốc Đán',
		'type'=>'Xã',
		'location'=>'22 29 35N, 105 56 49E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01948',
		'name'=>'Trung Hoà',
		'type'=>'Xã',
		'location'=>'22 26 15N, 105 54 32E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01951',
		'name'=>'Đức Vân',
		'type'=>'Xã',
		'location'=>'22 27 00N, 106 03 07E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01954',
		'name'=>'Vân Tùng',
		'type'=>'Xã',
		'location'=>'22 25 56N, 105 59 27E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01957',
		'name'=>'Thượng Quan',
		'type'=>'Xã',
		'location'=>'22 22 29N, 106 04 01E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01960',
		'name'=>'Lãng Ngâm',
		'type'=>'Xã',
		'location'=>'22 19 23N, 105 54 37E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01963',
		'name'=>'Thuần Mang',
		'type'=>'Xã',
		'location'=>'22 19 58N, 106 00 14E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01966',
		'name'=>'Hương Nê',
		'type'=>'Xã',
		'location'=>'22 18 46N, 105 57 15E',
		'district_id'=>'062'
		] );
					
		Ward::create( [
		'ward_id'=>'01969',
		'name'=>'Phủ Thông',
		'type'=>'Thị Trấn',
		'location'=>'22 16 08N, 105 52 48E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01972',
		'name'=>'Phương Linh',
		'type'=>'Xã',
		'location'=>'22 17 19N, 105 53 15E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01975',
		'name'=>'Vi Hương',
		'type'=>'Xã',
		'location'=>'22 17 22N, 105 49 40E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01978',
		'name'=>'Sĩ Bình',
		'type'=>'Xã',
		'location'=>'22 15 13N, 105 55 31E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01981',
		'name'=>'Vũ Muộn',
		'type'=>'Xã',
		'location'=>'22 15 00N, 105 58 10E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01984',
		'name'=>'Đôn Phong',
		'type'=>'Xã',
		'location'=>'22 12 47N, 105 44 48E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01987',
		'name'=>'Tú Trĩ',
		'type'=>'Xã',
		'location'=>'22 15 51N, 105 50 38E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01990',
		'name'=>'Lục Bình',
		'type'=>'Xã',
		'location'=>'22 14 37N, 105 49 29E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01993',
		'name'=>'Tân Tiến',
		'type'=>'Xã',
		'location'=>'22 14 55N, 105 53 12E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01996',
		'name'=>'Quân Bình',
		'type'=>'Xã',
		'location'=>'22 14 02N, 105 52 06E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'01999',
		'name'=>'Nguyên Phúc',
		'type'=>'Xã',
		'location'=>'22 12 06N, 105 54 24E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'02002',
		'name'=>'Cao Sơn',
		'type'=>'Xã',
		'location'=>'22 11 05N, 105 59 23E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'02005',
		'name'=>'Hà Vị',
		'type'=>'Xã',
		'location'=>'22 12 51N, 105 49 48E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'02008',
		'name'=>'Cẩm Giàng',
		'type'=>'Xã',
		'location'=>'22 12 07N, 105 52 00E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'02011',
		'name'=>'Mỹ Thanh',
		'type'=>'Xã',
		'location'=>'20 08 58N, 105 55 26E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'02014',
		'name'=>'Dương Phong',
		'type'=>'Xã',
		'location'=>'22 07 18N, 105 42 04E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'02017',
		'name'=>'Quang Thuận',
		'type'=>'Xã',
		'location'=>'22 07 28N, 105 46 06E',
		'district_id'=>'063'
		] );
					
		Ward::create( [
		'ward_id'=>'02020',
		'name'=>'Bằng Lũng',
		'type'=>'Thị Trấn',
		'location'=>'22 09 42N, 105 35 35E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02023',
		'name'=>'Xuân Lạc',
		'type'=>'Xã',
		'location'=>'22 21 16N, 105 31 58E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02026',
		'name'=>'Nam Cường',
		'type'=>'Xã',
		'location'=>'22 21 29N, 105 36 44E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02029',
		'name'=>'Đồng Lạc',
		'type'=>'Xã',
		'location'=>'22 18 43N, 105 34 57E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02032',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'22 17 00N, 105 37 27E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02035',
		'name'=>'Bản Thi',
		'type'=>'Xã',
		'location'=>'22 15 05N, 105 30 15E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02038',
		'name'=>'Quảng Bạch',
		'type'=>'Xã',
		'location'=>'22 15 29N, 105 35 01E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02041',
		'name'=>'Bằng Phúc',
		'type'=>'Xã',
		'location'=>'22 15 37N, 105 40 56E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02044',
		'name'=>'Yên Thịnh',
		'type'=>'Xã',
		'location'=>'22 12 57N, 105 28 17E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02047',
		'name'=>'Yên Thượng',
		'type'=>'Xã',
		'location'=>'22 10 18N, 105 30 57E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02050',
		'name'=>'Phương Viên',
		'type'=>'Xã',
		'location'=>'22 12 09N, 105 38 23E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02053',
		'name'=>'Ngọc Phái',
		'type'=>'Xã',
		'location'=>'22 12 10N, 105 34 44E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02056',
		'name'=>'Rã Bản',
		'type'=>'Xã',
		'location'=>'22 11 16N, 105 40 12E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02059',
		'name'=>'Đông Viên',
		'type'=>'Xã',
		'location'=>'22 08 34N, 105 39 50E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02062',
		'name'=>'Lương Bằng',
		'type'=>'Xã',
		'location'=>'22 05 51N, 105 30 03E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02065',
		'name'=>'Bằng Lãng',
		'type'=>'Xã',
		'location'=>'22 07 19N, 105 34 15E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02068',
		'name'=>'Đại Sảo',
		'type'=>'Xã',
		'location'=>'22 07 01N, 105 37 52E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02071',
		'name'=>'Nghĩa Tá',
		'type'=>'Xã',
		'location'=>'22 03 19N, 105 31 45E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02074',
		'name'=>'Phong Huân',
		'type'=>'Xã',
		'location'=>'22 04 34N, 105 35 17E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02077',
		'name'=>'Yên Mỹ',
		'type'=>'Xã',
		'location'=>'22 03 28N, 105 39 30E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02080',
		'name'=>'Bình Trung',
		'type'=>'Xã',
		'location'=>'22 00 47N, 105 32 59E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02083',
		'name'=>'Yên Nhuận',
		'type'=>'Xã',
		'location'=>'22 02 25N, 105 36 48E',
		'district_id'=>'064'
		] );
					
		Ward::create( [
		'ward_id'=>'02086',
		'name'=>'Chợ Mới',
		'type'=>'Thị Trấn',
		'location'=>'21 52 46N, 105 46 41E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02089',
		'name'=>'Tân Sơn',
		'type'=>'Xã',
		'location'=>'22 04 24N, 105 56 49E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02092',
		'name'=>'Thanh Vận',
		'type'=>'Xã',
		'location'=>'22 03 55N, 105 47 49E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02095',
		'name'=>'Mai Lạp',
		'type'=>'Xã',
		'location'=>'22 03 41N, 105 43 32E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02098',
		'name'=>'Hoà Mục',
		'type'=>'Xã',
		'location'=>'22 03 38N, 105 50 13E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02101',
		'name'=>'Thanh Mai',
		'type'=>'Xã',
		'location'=>'22 02 59N, 105 46 09E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02104',
		'name'=>'Cao Kỳ',
		'type'=>'Xã',
		'location'=>'22 00 50N, 105 52 24E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02107',
		'name'=>'Nông Hạ',
		'type'=>'Xã',
		'location'=>'21 58 32N, 105 49 35E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02110',
		'name'=>'Yên Cư',
		'type'=>'Xã',
		'location'=>'21 58 14N, 105 57 30E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02113',
		'name'=>'Nông Thịnh',
		'type'=>'Xã',
		'location'=>'21 58 02N, 105 48 11E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02116',
		'name'=>'Yên Hân',
		'type'=>'Xã',
		'location'=>'21 56 12N, 105 55 40E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02119',
		'name'=>'Thanh Bình',
		'type'=>'Xã',
		'location'=>'21 55 43N, 105 48 40E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02122',
		'name'=>'Như Cố',
		'type'=>'Xã',
		'location'=>'21 54 27N, 105 51 18E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02125',
		'name'=>'Bình Văn',
		'type'=>'Xã',
		'location'=>'21 55 08N, 105 54 14E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02128',
		'name'=>'Yên Đĩnh',
		'type'=>'Xã',
		'location'=>'21 53 35N, 105 47 14E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02131',
		'name'=>'Quảng Chu',
		'type'=>'Xã',
		'location'=>'21 50 37N, 105 47 05E',
		'district_id'=>'065'
		] );
					
		Ward::create( [
		'ward_id'=>'02134',
		'name'=>'Yến Lạc',
		'type'=>'Thị Trấn',
		'location'=>'22 13 41N, 106 10 50E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02137',
		'name'=>'Vũ Loan',
		'type'=>'Xã',
		'location'=>'22 20 03N, 106 09 55E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02140',
		'name'=>'Lạng San',
		'type'=>'Xã',
		'location'=>'22 16 30N, 106 06 42E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02143',
		'name'=>'Lương Thượng',
		'type'=>'Xã',
		'location'=>'22 16 42N, 106 04 26E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02146',
		'name'=>'Kim Hỷ',
		'type'=>'Xã',
		'location'=>'22 14 41N, 106 01 09E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02149',
		'name'=>'Văn Học',
		'type'=>'Xã',
		'location'=>'22 16 55N, 106 09 01E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02152',
		'name'=>'Cường Lợi',
		'type'=>'Xã',
		'location'=>'22 16 21N, 106 12 42E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02155',
		'name'=>'Lương Hạ',
		'type'=>'Xã',
		'location'=>'22 15 22N, 106 10 20E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02158',
		'name'=>'Kim Lư',
		'type'=>'Xã',
		'location'=>'22 12 12N, 106 12 18E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02161',
		'name'=>'Lương Thành',
		'type'=>'Xã',
		'location'=>'22 13 26N, 106 07 10E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02164',
		'name'=>'Ân Tình',
		'type'=>'Xã',
		'location'=>'22 12 13N, 106 04 56E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02167',
		'name'=>'Lam Sơn',
		'type'=>'Xã',
		'location'=>'22 12 04N, 106 09 57E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02170',
		'name'=>'Văn Minh',
		'type'=>'Xã',
		'location'=>'22 10 42N, 106 06 06E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02173',
		'name'=>'Côn Minh',
		'type'=>'Xã',
		'location'=>'22 08 24N, 106 00 11E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02176',
		'name'=>'Cư Lễ',
		'type'=>'Xã',
		'location'=>'22 07 59N, 106 09 13E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02179',
		'name'=>'Hữu Thác',
		'type'=>'Xã',
		'location'=>'22 08 12N, 106 05 04E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02182',
		'name'=>'Hảo Nghĩa',
		'type'=>'Xã',
		'location'=>'22 05 55N, 106 05 17E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02185',
		'name'=>'Quang Phong',
		'type'=>'Xã',
		'location'=>'22 05 30N, 106 00 51E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02188',
		'name'=>'Dương Sơn',
		'type'=>'Xã',
		'location'=>'22 03 51N, 106 03 28E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02191',
		'name'=>'Xuân Dương',
		'type'=>'Xã',
		'location'=>'22 01 11N, 106 04 31E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02194',
		'name'=>'Đổng Xá',
		'type'=>'Xã',
		'location'=>'22 00 18N, 105 59 12E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02197',
		'name'=>'Liêm Thuỷ',
		'type'=>'Xã',
		'location'=>'21 57 19N, 106 04 05E',
		'district_id'=>'066'
		] );
					
		Ward::create( [
		'ward_id'=>'02200',
		'name'=>'Phan Thiết',
		'type'=>'Phường',
		'location'=>'21 49 17N, 105 12 07E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02203',
		'name'=>'Minh Xuân',
		'type'=>'Phường',
		'location'=>'21 49 35N, 105 12 50E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02206',
		'name'=>'Tân Quang',
		'type'=>'Phường',
		'location'=>'21 48 55N, 105 12 39E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02209',
		'name'=>'Tràng Đà',
		'type'=>'Xã',
		'location'=>'21 50 52N, 105 12 49E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02212',
		'name'=>'Nông Tiến',
		'type'=>'Phường',
		'location'=>'21 49 46N, 105 14 31E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02215',
		'name'=>'Ỷ La',
		'type'=>'Phường',
		'location'=>'21 49 45N, 105 11 31E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02216',
		'name'=>'Tân Hà',
		'type'=>'Phường',
		'location'=>'',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02218',
		'name'=>'Hưng Thành',
		'type'=>'Phường',
		'location'=>'21 48 08N, 105 12 22E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02221',
		'name'=>'Nà Hang',
		'type'=>'Thị Trấn',
		'location'=>'22 20 56N, 105 22 57E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02227',
		'name'=>'Sinh Long',
		'type'=>'Xã',
		'location'=>'22 34 29N, 105 22 22E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02230',
		'name'=>'Thượng Giáp',
		'type'=>'Xã',
		'location'=>'22 36 36N, 105 29 50E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02233',
		'name'=>'Phúc Yên',
		'type'=>'Xã',
		'location'=>'22 33 32N, 105 11 26E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02239',
		'name'=>'Thượng Nông',
		'type'=>'Xã',
		'location'=>'22 34 26N, 105 29 14E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02242',
		'name'=>'Xuân Lập',
		'type'=>'Xã',
		'location'=>'22 31 44N, 105 09 02E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02245',
		'name'=>'Côn Lôn',
		'type'=>'Xã',
		'location'=>'22 32 03N, 105 26 23E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02248',
		'name'=>'Yên Hoa',
		'type'=>'Xã',
		'location'=>'22 31 46N, 105 30 26E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02251',
		'name'=>'Khuôn Hà',
		'type'=>'Xã',
		'location'=>'22 30 58N, 105 15 33E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02254',
		'name'=>'Hồng Thái',
		'type'=>'Xã',
		'location'=>'22 32 03N, 105 33 40E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02260',
		'name'=>'Đà Vị',
		'type'=>'Xã',
		'location'=>'22 28 18N, 105 32 31E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02263',
		'name'=>'Khau Tinh',
		'type'=>'Xã',
		'location'=>'22 27 08N, 105 26 53E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02266',
		'name'=>'Lăng Can',
		'type'=>'Xã',
		'location'=>'22 27 10N, 105 13 18E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02269',
		'name'=>'Thượng Lâm',
		'type'=>'Xã',
		'location'=>'22 27 38N, 105 19 43E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02275',
		'name'=>'Sơn Phú',
		'type'=>'Xã',
		'location'=>'22 23 00N, 105 28 17E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02281',
		'name'=>'Năng Khả',
		'type'=>'Xã',
		'location'=>'22 21 10N, 105 19 49E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02284',
		'name'=>'Thanh Tương',
		'type'=>'Xã',
		'location'=>'22 17 53N, 105 21 59E',
		'district_id'=>'072'
		] );
					
		Ward::create( [
		'ward_id'=>'02287',
		'name'=>'Vĩnh Lộc',
		'type'=>'Thị Trấn',
		'location'=>'22 09 09N, 105 16 01E',
		'district_id'=>'073'
		] );

		// -------------------------
		Ward::create( [
		'ward_id'=>'02290',
		'name'=>'Bình An',
		'type'=>'Xã',
		'location'=>'22 26 31N, 105 09 27E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02293',
		'name'=>'Hồng Quang',
		'type'=>'Xã',
		'location'=>'22 23 24N, 105 06 26E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02296',
		'name'=>'Thổ Bình',
		'type'=>'Xã',
		'location'=>'22 22 55N, 105 11 40E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02299',
		'name'=>'Phúc Sơn',
		'type'=>'Xã',
		'location'=>'22 19 37N, 105 14 31E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02302',
		'name'=>'Minh Quang',
		'type'=>'Xã',
		'location'=>'22 20 47N, 105 09 41E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02305',
		'name'=>'Trung Hà',
		'type'=>'Xã',
		'location'=>'22 17 23N, 105 03 42E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02308',
		'name'=>'Tân Mỹ',
		'type'=>'Xã',
		'location'=>'22 16 41N, 105 10 50E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02311',
		'name'=>'Hà Lang',
		'type'=>'Xã',
		'location'=>'22 14 12N, 105 07 20E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02314',
		'name'=>'Hùng Mỹ',
		'type'=>'Xã',
		'location'=>'22 14 14N, 105 17 14E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02317',
		'name'=>'Yên Lập',
		'type'=>'Xã',
		'location'=>'22 13 25N, 105 22 59E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02320',
		'name'=>'Tân An',
		'type'=>'Xã',
		'location'=>'22 11 50N, 105 11 18E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02323',
		'name'=>'Bình Phú',
		'type'=>'Xã',
		'location'=>'22 11 00N, 105 25 41E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02326',
		'name'=>'Xuân Quang',
		'type'=>'Xã',
		'location'=>'22 11 03N, 105 16 37E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02329',
		'name'=>'Ngọc Hội',
		'type'=>'Xã',
		'location'=>'22 09 57N, 105 18 30E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02332',
		'name'=>'Phú Bình',
		'type'=>'Xã',
		'location'=>'22 09 16N, 105 21 39E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02335',
		'name'=>'Hòa Phú',
		'type'=>'Xã',
		'location'=>'22 07 57N, 105 10 04E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02338',
		'name'=>'Phúc Thịnh',
		'type'=>'Xã',
		'location'=>'22 09 21N, 105 13 38E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02341',
		'name'=>'Kiên Đài',
		'type'=>'Xã',
		'location'=>'22 06 51N, 105 26 20E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02344',
		'name'=>'Tân Thịnh',
		'type'=>'Xã',
		'location'=>'22 08 18N, 105 12 53E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02347',
		'name'=>'Trung Hòa',
		'type'=>'Xã',
		'location'=>'22 06 36N, 105 15 28E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02350',
		'name'=>'Kim Bình',
		'type'=>'Xã',
		'location'=>'22 05 21N, 105 19 59E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02353',
		'name'=>'Hòa An',
		'type'=>'Xã',
		'location'=>'22 05 36N, 105 14 46E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02356',
		'name'=>'Vinh Quang',
		'type'=>'Xã',
		'location'=>'22 05 40N, 105 17 39E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02359',
		'name'=>'Tri Phú',
		'type'=>'Xã',
		'location'=>'22 01 27N, 105 22 18E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02362',
		'name'=>'Nhân Lý',
		'type'=>'Xã',
		'location'=>'22 03 35N, 105 14 43E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02365',
		'name'=>'Yên Nguyên',
		'type'=>'Xã',
		'location'=>'22 03 19N, 105 10 22E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02368',
		'name'=>'Linh Phú',
		'type'=>'Xã',
		'location'=>'22 00 40N, 105 26 09E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02371',
		'name'=>'Bình Nhân',
		'type'=>'Xã',
		'location'=>'22 02 32N, 105 17 14E',
		'district_id'=>'073'
		] );
					
		Ward::create( [
		'ward_id'=>'02374',
		'name'=>'Tân Yên',
		'type'=>'Thị Trấn',
		'location'=>'22 02 28N, 104 57 50E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02377',
		'name'=>'Yên Thuận',
		'type'=>'Xã',
		'location'=>'22 17 47N, 104 56 57E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02380',
		'name'=>'Bạch Xa',
		'type'=>'Xã',
		'location'=>'22 14 58N, 104 55 21E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02383',
		'name'=>'Minh Khương',
		'type'=>'Xã',
		'location'=>'22 12 58N, 104 57 29E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02386',
		'name'=>'Yên Lâm',
		'type'=>'Xã',
		'location'=>'22 09 02N, 104 54 09E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02389',
		'name'=>'Minh Dân',
		'type'=>'Xã',
		'location'=>'22 11 26N, 104 59 19E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02392',
		'name'=>'Phù Lưu',
		'type'=>'Xã',
		'location'=>'22 10 51N, 105 03 05E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02395',
		'name'=>'Minh Hương',
		'type'=>'Xã',
		'location'=>'22 07 49N, 105 06 23E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02398',
		'name'=>'Yên Phú',
		'type'=>'Xã',
		'location'=>'22 06 28N, 104 58 34E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02401',
		'name'=>'Tân Thành',
		'type'=>'Xã',
		'location'=>'22 05 54N, 105 03 24E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02404',
		'name'=>'Bình Xa',
		'type'=>'Xã',
		'location'=>'22 03 26N, 105 07 27E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02407',
		'name'=>'Thái Sơn',
		'type'=>'Xã',
		'location'=>'22 01 26N, 105 05 42E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02410',
		'name'=>'Nhân Mục',
		'type'=>'Xã',
		'location'=>'22 01 21N, 105 00 42E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02413',
		'name'=>'Thành Long',
		'type'=>'Xã',
		'location'=>'21 58 41N, 105 02 58E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02416',
		'name'=>'Bằng Cốc',
		'type'=>'Xã',
		'location'=>'21 58 34N, 105 00 38E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02419',
		'name'=>'Thái Hòa',
		'type'=>'Xã',
		'location'=>'21 58 35N, 105 06 41E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02422',
		'name'=>'Đức Ninh',
		'type'=>'Xã',
		'location'=>'21 56 34N, 105 07 22E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02425',
		'name'=>'Hùng Đức',
		'type'=>'Xã',
		'location'=>'21 53 31N, 105 03 55E',
		'district_id'=>'074'
		] );
					
		Ward::create( [
		'ward_id'=>'02428',
		'name'=>'Tân Bình',
		'type'=>'Thị Trấn',
		'location'=>'21 41 55N, 105 14 00E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02431',
		'name'=>'Quí Quân',
		'type'=>'Xã',
		'location'=>'22 01 26N, 105 13 58E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02434',
		'name'=>'Lực Hành',
		'type'=>'Xã',
		'location'=>'22 01 04N, 105 11 33E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02437',
		'name'=>'Kiến Thiết',
		'type'=>'Xã',
		'location'=>'21 58 22N, 105 19 23E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02440',
		'name'=>'Trung Minh',
		'type'=>'Xã',
		'location'=>'21 58 04N, 105 30 27E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02443',
		'name'=>'Chiêu Yên',
		'type'=>'Xã',
		'location'=>'21 59 09N, 105 09 40E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02446',
		'name'=>'Trung Trực',
		'type'=>'Xã',
		'location'=>'21 57 22N, 105 16 50E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02449',
		'name'=>'Xuân Vân',
		'type'=>'Xã',
		'location'=>'21 57 11N, 105 13 53E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02452',
		'name'=>'Phúc Ninh',
		'type'=>'Xã',
		'location'=>'21 56 24N, 105 11 05E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02455',
		'name'=>'Hùng Lợi',
		'type'=>'Xã',
		'location'=>'21 54 10N, 105 28 47E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02458',
		'name'=>'Trung Sơn',
		'type'=>'Xã',
		'location'=>'21 54 20N, 105 24 47E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02461',
		'name'=>'Tân Tiến',
		'type'=>'Xã',
		'location'=>'21 53 37N, 105 17 24E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02464',
		'name'=>'Tứ Quận',
		'type'=>'Xã',
		'location'=>'21 53 50N, 105 07 51E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02467',
		'name'=>'Đạo Viện',
		'type'=>'Xã',
		'location'=>'21 52 51N, 105 20 59E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02470',
		'name'=>'Tân Long',
		'type'=>'Xã',
		'location'=>'21 53 02N, 105 13 12E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02473',
		'name'=>'Thắng Quân',
		'type'=>'Xã',
		'location'=>'21 52 38N, 105 09 53E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02476',
		'name'=>'Kim Quan',
		'type'=>'Xã',
		'location'=>'21 51 29N, 105 26 05E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02479',
		'name'=>'Lang Quán',
		'type'=>'Xã',
		'location'=>'20 50 49N, 105 06 31E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02482',
		'name'=>'Phú Thịnh',
		'type'=>'Xã',
		'location'=>'21 50 17N, 105 17 39E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02485',
		'name'=>'Công Đa',
		'type'=>'Xã',
		'location'=>'21 49 38N, 105 21 45E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02488',
		'name'=>'Trung Môn',
		'type'=>'Xã',
		'location'=>'21 49 49N, 105 10 04E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02491',
		'name'=>'Chân Sơn',
		'type'=>'Xã',
		'location'=>'21 49 01N, 105 07 44E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02494',
		'name'=>'Thái Bình',
		'type'=>'Xã',
		'location'=>'21 48 41N, 105 15 03E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02497',
		'name'=>'Kim Phú',
		'type'=>'Xã',
		'location'=>'21 46 58N, 105 10 10E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02500',
		'name'=>'Tiến Bộ',
		'type'=>'Xã',
		'location'=>'21 46 23N, 105 20 02E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02503',
		'name'=>'An Khang',
		'type'=>'Xã',
		'location'=>'21 46 51N, 105 15 31E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02506',
		'name'=>'Mỹ Bằng',
		'type'=>'Xã',
		'location'=>'21 45 55N, 105 05 18E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02509',
		'name'=>'Phú Lâm',
		'type'=>'Xã',
		'location'=>'21 45 49N, 105 07 47E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02512',
		'name'=>'An Tường',
		'type'=>'Xã',
		'location'=>'21 46 39N, 105 12 37E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02515',
		'name'=>'Lưỡng Vượng',
		'type'=>'Xã',
		'location'=>'21 46 29N, 105 13 29E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02518',
		'name'=>'Hoàng Khai',
		'type'=>'Xã',
		'location'=>'21 45 30N, 105 11 21E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02521',
		'name'=>'Thái Long',
		'type'=>'Xã',
		'location'=>'21 44 26N, 105 13 20E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02524',
		'name'=>'Đội Cấn',
		'type'=>'Xã',
		'location'=>'21 43 25N, 105 13 19E',
		'district_id'=>'070'
		] );
					
		Ward::create( [
		'ward_id'=>'02527',
		'name'=>'Nhữ Hán',
		'type'=>'Xã',
		'location'=>'21 43 17N, 105 07 05E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02530',
		'name'=>'Nhữ Khê',
		'type'=>'Xã',
		'location'=>'21 42 05N, 105 10 46E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02533',
		'name'=>'Đội Bình',
		'type'=>'Xã',
		'location'=>'21 40 54N, 105 12 38E',
		'district_id'=>'075'
		] );
					
		Ward::create( [
		'ward_id'=>'02536',
		'name'=>'Sơn Dương',
		'type'=>'Thị Trấn',
		'location'=>'21 41 33N, 105 23 59E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02539',
		'name'=>'Trung Yên',
		'type'=>'Xã',
		'location'=>'21 49 02N, 105 27 12E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02542',
		'name'=>'Minh Thanh',
		'type'=>'Xã',
		'location'=>'21 46 46N, 105 24 03E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02545',
		'name'=>'Tân Trào',
		'type'=>'Xã',
		'location'=>'21 46 38N, 105 28 05E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02548',
		'name'=>'Vĩnh Lợi',
		'type'=>'Xã',
		'location'=>'21 44 47N, 105 16 45E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02551',
		'name'=>'Thượng Ấm',
		'type'=>'Xã',
		'location'=>'21 43 50N, 105 19 29E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02554',
		'name'=>'Bình Yên',
		'type'=>'Xã',
		'location'=>'21 44 42N, 105 26 11E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02557',
		'name'=>'Lương Thiện',
		'type'=>'Xã',
		'location'=>'21 44 04N, 105 28 17E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02560',
		'name'=>'Tú Thịnh',
		'type'=>'Xã',
		'location'=>'21 43 25N, 105 22 03E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02563',
		'name'=>'Cấp Tiến',
		'type'=>'Xã',
		'location'=>'21 42 25N, 105 16 55E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02566',
		'name'=>'Hợp Thành',
		'type'=>'Xã',
		'location'=>'21 40 54N, 105 28 07E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02569',
		'name'=>'Phúc Ứng',
		'type'=>'Xã',
		'location'=>'21 39 54N, 105 22 04E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02572',
		'name'=>'Đông Thọ',
		'type'=>'Xã',
		'location'=>'21 39 44N, 105 17 17E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02575',
		'name'=>'Kháng Nhật',
		'type'=>'Xã',
		'location'=>'21 39 14N, 105 27 16E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02578',
		'name'=>'Hợp Hòa',
		'type'=>'Xã',
		'location'=>'21 37 24N, 105 26 25E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02581',
		'name'=>'Thanh Phát',
		'type'=>'Xã',
		'location'=>'21 37 32N, 105 21 14E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02584',
		'name'=>'Quyết Thắng',
		'type'=>'Xã',
		'location'=>'21 38 04N, 105 14 48E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02587',
		'name'=>'Đồng Quý',
		'type'=>'Xã',
		'location'=>'21 37 27N, 105 17 33E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02590',
		'name'=>'Tuân Lộ',
		'type'=>'Xã',
		'location'=>'21 36 03N, 105 24 43E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02593',
		'name'=>'Vân Sơn',
		'type'=>'Xã',
		'location'=>'21 35 56N, 105 15 22E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02596',
		'name'=>'Văn Phú',
		'type'=>'Xã',
		'location'=>'21 36 06N, 105 17 34E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02599',
		'name'=>'Chi Thiết',
		'type'=>'Xã',
		'location'=>'21 35 48N, 105 18 23E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02602',
		'name'=>'Đông Lợi',
		'type'=>'Xã',
		'location'=>'21 35 29N, 105 20 14E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02605',
		'name'=>'Thiện Kế',
		'type'=>'Xã',
		'location'=>'21 35 19N, 105 29 09E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02608',
		'name'=>'Hồng Lạc',
		'type'=>'Xã',
		'location'=>'21 34 44N, 105 16 36E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02611',
		'name'=>'Phú Lương',
		'type'=>'Xã',
		'location'=>'21 33 09N, 105 22 52E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02614',
		'name'=>'Ninh Lai',
		'type'=>'Xã',
		'location'=>'21 33 18N, 105 30 30E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02617',
		'name'=>'Đại Phú',
		'type'=>'Xã',
		'location'=>'21 32 16N, 105 25 26E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02620',
		'name'=>'Sơn Nam',
		'type'=>'Xã',
		'location'=>'21 32 44N, 105 27 47E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02623',
		'name'=>'Hào Phú',
		'type'=>'Xã',
		'location'=>'21 32 54N, 105 18 44E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02626',
		'name'=>'Tam Đa',
		'type'=>'Xã',
		'location'=>'21 32 26N, 105 20 45E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02629',
		'name'=>'Sầm Dương',
		'type'=>'Xã',
		'location'=>'21 32 36N, 105 17 20E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02632',
		'name'=>'Lâm Xuyên',
		'type'=>'Xã',
		'location'=>'21 31 07N, 105 18 56E',
		'district_id'=>'076'
		] );
					
		Ward::create( [
		'ward_id'=>'02635',
		'name'=>'Duyên Hải',
		'type'=>'Phường',
		'location'=>'22 30 00N, 103 57 21E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02638',
		'name'=>'Lào Cai',
		'type'=>'Phường',
		'location'=>'22 30 37N, 103 58 59E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02641',
		'name'=>'Phố Mới',
		'type'=>'Phường',
		'location'=>'22 29 55N, 103 59 08E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02644',
		'name'=>'Cốc Lếu',
		'type'=>'Phường',
		'location'=>'22 29 45N, 103 58 03E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02647',
		'name'=>'Kim Tân',
		'type'=>'Phường',
		'location'=>'22 48 47N, 103 58 25E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02650',
		'name'=>'Bắc Lệnh',
		'type'=>'Phường',
		'location'=>'22 25 56N, 104 00 31E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02653',
		'name'=>'Pom Hán',
		'type'=>'Phường',
		'location'=>'22 24 59N, 104 00 56E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02656',
		'name'=>'Xuân Tăng',
		'type'=>'Phường',
		'location'=>'22 24 54N, 104 03 00E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02658',
		'name'=>'Bình Minh',
		'type'=>'Phường',
		'location'=>'22 25 54N, 104 01 27E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02659',
		'name'=>'Thống Nhất',
		'type'=>'Phường',
		'location'=>'22 24 00N, 104 02 47E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02662',
		'name'=>'Đồng Tuyển',
		'type'=>'Xã',
		'location'=>'22 29 40N, 103 56 48E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02665',
		'name'=>'Vạn Hoà',
		'type'=>'Xã',
		'location'=>'22 28 39N, 104 00 50E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02668',
		'name'=>'Bắc Cường',
		'type'=>'Phường',
		'location'=>'22 27 19N, 103 58 39E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02671',
		'name'=>'Nam Cường',
		'type'=>'Phường',
		'location'=>'22 26 25N, 103 59 22E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02674',
		'name'=>'Cam Đường',
		'type'=>'Xã',
		'location'=>'22 24 50N, 103 59 37E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02677',
		'name'=>'Tả Phời',
		'type'=>'Xã',
		'location'=>'22 22 33N, 103 57 26E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02680',
		'name'=>'Hợp Thành',
		'type'=>'Xã',
		'location'=>'22 21 47N, 104 00 45E',
		'district_id'=>'080'
		] );
					
		Ward::create( [
		'ward_id'=>'02683',
		'name'=>'Bát Xát',
		'type'=>'Thị Trấn',
		'location'=>'22 32 23N, 103 53 13E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02686',
		'name'=>'A Mú Sung',
		'type'=>'Xã',
		'location'=>'22 44 05N, 103 38 32E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02689',
		'name'=>'Nậm Chạc',
		'type'=>'Xã',
		'location'=>'22 42 29N, 103 41 25E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02692',
		'name'=>'A Lù',
		'type'=>'Xã',
		'location'=>'22 42 29N, 103 35 47E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02695',
		'name'=>'Trịnh Tường',
		'type'=>'Xã',
		'location'=>'22 39 38N, 103 43 26E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02698',
		'name'=>'Ngải Thầu',
		'type'=>'Xã',
		'location'=>'22 40 41N, 103 36 46E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02701',
		'name'=>'Y Tý',
		'type'=>'Xã',
		'location'=>'22 37 27N, 103 36 14E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02704',
		'name'=>'Cốc Mỳ',
		'type'=>'Xã',
		'location'=>'22 36 41N, 103 45 12E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02707',
		'name'=>'Dền Sáng',
		'type'=>'Xã',
		'location'=>'22 35 18N, 103 39 51E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02710',
		'name'=>'Bản Vược',
		'type'=>'Xã',
		'location'=>'22 35 14N, 103 48 24E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02713',
		'name'=>'Sàng Ma Sáo',
		'type'=>'Xã',
		'location'=>'22 33 20N, 103 38 02E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02716',
		'name'=>'Bản Qua',
		'type'=>'Xã',
		'location'=>'22 32 42N, 103 51 36E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02719',
		'name'=>'Mường Vi',
		'type'=>'Xã',
		'location'=>'22 32 40N, 103 47 53E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02722',
		'name'=>'Dền Thàng',
		'type'=>'Xã',
		'location'=>'22 33 06N, 103 42 51E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02725',
		'name'=>'Bản Xèo',
		'type'=>'Xã',
		'location'=>'22 31 41N, 103 45 06E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02728',
		'name'=>'Mường Hum',
		'type'=>'Xã',
		'location'=>'22 30 49N, 103 41 16E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02731',
		'name'=>'Trung Lèng Hồ',
		'type'=>'Xã',
		'location'=>'22 27 39N, 103 38 05E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02734',
		'name'=>'Quang Kim',
		'type'=>'Xã',
		'location'=>'22 30 31N, 103 53 21E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02737',
		'name'=>'Pa Cheo',
		'type'=>'Xã',
		'location'=>'22 29 21N, 103 46 32E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02740',
		'name'=>'Nậm Pung',
		'type'=>'Xã',
		'location'=>'22 28 37N, 103 43 17E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02743',
		'name'=>'Phìn Ngan',
		'type'=>'Xã',
		'location'=>'22 27 40N, 103 50 34E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02746',
		'name'=>'Cốc San',
		'type'=>'Xã',
		'location'=>'22 27 31N, 103 56 05E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02749',
		'name'=>'Tòng Sành',
		'type'=>'Xã',
		'location'=>'22 26 58N, 103 54 13E',
		'district_id'=>'082'
		] );
					
		Ward::create( [
		'ward_id'=>'02752',
		'name'=>'Pha Long',
		'type'=>'Xã',
		'location'=>'22 48 33N, 104 13 56E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02755',
		'name'=>'Tả Ngải Chồ',
		'type'=>'Xã',
		'location'=>'22 48 09N, 104 11 48E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02758',
		'name'=>'Tung Chung Phố',
		'type'=>'Xã',
		'location'=>'22 46 44N, 104 08 45E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02761',
		'name'=>'Mường Khương',
		'type'=>'Xã',
		'location'=>'22 46 15N, 104 06 12E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02764',
		'name'=>'Dìn Chin',
		'type'=>'Xã',
		'location'=>'22 46 28N, 104 13 11E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02767',
		'name'=>'Tả Gia Khâu',
		'type'=>'Xã',
		'location'=>'22 44 30N, 104 14 09E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02770',
		'name'=>'Nậm Chảy',
		'type'=>'Xã',
		'location'=>'22 41 58N, 104 03 24E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02773',
		'name'=>'Nấm Lư',
		'type'=>'Xã',
		'location'=>'22 43 51N, 104 09 05E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02776',
		'name'=>'Lùng Khấu Nhin',
		'type'=>'Xã',
		'location'=>'22 42 10N, 104 09 23E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02779',
		'name'=>'Thanh Bình',
		'type'=>'Xã',
		'location'=>'22 41 38N, 104 05 56E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02782',
		'name'=>'Cao Sơn',
		'type'=>'Xã',
		'location'=>'22 38 33N, 104 09 35E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02785',
		'name'=>'Lùng Vai',
		'type'=>'Xã',
		'location'=>'22 37 32N, 104 04 40E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02788',
		'name'=>'Bản Lầu',
		'type'=>'Xã',
		'location'=>'22 34 33N, 104 02 40E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02791',
		'name'=>'La Pan Tẩn',
		'type'=>'Xã',
		'location'=>'22 34 38N, 104 08 38E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02794',
		'name'=>'Tả Thàng',
		'type'=>'Xã',
		'location'=>'22 34 15N, 104 10 56E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02797',
		'name'=>'Bản Sen',
		'type'=>'Xã',
		'location'=>'22 34 12N, 104 06 06E',
		'district_id'=>'083'
		] );
					
		Ward::create( [
		'ward_id'=>'02800',
		'name'=>'Nàn Sán',
		'type'=>'Xã',
		'location'=>'22 42 49N, 104 15 59E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02803',
		'name'=>'Thào Chư Phìn',
		'type'=>'Xã',
		'location'=>'22 41 59N, 104 11 40E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02806',
		'name'=>'Bản Mế',
		'type'=>'Xã',
		'location'=>'22 41 49N, 104 13 31E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02809',
		'name'=>'Si Ma Cai',
		'type'=>'Xã',
		'location'=>'22 42 16N, 104 17 42E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02812',
		'name'=>'Sán Chải',
		'type'=>'Xã',
		'location'=>'22 41 48N, 104 18 21E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02815',
		'name'=>'Mản Thẩn',
		'type'=>'Xã',
		'location'=>'22 40 01N, 104 15 18E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02818',
		'name'=>'Lùng Sui',
		'type'=>'Xã',
		'location'=>'22 39 39N, 104 20 13E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02821',
		'name'=>'Cán Cấu',
		'type'=>'Xã',
		'location'=>'22 38 25N, 104 17 54E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02824',
		'name'=>'Sín Chéng',
		'type'=>'Xã',
		'location'=>'22 38 34N, 104 13 03E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02827',
		'name'=>'Cán Hồ',
		'type'=>'Xã',
		'location'=>'22 39 30N, 104 16 51E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02830',
		'name'=>'Quan Thần Sán',
		'type'=>'Xã',
		'location'=>'22 38 12N, 104 15 50E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02833',
		'name'=>'Lử Thẩn',
		'type'=>'Xã',
		'location'=>'22 37 14N, 104 19 47E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02836',
		'name'=>'Nàn Xín',
		'type'=>'Xã',
		'location'=>'22 36 48N, 104 13 22E',
		'district_id'=>'084'
		] );
					
		Ward::create( [
		'ward_id'=>'02839',
		'name'=>'Bắc Hà',
		'type'=>'Thị Trấn',
		'location'=>'22 32 24N, 104 17 29E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02842',
		'name'=>'Lùng Cải',
		'type'=>'Xã',
		'location'=>'22 38 49N, 104 23 04E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02845',
		'name'=>'Bản Già',
		'type'=>'Xã',
		'location'=>'22 37 06N, 104 24 17E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02848',
		'name'=>'Lùng Phình',
		'type'=>'Xã',
		'location'=>'22 36 15N, 104 20 55E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02851',
		'name'=>'Tả Van Chư',
		'type'=>'Xã',
		'location'=>'22 36 04N, 104 16 31E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02854',
		'name'=>'Tả Củ Tỷ',
		'type'=>'Xã',
		'location'=>'22 35 43N, 104 25 41E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02857',
		'name'=>'Thải Giàng Phố',
		'type'=>'Xã',
		'location'=>'22 32 46N, 104 21 42E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02860',
		'name'=>'Lầu Thí Ngài',
		'type'=>'Xã',
		'location'=>'22 34 19N, 104 19 26E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02863',
		'name'=>'Hoàng Thu Phố',
		'type'=>'Xã',
		'location'=>'22 33 46N, 104 13 56E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02866',
		'name'=>'Bản Phố',
		'type'=>'Xã',
		'location'=>'22 33 28N, 104 15 59E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02869',
		'name'=>'Bản Liền',
		'type'=>'Xã',
		'location'=>'22 31 09N, 104 23 20E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02872',
		'name'=>'Tà Chải',
		'type'=>'Xã',
		'location'=>'22 32 18N, 104 18 05E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02875',
		'name'=>'Na Hối',
		'type'=>'Xã',
		'location'=>'22 30 59N, 104 17 17E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02878',
		'name'=>'Cốc Ly',
		'type'=>'Xã',
		'location'=>'22 29 51N, 104 12 55E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02881',
		'name'=>'Nậm Mòn',
		'type'=>'Xã',
		'location'=>'22 29 00N, 104 15 37E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02884',
		'name'=>'Nậm Đét',
		'type'=>'Xã',
		'location'=>'22 26 24N, 104 18 41E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02887',
		'name'=>'Nậm Khánh',
		'type'=>'Xã',
		'location'=>'22 26 17N, 104 20 03E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02890',
		'name'=>'Bảo Nhai',
		'type'=>'Xã',
		'location'=>'22 25 51N, 104 14 52E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02893',
		'name'=>'Nậm Lúc',
		'type'=>'Xã',
		'location'=>'22 24 16N, 104 21 27E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02896',
		'name'=>'Cốc Lầu',
		'type'=>'Xã',
		'location'=>'22 22 29N, 104 19 20E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02899',
		'name'=>'Bản Cái',
		'type'=>'Xã',
		'location'=>'22 21 46N, 104 25 10E',
		'district_id'=>'085'
		] );
					
		Ward::create( [
		'ward_id'=>'02902',
		'name'=>'N.t Phong Hải',
		'type'=>'Thị Trấn',
		'location'=>'22 28 26N, 104 07 52E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02905',
		'name'=>'Phố Lu',
		'type'=>'Thị Trấn',
		'location'=>'22 19 51N, 104 11 25E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02908',
		'name'=>'Tằng Loỏng',
		'type'=>'Thị Trấn',
		'location'=>'22 16 03N, 104 05 21E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02911',
		'name'=>'Bản Phiệt',
		'type'=>'Xã',
		'location'=>'22 30 42N, 104 01 12E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02914',
		'name'=>'Bản Cầm',
		'type'=>'Xã',
		'location'=>'22 30 39N, 104 05 07E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02917',
		'name'=>'Thái Niên',
		'type'=>'Xã',
		'location'=>'22 24 27N, 104 06 24E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02920',
		'name'=>'Phong Niên',
		'type'=>'Xã',
		'location'=>'22 24 25N, 104 11 50E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02923',
		'name'=>'Gia Phú',
		'type'=>'Xã',
		'location'=>'22 20 23N, 104 04 05E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02926',
		'name'=>'Xuân Quang',
		'type'=>'Xã',
		'location'=>'22 21 11N, 104 15 26E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02929',
		'name'=>'Sơn Hải',
		'type'=>'Xã',
		'location'=>'22 20 21N, 104 08 15E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02932',
		'name'=>'Xuân Giao',
		'type'=>'Xã',
		'location'=>'22 20 02N, 104 07 13E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02935',
		'name'=>'Trì Quang',
		'type'=>'Xã',
		'location'=>'22 18 39N, 104 15 08E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02938',
		'name'=>'Sơn Hà',
		'type'=>'Xã',
		'location'=>'22 17 19N, 104 11 25E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02941',
		'name'=>'Phố Lu',
		'type'=>'Xã',
		'location'=>'22 17 57N, 104 13 07E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02944',
		'name'=>'Phú Nhuận',
		'type'=>'Xã',
		'location'=>'22 14 57N, 104 08 35E',
		'district_id'=>'086'
		] );
					
		Ward::create( [
		'ward_id'=>'02947',
		'name'=>'Phố Ràng',
		'type'=>'Thị Trấn',
		'location'=>'22 13 52N, 104 29 07E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02950',
		'name'=>'Tân Tiến',
		'type'=>'Xã',
		'location'=>'22 26 39N, 104 25 48E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02953',
		'name'=>'Nghĩa Đô',
		'type'=>'Xã',
		'location'=>'22 24 04N, 104 27 25E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02956',
		'name'=>'Vĩnh Yên',
		'type'=>'Xã',
		'location'=>'22 22 03N, 104 30 53E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02959',
		'name'=>'Điện Quan',
		'type'=>'Xã',
		'location'=>'22 19 07N, 104 20 33E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02962',
		'name'=>'Xuân Hoà',
		'type'=>'Xã',
		'location'=>'22 18 10N, 104 31 04E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02965',
		'name'=>'Tân Dương',
		'type'=>'Xã',
		'location'=>'22 17 22N, 104 27 41E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02968',
		'name'=>'Thượng Hà',
		'type'=>'Xã',
		'location'=>'22 17 32N, 104 23 41E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02971',
		'name'=>'Kim Sơn',
		'type'=>'Xã',
		'location'=>'22 15 54N, 104 18 24E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02974',
		'name'=>'Cam Cọn',
		'type'=>'Xã',
		'location'=>'22 13 53N, 104 15 47E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02977',
		'name'=>'Minh Tân',
		'type'=>'Xã',
		'location'=>'22 14 52N, 104 24 03E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02980',
		'name'=>'Xuân Thượng',
		'type'=>'Xã',
		'location'=>'22 14 09N, 104 31 52E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02983',
		'name'=>'Việt Tiến',
		'type'=>'Xã',
		'location'=>'22 12 46N, 104 35 09E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02986',
		'name'=>'Yên Sơn',
		'type'=>'Xã',
		'location'=>'22 13 07N, 104 26 47E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02989',
		'name'=>'Bảo Hà',
		'type'=>'Xã',
		'location'=>'22 11 25N, 104 22 04E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02992',
		'name'=>'Lương Sơn',
		'type'=>'Xã',
		'location'=>'22 10 47N, 104 29 06E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02995',
		'name'=>'Long Phúc',
		'type'=>'Xã',
		'location'=>'22 10 34N, 104 32 17E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'02998',
		'name'=>'Long Khánh',
		'type'=>'Xã',
		'location'=>'22 08 32N, 104 32 22E',
		'district_id'=>'087'
		] );
					
		Ward::create( [
		'ward_id'=>'03001',
		'name'=>'Sa Pa',
		'type'=>'Thị Trấn',
		'location'=>'22 20 51N, 103 49 03E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03004',
		'name'=>'Bản Khoang',
		'type'=>'Xã',
		'location'=>'22 25 58N, 103 47 37E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03007',
		'name'=>'Tả Giàng Phình',
		'type'=>'Xã',
		'location'=>'22 26 06N, 103 45 35E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03010',
		'name'=>'Trung Chải',
		'type'=>'Xã',
		'location'=>'22 23 40N, 103 53 37E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03013',
		'name'=>'Tả Phìn',
		'type'=>'Xã',
		'location'=>'22 23 58N, 103 50 15E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03016',
		'name'=>'Sa Pả',
		'type'=>'Xã',
		'location'=>'22 21 32N, 103 51 54E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03019',
		'name'=>'San Sả Hồ',
		'type'=>'Xã',
		'location'=>'22 19 28N, 103 48 19E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03022',
		'name'=>'Bản Phùng',
		'type'=>'Xã',
		'location'=>'22 18 46N, 103 59 41E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03025',
		'name'=>'Hầu Thào',
		'type'=>'Xã',
		'location'=>'22 18 49N, 103 53 56E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03028',
		'name'=>'Lao Chải',
		'type'=>'Xã',
		'location'=>'22 17 24N, 103 51 21E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03031',
		'name'=>'Thanh Kim',
		'type'=>'Xã',
		'location'=>'22 17 27N, 103 57 30E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03034',
		'name'=>'Suối Thầu',
		'type'=>'Xã',
		'location'=>'22 16 04N, 104 02 52E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03037',
		'name'=>'Sử Pán',
		'type'=>'Xã',
		'location'=>'22 17 29N, 103 55 36E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03040',
		'name'=>'Tả Van',
		'type'=>'Xã',
		'location'=>'22 14 30N, 103 53 06E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03043',
		'name'=>'Thanh Phú',
		'type'=>'Xã',
		'location'=>'22 16 12N, 104 00 25E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03046',
		'name'=>'Bản Hồ',
		'type'=>'Xã',
		'location'=>'22 12 40N, 103 55 48E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03049',
		'name'=>'Nậm Sài',
		'type'=>'Xã',
		'location'=>'22 13 18N, 104 00 23E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03052',
		'name'=>'Nậm Cang',
		'type'=>'Xã',
		'location'=>'22 11 20N, 104 01 29E',
		'district_id'=>'088'
		] );
					
		Ward::create( [
		'ward_id'=>'03055',
		'name'=>'Khánh Yên',
		'type'=>'Thị Trấn',
		'location'=>'22 05 56N, 104 14 58E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03058',
		'name'=>'Văn Sơn',
		'type'=>'Xã',
		'location'=>'22 14 10N, 104 12 21E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03061',
		'name'=>'Võ Lao',
		'type'=>'Xã',
		'location'=>'22 11 35N, 104 11 45E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03064',
		'name'=>'Sơn Thuỷ',
		'type'=>'Xã',
		'location'=>'22 09 46N, 104 16 26E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03067',
		'name'=>'Nậm Mả',
		'type'=>'Xã',
		'location'=>'22 09 58N, 104 07 59E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03070',
		'name'=>'Tân Thượng',
		'type'=>'Xã',
		'location'=>'22 09 14N, 104 19 05E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03073',
		'name'=>'Nậm Rạng',
		'type'=>'Xã',
		'location'=>'22 08 40N, 104 11 53E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03076',
		'name'=>'Nậm Chầy',
		'type'=>'Xã',
		'location'=>'22 07 44N, 104 03 46E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03079',
		'name'=>'Tân An',
		'type'=>'Xã',
		'location'=>'22 07 36N, 104 22 29E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03082',
		'name'=>'Khánh Yên Thượng',
		'type'=>'Xã',
		'location'=>'22 05 50N, 104 16 09E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03085',
		'name'=>'Nậm Xé',
		'type'=>'Xã',
		'location'=>'22 02 36N, 103 59 57E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03088',
		'name'=>'Dần Thàng',
		'type'=>'Xã',
		'location'=>'22 06 09N, 104 07 22E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03091',
		'name'=>'Chiềng Ken',
		'type'=>'Xã',
		'location'=>'22 04 40N, 104 19 50E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03094',
		'name'=>'Làng Giàng',
		'type'=>'Xã',
		'location'=>'22 04 50N, 104 13 29E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03097',
		'name'=>'Hoà Mạc',
		'type'=>'Xã',
		'location'=>'22 04 53N, 104 10 46E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03100',
		'name'=>'Khánh Yên Trung',
		'type'=>'Xã',
		'location'=>'22 01 44N, 104 15 19E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03103',
		'name'=>'Khánh Yên Hạ',
		'type'=>'Xã',
		'location'=>'22 00 30N, 104 16 05E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03106',
		'name'=>'Dương Quỳ',
		'type'=>'Xã',
		'location'=>'22 01 30N, 104 10 49E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03109',
		'name'=>'Nậm Tha',
		'type'=>'Xã',
		'location'=>'21 58 25N, 104 22 41E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03112',
		'name'=>'Minh Lương',
		'type'=>'Xã',
		'location'=>'22 01 24N, 104 03 29E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03115',
		'name'=>'Thẩm Dương',
		'type'=>'Xã',
		'location'=>'22 01 41N, 104 06 37E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03118',
		'name'=>'Liêm Phú',
		'type'=>'Xã',
		'location'=>'21 58 38N, 104 19 01E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03121',
		'name'=>'Nậm Xây',
		'type'=>'Xã',
		'location'=>'21 56 49N, 104 06 36E',
		'district_id'=>'089'
		] );
					
		Ward::create( [
		'ward_id'=>'03124',
		'name'=>'Noong Bua',
		'type'=>'Phường',
		'location'=>'21 23 55N, 103 03 21E',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03127',
		'name'=>'Him Lam',
		'type'=>'Phường',
		'location'=>'21 24 09N, 103 01 51E',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03130',
		'name'=>'Thanh Bình',
		'type'=>'Phường',
		'location'=>'21 23 59N, 103 00 35E',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03133',
		'name'=>'Tân Thanh',
		'type'=>'Phường',
		'location'=>'21 23 34N, 103 01 19E',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03136',
		'name'=>'Mường Thanh',
		'type'=>'Phường',
		'location'=>'21 23 10N, 103 01 10E',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03139',
		'name'=>'Nam Thanh',
		'type'=>'Phường',
		'location'=>'21 22 30N, 103 02 12E',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03142',
		'name'=>'Thanh Trường',
		'type'=>'Phường',
		'location'=>'21 23 59N, 103 00 05E',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03144',
		'name'=>'Tà Lèng',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03145',
		'name'=>'Thanh Minh',
		'type'=>'Xã',
		'location'=>'21 25 52N, 103 03 17E',
		'district_id'=>'094'
		] );
					
		Ward::create( [
		'ward_id'=>'03148',
		'name'=>'Sông Đà',
		'type'=>'Phường',
		'location'=>'22 04 30N, 103 06 51E',
		'district_id'=>'095'
		] );
					
		Ward::create( [
		'ward_id'=>'03151',
		'name'=>'Na Lay',
		'type'=>'Phường',
		'location'=>'22 02 02N, 103 08 53E',
		'district_id'=>'095'
		] );
					
		Ward::create( [
		'ward_id'=>'03154',
		'name'=>'Sín Thầu',
		'type'=>'Xã',
		'location'=>'22 25 09N, 102 16 29E',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03155',
		'name'=>'Sen Thượng',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03157',
		'name'=>'Chung Chải',
		'type'=>'Xã',
		'location'=>'22 17 41N, 102 21 56E',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03158',
		'name'=>'Leng Su Sìn',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03159',
		'name'=>'Pá Mỳ',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03160',
		'name'=>'Mường Nhé',
		'type'=>'Xã',
		'location'=>'22 10 00N, 102 27 12E',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03161',
		'name'=>'Nậm Vì',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03162',
		'name'=>'Nậm Kè',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03163',
		'name'=>'Mường Toong',
		'type'=>'Xã',
		'location'=>'22 04 54N, 102 36 39E',
		'district_id'=>'096'
		] );


		Ward::create( [
		'ward_id'=>'03164',
		'name'=>'Quảng Lâm',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03165',
		'name'=>'Pa Tần',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03166',
		'name'=>'Chà Cang',
		'type'=>'Xã',
		'location'=>'21 59 10N, 102 46 04E',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03167',
		'name'=>'Na Cô Sa',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03168',
		'name'=>'Nà Khoa',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03169',
		'name'=>'Nà Hỳ',
		'type'=>'Xã',
		'location'=>'21 47 26N, 103 42 16E',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03170',
		'name'=>'Nà Bủng',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'096'
		] );
					
		Ward::create( [
		'ward_id'=>'03172',
		'name'=>'Mường Chà',
		'type'=>'Thị Trấn',
		'location'=>'21 45 36N, 103 06 01E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03174',
		'name'=>'Nậm Khăn',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03175',
		'name'=>'Chà Tở',
		'type'=>'Xã',
		'location'=>'21 59 10N, 102 56 24E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03178',
		'name'=>'Xá Tổng',
		'type'=>'Xã',
		'location'=>'22 00 08N, 103 13 36E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03181',
		'name'=>'Mường Tùng',
		'type'=>'Xã',
		'location'=>'21 58 55N, 103 05 00E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03184',
		'name'=>'Lay Nưa',
		'type'=>'Xã',
		'location'=>'22 00 39N, 103 06 36E',
		'district_id'=>'095'
		] );
					
		Ward::create( [
		'ward_id'=>'03187',
		'name'=>'Chà Nưa',
		'type'=>'Xã',
		'location'=>'21 53 40N, 102 53 18E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03190',
		'name'=>'Hừa Ngài',
		'type'=>'Xã',
		'location'=>'21 50 32N, 103 12 10E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03193',
		'name'=>'Pa Ham',
		'type'=>'Xã',
		'location'=>'21 52 13N, 103 16 48E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03196',
		'name'=>'Huổi Lèng',
		'type'=>'Xã',
		'location'=>'21 51 38N, 103 06 00E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03197',
		'name'=>'Sa Lông',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03198',
		'name'=>'Phìn Hồ',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03199',
		'name'=>'Si Pa Phìn',
		'type'=>'Xã',
		'location'=>'21 46 38N, 102 56 52E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03200',
		'name'=>'Ma Thì Hồ',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03201',
		'name'=>'Na Sang',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03202',
		'name'=>'Mường Mươn',
		'type'=>'Xã',
		'location'=>'21 41 22N, 103 04 24E',
		'district_id'=>'097'
		] );
					
		Ward::create( [
		'ward_id'=>'03203',
		'name'=>'Điện Biên Đông',
		'type'=>'Thị Trấn',
		'location'=>'',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03205',
		'name'=>'Na Son',
		'type'=>'Xã',
		'location'=>'21 20 57N, 103 13 18E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03208',
		'name'=>'Phì Nhừ',
		'type'=>'Xã',
		'location'=>'21 17 02N, 103 17 22E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03211',
		'name'=>'Chiềng Sơ',
		'type'=>'Xã',
		'location'=>'21 17 07N, 103 23 30E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03214',
		'name'=>'Mường Luân',
		'type'=>'Xã',
		'location'=>'21 14 42N, 103 21 08E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03217',
		'name'=>'Tủa Chùa',
		'type'=>'Thị Trấn',
		'location'=>'21 51 30N, 103 20 16E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03220',
		'name'=>'Huổi Só',
		'type'=>'Xã',
		'location'=>'22 04 49N, 103 24 56E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03223',
		'name'=>'Xín Chải',
		'type'=>'Xã',
		'location'=>'22 05 56N, 103 20 14E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03226',
		'name'=>'Tả Sìn Thàng',
		'type'=>'Xã',
		'location'=>'22 02 30N, 103 20 38E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03229',
		'name'=>'Lao Xả Phình',
		'type'=>'Xã',
		'location'=>'22 00 01N, 103 17 47E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03232',
		'name'=>'Tả Phìn',
		'type'=>'Xã',
		'location'=>'21 59 01N, 103 21 54E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03235',
		'name'=>'Tủa Thàng',
		'type'=>'Xã',
		'location'=>'21 57 37N, 103 26 40E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03238',
		'name'=>'Trung Thu',
		'type'=>'Xã',
		'location'=>'21 56 06N, 103 17 41E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03241',
		'name'=>'Sính Phình',
		'type'=>'Xã',
		'location'=>'21 54 51N, 103 21 09E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03244',
		'name'=>'Sáng Nhè',
		'type'=>'Xã',
		'location'=>'21 52 39N, 103 25 20E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03247',
		'name'=>'Mường Đun',
		'type'=>'Xã',
		'location'=>'21 53 06N, 103 28 44E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03250',
		'name'=>'Mường Báng',
		'type'=>'Xã',
		'location'=>'21 49 52N, 103 20 28E',
		'district_id'=>'098'
		] );
					
		Ward::create( [
		'ward_id'=>'03253',
		'name'=>'Tuần Giáo',
		'type'=>'Thị Trấn',
		'location'=>'21 35 35N, 103 24 28E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03256',
		'name'=>'Mường Ảng',
		'type'=>'Thị Trấn',
		'location'=>'21 31 32N, 103 13 01E',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03259',
		'name'=>'Phình Sáng',
		'type'=>'Xã',
		'location'=>'21 47 46N, 103 28 32E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03262',
		'name'=>'Mùn Chung',
		'type'=>'Xã',
		'location'=>'21 45 28N, 103 23 28E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03265',
		'name'=>'Ta Ma',
		'type'=>'Xã',
		'location'=>'21 43 40N, 103 32 20E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03268',
		'name'=>'Mường Mùn',
		'type'=>'Xã',
		'location'=>'21 43 32N, 103 16 02E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03271',
		'name'=>'Pú Nhung',
		'type'=>'Xã',
		'location'=>'21 42 04N, 103 27 30E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03274',
		'name'=>'Quài Nưa',
		'type'=>'Xã',
		'location'=>'21 39 12N, 103 26 56E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03277',
		'name'=>'Mường Thín',
		'type'=>'Xã',
		'location'=>'21 38 41N, 103 21 21E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03280',
		'name'=>'Tỏa Tình',
		'type'=>'Xã',
		'location'=>'21 35 44N, 103 30 20E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03283',
		'name'=>'Nà Sáy',
		'type'=>'Xã',
		'location'=>'21 37 07N, 103 09 38E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03286',
		'name'=>'Mường Đăng',
		'type'=>'Xã',
		'location'=>'21 34 44N, 103 11 15E',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03287',
		'name'=>'Ngối Cáy',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03289',
		'name'=>'Quài Cang',
		'type'=>'Xã',
		'location'=>'21 37 06N, 103 25 48E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03292',
		'name'=>'Ẳng Tở',
		'type'=>'Xã',
		'location'=>'21 34 03N, 103 15 56E',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03295',
		'name'=>'Quài Tở',
		'type'=>'Xã',
		'location'=>'21 33 14N, 103 27 39E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03298',
		'name'=>'Chiềng Sinh',
		'type'=>'Xã',
		'location'=>'21 31 49N, 103 22 21E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03301',
		'name'=>'Búng Lao',
		'type'=>'Xã',
		'location'=>'21 29 29N, 103 20 20E',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03302',
		'name'=>'Xuân Lao',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03304',
		'name'=>'Tênh Phông',
		'type'=>'Xã',
		'location'=>'21 29 52N, 103 25 33E',
		'district_id'=>'099'
		] );
					
		Ward::create( [
		'ward_id'=>'03307',
		'name'=>'Ẳng Nưa',
		'type'=>'Xã',
		'location'=>'21 31 05N, 103 11 42E',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03310',
		'name'=>'Ẳng Cang',
		'type'=>'Xã',
		'location'=>'21 28 39N, 103 14 00E',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03312',
		'name'=>'Nặm Lịch',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03313',
		'name'=>'Mường Lạn',
		'type'=>'Xã',
		'location'=>'21 27 12N, 103 16 09E',
		'district_id'=>'102'
		] );
					
		Ward::create( [
		'ward_id'=>'03316',
		'name'=>'Nà Tấu',
		'type'=>'Xã',
		'location'=>'21 31 48N, 103 05 51E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03317',
		'name'=>'Nà Nhạn',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03319',
		'name'=>'Mường Pồn',
		'type'=>'Xã',
		'location'=>'21 33 06N, 102 59 28E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03322',
		'name'=>'Thanh Nưa',
		'type'=>'Xã',
		'location'=>'21 27 13N, 102 57 13E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03325',
		'name'=>'Mường Phăng',
		'type'=>'Xã',
		'location'=>'21 26 10N, 103 07 20E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03328',
		'name'=>'Thanh Luông',
		'type'=>'Xã',
		'location'=>'21 24 44N, 102 57 40E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03331',
		'name'=>'Thanh Hưng',
		'type'=>'Xã',
		'location'=>'21 22 50N, 102 57 17E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03334',
		'name'=>'Thanh Xương',
		'type'=>'Xã',
		'location'=>'21 21 22N, 103 02 19E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03337',
		'name'=>'Thanh Chăn',
		'type'=>'Xã',
		'location'=>'21 21 53N, 102 57 06E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03340',
		'name'=>'Pa Thơm',
		'type'=>'Xã',
		'location'=>'21 18 26N, 102 55 43E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03343',
		'name'=>'Thanh An',
		'type'=>'Xã',
		'location'=>'21 20 01N, 103 02 20E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03346',
		'name'=>'Thanh Yên',
		'type'=>'Xã',
		'location'=>'21 20 14N, 102 58 37E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03349',
		'name'=>'Noong Luống',
		'type'=>'Xã',
		'location'=>'21 18 04N, 102 58 33E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03352',
		'name'=>'Noọng Hẹt',
		'type'=>'Xã',
		'location'=>'21 18 37N, 103 02 15E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03355',
		'name'=>'Sam Mứn',
		'type'=>'Xã',
		'location'=>'21 16 03N, 103 00 10E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03358',
		'name'=>'Núa Ngam',
		'type'=>'Xã',
		'location'=>'21 13 03N, 103 03 07E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03361',
		'name'=>'Na Ư',
		'type'=>'Xã',
		'location'=>'21 11 58N, 102 56 04E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03364',
		'name'=>'Mường Nhà',
		'type'=>'Xã',
		'location'=>'21 06 52N, 103 04 19E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03367',
		'name'=>'Mường Lói',
		'type'=>'Xã',
		'location'=>'20 58 50N, 103 10 46E',
		'district_id'=>'100'
		] );
					
		Ward::create( [
		'ward_id'=>'03370',
		'name'=>'Pu Nhi',
		'type'=>'Xã',
		'location'=>'21 20 45N, 103 09 07E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03371',
		'name'=>'Nong U',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03373',
		'name'=>'Xa Dung',
		'type'=>'Xã',
		'location'=>'21 22 48N, 103 19 06E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03376',
		'name'=>'Keo Lôm',
		'type'=>'Xã',
		'location'=>'21 13 47N, 103 10 42E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03379',
		'name'=>'Luân Giới',
		'type'=>'Xã',
		'location'=>'21 12 10N, 103 23 39E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03382',
		'name'=>'Phình Giàng',
		'type'=>'Xã',
		'location'=>'21 07 36N, 103 12 45E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03383',
		'name'=>'Pú Hồng',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03384',
		'name'=>'Tìa Dình',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03385',
		'name'=>'Háng Lìa',
		'type'=>'Xã',
		'location'=>'21 08 44N, 103 21 00E',
		'district_id'=>'101'
		] );
					
		Ward::create( [
		'ward_id'=>'03386',
		'name'=>'Quyết Thắng',
		'type'=>'Phường',
		'location'=>'22 24 01N, 103 26 17E',
		'district_id'=>'104'
		] );
					
		Ward::create( [
		'ward_id'=>'03387',
		'name'=>'Tân Phong',
		'type'=>'Phường',
		'location'=>'22 23 24N, 103 28 20E',
		'district_id'=>'104'
		] );
					
		Ward::create( [
		'ward_id'=>'03389',
		'name'=>'Đoàn Kết',
		'type'=>'Phường',
		'location'=>'22 23 50N, 103 27 41E',
		'district_id'=>'104'
		] );
					
		Ward::create( [
		'ward_id'=>'03390',
		'name'=>'Tam Đường',
		'type'=>'Thị Trấn',
		'location'=>'22 20 44N, 103 37 30E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03391',
		'name'=>'Lả Nhì Thàng',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03394',
		'name'=>'Thèn Sin',
		'type'=>'Xã',
		'location'=>'22 27 25N, 103 28 12E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03397',
		'name'=>'Sùng Phài',
		'type'=>'Xã',
		'location'=>'22 25 46N, 103 26 57E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03400',
		'name'=>'Tả Lèng',
		'type'=>'Xã',
		'location'=>'22 26 04N, 103 32 10E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03403',
		'name'=>'Nậm Loỏng',
		'type'=>'Xã',
		'location'=>'22 23 52N, 103 23 55E',
		'district_id'=>'104'
		] );
					
		Ward::create( [
		'ward_id'=>'03405',
		'name'=>'Giang Ma',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03406',
		'name'=>'Hồ Thầu',
		'type'=>'Xã',
		'location'=>'22 23 00N, 103 34 14E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03409',
		'name'=>'San Thàng',
		'type'=>'Xã',
		'location'=>'22 23 15N, 103 29 57E',
		'district_id'=>'104'
		] );
					
		Ward::create( [
		'ward_id'=>'03412',
		'name'=>'Bình Lư',
		'type'=>'Xã',
		'location'=>'22 20 38N, 103 40 46E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03413',
		'name'=>'Sơn Bình',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03415',
		'name'=>'Nùng Nàng',
		'type'=>'Xã',
		'location'=>'22 21 22N, 103 27 09E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03418',
		'name'=>'Bản Giang',
		'type'=>'Xã',
		'location'=>'22 19 06N, 103 30 44E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03421',
		'name'=>'Bản Hon',
		'type'=>'Xã',
		'location'=>'22 18 27N, 103 33 30E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03424',
		'name'=>'Bản Bo',
		'type'=>'Xã',
		'location'=>'22 16 56N, 103 43 03E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03427',
		'name'=>'Nà Tăm',
		'type'=>'Xã',
		'location'=>'22 16 30N, 103 38 33E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03430',
		'name'=>'Khun Há',
		'type'=>'Xã',
		'location'=>'22 13 47N, 103 35 46E',
		'district_id'=>'106'
		] );
					
		Ward::create( [
		'ward_id'=>'03433',
		'name'=>'Mường Tè',
		'type'=>'Thị Trấn',
		'location'=>'22 22 46N, 102 48 40E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03436',
		'name'=>'Thu Lũm',
		'type'=>'Xã',
		'location'=>'22 42 46N, 102 28 14E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03439',
		'name'=>'Ka Lăng',
		'type'=>'Xã',
		'location'=>'22 38 45N, 102 29 10E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03442',
		'name'=>'Pa Ủ',
		'type'=>'Xã',
		'location'=>'22 36 50N, 102 41 16E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03445',
		'name'=>'Mường Tè',
		'type'=>'Xã',
		'location'=>'22 32 13N, 102 36 34E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03448',
		'name'=>'Pa Vệ Sử',
		'type'=>'Xã',
		'location'=>'22 31 17N, 102 50 47E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03451',
		'name'=>'Mù Cả',
		'type'=>'Xã',
		'location'=>'22 28 04N, 102 28 02E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03454',
		'name'=>'Bun Tở',
		'type'=>'Xã',
		'location'=>'22 26 09N, 102 46 45E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03457',
		'name'=>'Nậm Khao',
		'type'=>'Xã',
		'location'=>'22 26 36N, 102 40 31E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03460',
		'name'=>'Hua Bun',
		'type'=>'Xã',
		'location'=>'22 22 18N, 103 00 54E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03463',
		'name'=>'Tà Tổng',
		'type'=>'Xã',
		'location'=>'22 18 07N, 102 36 15E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03466',
		'name'=>'Bun Nưa',
		'type'=>'Xã',
		'location'=>'22 21 51N, 102 54 19E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03469',
		'name'=>'Kan Hồ',
		'type'=>'Xã',
		'location'=>'22 17 54N, 102 47 39E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03472',
		'name'=>'Mường Mô',
		'type'=>'Xã',
		'location'=>'22 10 42N, 102 52 21E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03474',
		'name'=>'Nậm Manh',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03475',
		'name'=>'Nậm Hàng',
		'type'=>'Xã',
		'location'=>'22 09 20N, 103 01 01E',
		'district_id'=>'107'
		] );
					
		Ward::create( [
		'ward_id'=>'03478',
		'name'=>'Sìn Hồ',
		'type'=>'Thị Trấn',
		'location'=>'22 21 05N, 103 15 07E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03481',
		'name'=>'Lê Lợi',
		'type'=>'Xã',
		'location'=>'22 05 41N, 103 09 34E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03484',
		'name'=>'Pú Đao',
		'type'=>'Xã',
		'location'=>'22 09 41N, 103 07 19E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03487',
		'name'=>'Chăn Nưa',
		'type'=>'Xã',
		'location'=>'22 10 23N, 103 11 07E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03490',
		'name'=>'Huổi Luông',
		'type'=>'Xã',
		'location'=>'22 32 36N, 103 12 33E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03493',
		'name'=>'Pa Tần',
		'type'=>'Xã',
		'location'=>'22 28 25N, 103 09 12E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03496',
		'name'=>'Phìn Hồ',
		'type'=>'Xã',
		'location'=>'22 27 33N, 103 16 43E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03499',
		'name'=>'Hồng Thu',
		'type'=>'Xã',
		'location'=>'22 25 05N, 103 13 47E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03502',
		'name'=>'Nậm Ban',
		'type'=>'Xã',
		'location'=>'22 22 32N, 103 06 30E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03505',
		'name'=>'Phăng Sô Lin',
		'type'=>'Xã',
		'location'=>'22 21 41N, 103 16 04E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03508',
		'name'=>'Ma Quai',
		'type'=>'Xã',
		'location'=>'22 22 04N, 103 21 23E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03511',
		'name'=>'Tả Phìn',
		'type'=>'Xã',
		'location'=>'22 20 37N, 103 12 23E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03514',
		'name'=>'Sà Dề Phìn',
		'type'=>'Xã',
		'location'=>'22 16 35N, 103 12 57E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03517',
		'name'=>'Nậm Tăm',
		'type'=>'Xã',
		'location'=>'22 17 54N, 103 25 00E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03520',
		'name'=>'Tả Ngảo',
		'type'=>'Xã',
		'location'=>'22 16 29N, 103 15 45E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03523',
		'name'=>'Pu Sam Cáp',
		'type'=>'Xã',
		'location'=>'22 14 47N, 103 30 10E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03526',
		'name'=>'Nậm Cha',
		'type'=>'Xã',
		'location'=>'22 13 12N, 103 23 38E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03529',
		'name'=>'Làng Mô',
		'type'=>'Xã',
		'location'=>'22 12 45N, 103 15 49E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03532',
		'name'=>'Noong Hẻo',
		'type'=>'Xã',
		'location'=>'22 12 04N, 103 30 16E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03535',
		'name'=>'Nậm Mạ',
		'type'=>'Xã',
		'location'=>'22 09 49N, 103 22 22E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03538',
		'name'=>'Căn Co',
		'type'=>'Xã',
		'location'=>'22 09 05N, 103 26 46E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03541',
		'name'=>'Tủa Sín Chải',
		'type'=>'Xã',
		'location'=>'22 06 50N, 103 16 34E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03544',
		'name'=>'Nậm Cuổi',
		'type'=>'Xã',
		'location'=>'22 07 06N, 103 31 35E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03547',
		'name'=>'Nậm Hăn',
		'type'=>'Xã',
		'location'=>'22 02 00N, 103 28 41E',
		'district_id'=>'108'
		] );
					
		Ward::create( [
		'ward_id'=>'03549',
		'name'=>'Phong Thổ',
		'type'=>'Thị Trấn',
		'location'=>'22 31 00N, 103 19 53E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03550',
		'name'=>'Sì Lờ Lầu',
		'type'=>'Xã',
		'location'=>'22 46 22N, 103 21 34E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03553',
		'name'=>'Mồ Sì San',
		'type'=>'Xã',
		'location'=>'22 45 01N, 103 23 22E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03556',
		'name'=>'Ma Li Chải',
		'type'=>'Xã',
		'location'=>'22 43 46N, 103 18 13E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03559',
		'name'=>'Pa Vây Sử',
		'type'=>'Xã',
		'location'=>'22 43 28N, 103 23 46E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03562',
		'name'=>'Vàng Ma Chải',
		'type'=>'Xã',
		'location'=>'22 42 28N, 103 19 01E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03565',
		'name'=>'Tông Qua Lìn',
		'type'=>'Xã',
		'location'=>'22 41 19N, 103 23 57E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03568',
		'name'=>'Mù Sang',
		'type'=>'Xã',
		'location'=>'22 39 21N, 103 16 55E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03571',
		'name'=>'Dào San',
		'type'=>'Xã',
		'location'=>'22 39 21N, 103 23 24E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03574',
		'name'=>'Ma Ly Pho',
		'type'=>'Xã',
		'location'=>'22 37 29N, 103 13 38E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03577',
		'name'=>'Bản Lang',
		'type'=>'Xã',
		'location'=>'22 36 17N, 103 24 45E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03580',
		'name'=>'Hoang Thèn',
		'type'=>'Xã',
		'location'=>'22 35 47N, 103 18 09E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03583',
		'name'=>'Khổng Lào',
		'type'=>'Xã',
		'location'=>'22 34 26N, 103 20 52E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03586',
		'name'=>'Nậm Xe',
		'type'=>'Xã',
		'location'=>'22 32 59N, 103 28 26E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03589',
		'name'=>'Mường So',
		'type'=>'Xã',
		'location'=>'22 30 58N, 103 21 12E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03592',
		'name'=>'Sin Suối Hồ',
		'type'=>'Xã',
		'location'=>'22 32 23N, 103 31 47E',
		'district_id'=>'109'
		] );
					
		Ward::create( [
		'ward_id'=>'03595',
		'name'=>'Than Uyên',
		'type'=>'Thị Trấn',
		'location'=>'21 58 07N, 103 53 17E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03598',
		'name'=>'Tân Uyên',
		'type'=>'Thị Trấn',
		'location'=>'22 11 57N, 103 47 06E',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03601',
		'name'=>'Mường Khoa',
		'type'=>'Xã',
		'location'=>'22 13 15N, 103 43 02E',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03602',
		'name'=>'Phúc Khoa',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03604',
		'name'=>'Thân Thuộc',
		'type'=>'Xã',
		'location'=>'22 09 53N, 103 43 51E',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03605',
		'name'=>'Trung Đồng',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03607',
		'name'=>'Hố Mít',
		'type'=>'Xã',
		'location'=>'22 07 42N, 103 53 31E',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03610',
		'name'=>'Nậm Cần',
		'type'=>'Xã',
		'location'=>'22 06 19N, 103 41 39E',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03613',
		'name'=>'Nậm Sỏ',
		'type'=>'Xã',
		'location'=>'22 04 30N, 103 35 38E',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03616',
		'name'=>'Pắc Ta',
		'type'=>'Xã',
		'location'=>'22 04 55N, 103 50 15E',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03618',
		'name'=>'Phúc Than',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03619',
		'name'=>'Mường Than',
		'type'=>'Xã',
		'location'=>'22 00 44N, 103 55 15E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03622',
		'name'=>'Tà Mít',
		'type'=>'Xã',
		'location'=>'22 00 29N, 103 42 58E',
		'district_id'=>'111'
		] );
					
		Ward::create( [
		'ward_id'=>'03625',
		'name'=>'Mường Mít',
		'type'=>'Xã',
		'location'=>'22 00 38N, 103 49 24E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03628',
		'name'=>'Pha Mu',
		'type'=>'Xã',
		'location'=>'21 55 24N, 103 45 01E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03631',
		'name'=>'Mường Cang',
		'type'=>'Xã',
		'location'=>'21 56 29N, 103 52 53E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03632',
		'name'=>'Hua Nà',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03634',
		'name'=>'Tà Hừa',
		'type'=>'Xã',
		'location'=>'21 52 30N, 103 45 45E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03637',
		'name'=>'Mường Kim',
		'type'=>'Xã',
		'location'=>'21 50 50N, 103 52 53E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03638',
		'name'=>'Tà Mung',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03640',
		'name'=>'Tà Gia',
		'type'=>'Xã',
		'location'=>'21 47 52N, 103 48 41E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03643',
		'name'=>'Khoen On',
		'type'=>'Xã',
		'location'=>'21 46 16N, 103 53 30E',
		'district_id'=>'110'
		] );
					
		Ward::create( [
		'ward_id'=>'03646',
		'name'=>'Chiềng Lề',
		'type'=>'Phường',
		'location'=>'21 20 39N, 103 54 20E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03649',
		'name'=>'Tô Hiệu',
		'type'=>'Phường',
		'location'=>'21 19 46N, 103 54 43E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03652',
		'name'=>'Quyết Thắng',
		'type'=>'Phường',
		'location'=>'21 19 44N, 103 55 46E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03655',
		'name'=>'Quyết Tâm',
		'type'=>'Phường',
		'location'=>'21 18 28N, 103 55 44E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03658',
		'name'=>'Chiềng Cọ',
		'type'=>'Xã',
		'location'=>'21 18 41N, 103 50 41E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03661',
		'name'=>'Chiềng Đen',
		'type'=>'Xã',
		'location'=>'21 23 39N, 103 51 23E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03664',
		'name'=>'Chiềng Xôm',
		'type'=>'Xã',
		'location'=>'21 22 57N, 103 55 49E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03667',
		'name'=>'Chiềng An',
		'type'=>'Phường',
		'location'=>'21 20 50N, 103 54 23E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03670',
		'name'=>'Chiềng Cơi',
		'type'=>'Xã',
		'location'=>'21 18 41N, 103 54 37E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03673',
		'name'=>'Chiềng Ngần',
		'type'=>'Xã',
		'location'=>'21 18 26N, 103 58 56E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03676',
		'name'=>'Hua La',
		'type'=>'Xã',
		'location'=>'21 16 49N, 103 53 35E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03679',
		'name'=>'Chiềng Sinh',
		'type'=>'Phường',
		'location'=>'21 16 56N, 103 57 58E',
		'district_id'=>'116'
		] );
					
		Ward::create( [
		'ward_id'=>'03682',
		'name'=>'Mường Chiên',
		'type'=>'Xã',
		'location'=>'21 51 29N, 103 35 06E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03685',
		'name'=>'Cà Nàng',
		'type'=>'Xã',
		'location'=>'21 56 44N, 103 33 29E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03688',
		'name'=>'Chiềng Khay',
		'type'=>'Xã',
		'location'=>'21 55 04N, 103 39 09E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03691',
		'name'=>'Pha Khinh',
		'type'=>'Xã',
		'location'=>'21 47 23N, 103 35 25E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03694',
		'name'=>'Mường Giôn',
		'type'=>'Xã',
		'location'=>'21 44 56N, 103 43 16E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03697',
		'name'=>'Pắc Ma',
		'type'=>'Xã',
		'location'=>'21 45 15N, 103 36 53E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03700',
		'name'=>'Chiềng Ơn',
		'type'=>'Xã',
		'location'=>'21 39 21N, 103 44 56E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03703',
		'name'=>'Mường Giàng',
		'type'=>'Xã',
		'location'=>'21 38 54N, 103 35 35E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03706',
		'name'=>'Chiềng Bằng',
		'type'=>'Xã',
		'location'=>'21 38 47N, 103 40 12E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03709',
		'name'=>'Mường Sại',
		'type'=>'Xã',
		'location'=>'21 37 33N, 103 42 28E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03712',
		'name'=>'Nậm Ét',
		'type'=>'Xã',
		'location'=>'21 34 20N, 103 45 36E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03715',
		'name'=>'Liệp Muội',
		'type'=>'Xã',
		'location'=>'21 34 14N, 103 41 48E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03718',
		'name'=>'Chiềng Khoang',
		'type'=>'Xã',
		'location'=>'21 33 26N, 103 41 00E',
		'district_id'=>'118'
		] );
					
		Ward::create( [
		'ward_id'=>'03721',
		'name'=>'Thuận Châu',
		'type'=>'Thị Trấn',
		'location'=>'21 25 43N, 103 40 45E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03724',
		'name'=>'Phỏng Lái',
		'type'=>'Xã',
		'location'=>'21 34 41N, 103 35 38E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03727',
		'name'=>'Mường É',
		'type'=>'Xã',
		'location'=>'21 30 40N, 103 32 43E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03730',
		'name'=>'Chiềng Pha',
		'type'=>'Xã',
		'location'=>'21 30 29N, 103 38 22E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03733',
		'name'=>'Chiềng La',
		'type'=>'Xã',
		'location'=>'21 30 44N, 103 41 37E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03736',
		'name'=>'Chiềng Ngàm',
		'type'=>'Xã',
		'location'=>'21 30 11N, 103 45 37E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03739',
		'name'=>'Liệp Tè',
		'type'=>'Xã',
		'location'=>'21 30 48N, 103 53 39E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03742',
		'name'=>'É Tòng',
		'type'=>'Xã',
		'location'=>'21 28 29N, 103 29 06E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03745',
		'name'=>'Phỏng Lập',
		'type'=>'Xã',
		'location'=>'21 28 17N, 103 35 40E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03748',
		'name'=>'Phỏng Lặng',
		'type'=>'Xã',
		'location'=>'21 27 38N, 103 39 55E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03751',
		'name'=>'Chiềng Ly',
		'type'=>'Xã',
		'location'=>'21 27 43N, 103 42 07E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03754',
		'name'=>'Nong Lay',
		'type'=>'Xã',
		'location'=>'21 29 10N, 103 44 09E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03757',
		'name'=>'Mường Khiêng',
		'type'=>'Xã',
		'location'=>'21 29 11N, 103 53 07E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03760',
		'name'=>'Mường Bám',
		'type'=>'Xã',
		'location'=>'21 22 34N, 103 23 06E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03763',
		'name'=>'Long Hẹ',
		'type'=>'Xã',
		'location'=>'21 25 10N, 103 30 20E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03766',
		'name'=>'Chiềng Bôm',
		'type'=>'Xã',
		'location'=>'21 24 24N, 103 37 47E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03769',
		'name'=>'Thôn Mòn',
		'type'=>'Xã',
		'location'=>'21 25 11N, 103 43 12E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03772',
		'name'=>'Tòng Lệnh',
		'type'=>'Xã',
		'location'=>'21 26 20N, 103 44 04E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03775',
		'name'=>'Tòng Cọ',
		'type'=>'Xã',
		'location'=>'21 25 56N, 103 47 12E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03778',
		'name'=>'Bó Mười',
		'type'=>'Xã',
		'location'=>'21 27 48N, 103 49 25E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03781',
		'name'=>'Co Mạ',
		'type'=>'Xã',
		'location'=>'21 20 09N, 103 31 12E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03784',
		'name'=>'Púng Tra',
		'type'=>'Xã',
		'location'=>'21 23 10N, 103 41 09E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03787',
		'name'=>'Chiềng Pấc',
		'type'=>'Xã',
		'location'=>'21 23 59N, 103 46 02E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03790',
		'name'=>'Nậm Lầu',
		'type'=>'Xã',
		'location'=>'21 19 18N, 103 42 18E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03793',
		'name'=>'Bon Phặng',
		'type'=>'Xã',
		'location'=>'21 22 00N, 103 46 23E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03796',
		'name'=>'Co Tòng',
		'type'=>'Xã',
		'location'=>'21 18 08N, 103 30 34E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03799',
		'name'=>'Muội Nọi',
		'type'=>'Xã',
		'location'=>'21 19 48N, 103 48 17E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03802',
		'name'=>'Pá Lông',
		'type'=>'Xã',
		'location'=>'21 15 06N, 103 32 27E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03805',
		'name'=>'Bản Lầm',
		'type'=>'Xã',
		'location'=>'21 15 26N, 103 47 23E',
		'district_id'=>'119'
		] );
					
		Ward::create( [
		'ward_id'=>'03808',
		'name'=>'Ít Ong',
		'type'=>'Thị Trấn',
		'location'=>'21 30 36N, 104 00 09E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03811',
		'name'=>'Nậm Giôn',
		'type'=>'Xã',
		'location'=>'21 38 29N, 103 49 23E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03814',
		'name'=>'Chiềng Lao',
		'type'=>'Xã',
		'location'=>'21 38 36N, 103 53 31E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03817',
		'name'=>'Hua Trai',
		'type'=>'Xã',
		'location'=>'21 37 26N, 104 00 52E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03820',
		'name'=>'Ngọc Chiến',
		'type'=>'Xã',
		'location'=>'21 35 48N, 104 10 48E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03823',
		'name'=>'Mường Trai',
		'type'=>'Xã',
		'location'=>'21 34 16N, 103 56 00E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03826',
		'name'=>'Nậm Păm',
		'type'=>'Xã',
		'location'=>'21 33 59N, 104 04 43E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03829',
		'name'=>'Chiềng Muôn',
		'type'=>'Xã',
		'location'=>'21 31 27N, 104 07 52E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03832',
		'name'=>'Chiềng Ân',
		'type'=>'Xã',
		'location'=>'21 30 14N, 104 12 56E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03835',
		'name'=>'Pi Toong',
		'type'=>'Xã',
		'location'=>'21 32 53N, 103 59 19E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03838',
		'name'=>'Chiềng Công',
		'type'=>'Xã',
		'location'=>'21 26 46N, 104 13 49E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03841',
		'name'=>'Tạ Bú',
		'type'=>'Xã',
		'location'=>'21 26 37N, 104 02 48E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03844',
		'name'=>'Chiềng San',
		'type'=>'Xã',
		'location'=>'21 28 41N, 104 04 36E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03847',
		'name'=>'Mường Bú',
		'type'=>'Xã',
		'location'=>'21 24 39N, 103 59 46E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03850',
		'name'=>'Chiềng Hoa',
		'type'=>'Xã',
		'location'=>'21 25 13N, 104 08 37E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03853',
		'name'=>'Mường Chùm',
		'type'=>'Xã',
		'location'=>'21 21 28N, 104 06 28E',
		'district_id'=>'120'
		] );
					
		Ward::create( [
		'ward_id'=>'03856',
		'name'=>'Bắc Yên',
		'type'=>'Thị Trấn',
		'location'=>'21 14 30N, 104 26 31E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03859',
		'name'=>'Phiêng Ban',
		'type'=>'Xã',
		'location'=>'21 14 35N, 104 23 52E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03862',
		'name'=>'Hang Chú',
		'type'=>'Xã',
		'location'=>'21 22 08N, 104 17 22E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03865',
		'name'=>'Xín Vàng',
		'type'=>'Xã',
		'location'=>'21 20 17N, 104 21 22E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03868',
		'name'=>'Tà Xùa',
		'type'=>'Xã',
		'location'=>'21 19 37N, 104 29 25E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03869',
		'name'=>'Háng Đồng',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03871',
		'name'=>'Bắc Ngà',
		'type'=>'Xã',
		'location'=>'21 20 03N, 104 12 54E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03874',
		'name'=>'Làng Chếu',
		'type'=>'Xã',
		'location'=>'21 17 05N, 104 22 10E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03877',
		'name'=>'Chim Vàn',
		'type'=>'Xã',
		'location'=>'21 15 47N, 104 17 48E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03880',
		'name'=>'Mường Khoa',
		'type'=>'Xã',
		'location'=>'21 11 24N, 104 17 23E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03883',
		'name'=>'Song Pe',
		'type'=>'Xã',
		'location'=>'21 10 09N, 104 25 56E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03886',
		'name'=>'Hồng Ngài',
		'type'=>'Xã',
		'location'=>'21 10 01N, 104 28 38E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03889',
		'name'=>'Tạ Khoa',
		'type'=>'Xã',
		'location'=>'21 09 16N, 104 22 44E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03890',
		'name'=>'Hua Nhàn',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03892',
		'name'=>'Phiêng Kôn',
		'type'=>'Xã',
		'location'=>'21 05 07N, 104 25 46E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03895',
		'name'=>'Chiềng Sại',
		'type'=>'Xã',
		'location'=>'21 04 11N, 104 30 24E',
		'district_id'=>'121'
		] );
					
		Ward::create( [
		'ward_id'=>'03898',
		'name'=>'Phù Yên',
		'type'=>'Thị Trấn',
		'location'=>'21 15 51N, 104 38 37E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03901',
		'name'=>'Suối Tọ',
		'type'=>'Xã',
		'location'=>'21 19 21N, 104 35 02E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03904',
		'name'=>'Mường Thải',
		'type'=>'Xã',
		'location'=>'21 20 46N, 104 41 30E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03907',
		'name'=>'Mường Cơi',
		'type'=>'Xã',
		'location'=>'21 19 11N, 104 45 20E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03910',
		'name'=>'Quang Huy',
		'type'=>'Xã',
		'location'=>'21 18 10N, 104 38 43E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03913',
		'name'=>'Huy Bắc',
		'type'=>'Xã',
		'location'=>'21 15 45N, 104 36 14E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03916',
		'name'=>'Huy Thượng',
		'type'=>'Xã',
		'location'=>'21 16 41N, 104 41 34E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03919',
		'name'=>'Tân Lang',
		'type'=>'Xã',
		'location'=>'21 16 10N, 104 46 11E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03922',
		'name'=>'Gia Phù',
		'type'=>'Xã',
		'location'=>'21 12 21N, 104 34 28E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03925',
		'name'=>'Tường Phù',
		'type'=>'Xã',
		'location'=>'21 12 38N, 104 36 52E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03928',
		'name'=>'Huy Hạ',
		'type'=>'Xã',
		'location'=>'21 13 46N, 104 38 45E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03931',
		'name'=>'Huy Tân',
		'type'=>'Xã',
		'location'=>'21 14 36N, 104 41 17E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03934',
		'name'=>'Mường Lang',
		'type'=>'Xã',
		'location'=>'21 14 22N, 104 47 35E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03937',
		'name'=>'Suối Bau',
		'type'=>'Xã',
		'location'=>'21 11 20N, 104 32 28E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03940',
		'name'=>'Huy Tường',
		'type'=>'Xã',
		'location'=>'21 11 55N, 104 40 16E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03943',
		'name'=>'Mường Do',
		'type'=>'Xã',
		'location'=>'21 11 45N, 104 47 02E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03946',
		'name'=>'Sập Xa',
		'type'=>'Xã',
		'location'=>'21 09 23N, 104 32 14E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03949',
		'name'=>'Tường Thượng',
		'type'=>'Xã',
		'location'=>'21 10 35N, 104 37 49E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03952',
		'name'=>'Tường Tiến',
		'type'=>'Xã',
		'location'=>'21 09 03N, 104 40 29E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03955',
		'name'=>'Tường Phong',
		'type'=>'Xã',
		'location'=>'21 08 23N, 104 42 17E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03958',
		'name'=>'Tường Hạ',
		'type'=>'Xã',
		'location'=>'21 08 34N, 104 38 10E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03961',
		'name'=>'Kim Bon',
		'type'=>'Xã',
		'location'=>'21 07 21N, 104 36 52E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03964',
		'name'=>'Mường Bang',
		'type'=>'Xã',
		'location'=>'21 07 02N, 104 49 07E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03967',
		'name'=>'Đá Đỏ',
		'type'=>'Xã',
		'location'=>'21 05 12N, 104 33 48E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03970',
		'name'=>'Tân Phong',
		'type'=>'Xã',
		'location'=>'21 05 29N, 104 43 06E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03973',
		'name'=>'Nam Phong',
		'type'=>'Xã',
		'location'=>'21 04 19N, 104 47 59E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03976',
		'name'=>'Bắc Phong',
		'type'=>'Xã',
		'location'=>'21 03 40N, 104 39 08E',
		'district_id'=>'122'
		] );
					
		Ward::create( [
		'ward_id'=>'03979',
		'name'=>'Mộc Châu',
		'type'=>'Thị Trấn',
		'location'=>'20 51 12N, 104 37 01E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'03982',
		'name'=>'Nt Mộc Châu',
		'type'=>'Thị Trấn',
		'location'=>'20 52 18N, 104 42 28E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'03985',
		'name'=>'Chiềng Sơn',
		'type'=>'Xã',
		'location'=>'20 43 49N, 104 34 35E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'03988',
		'name'=>'Tân Hợp',
		'type'=>'Xã',
		'location'=>'21 00 55N, 104 37 07E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'03991',
		'name'=>'Qui Hướng',
		'type'=>'Xã',
		'location'=>'21 00 36N, 104 44 42E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'03994',
		'name'=>'Suối Bàng',
		'type'=>'Xã',
		'location'=>'20 58 53N, 104 48 30E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'03997',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'20 57 14N, 104 35 12E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04000',
		'name'=>'Nà Mường',
		'type'=>'Xã',
		'location'=>'20 57 06N, 104 43 32E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04003',
		'name'=>'Tà Lai',
		'type'=>'Xã',
		'location'=>'20 57 37N, 104 40 50E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04006',
		'name'=>'Song Khủa',
		'type'=>'Xã',
		'location'=>'20 56 32N, 104 53 20E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04009',
		'name'=>'Liên Hoà',
		'type'=>'Xã',
		'location'=>'20 59  28N, 104 52 31E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04012',
		'name'=>'Chiềng Hắc',
		'type'=>'Xã',
		'location'=>'20 54 46N, 104 31 48E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04015',
		'name'=>'Hua Păng',
		'type'=>'Xã',
		'location'=>'20 54 30N, 104 46 20E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04018',
		'name'=>'Tô Múa',
		'type'=>'Xã',
		'location'=>'20 53 33N, 104 50 52E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04021',
		'name'=>'Mường Tè',
		'type'=>'Xã',
		'location'=>'20 53 41N, 104 54 57E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04024',
		'name'=>'Chiềng Khừa',
		'type'=>'Xã',
		'location'=>'20 49 57N, 104 28 36E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04027',
		'name'=>'Mường Sang',
		'type'=>'Xã',
		'location'=>'20 48 56N, 104 35 19E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04030',
		'name'=>'Đông Sang',
		'type'=>'Xã',
		'location'=>'20 50 15N, 104 38 13E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04033',
		'name'=>'Phiêng Luông',
		'type'=>'Xã',
		'location'=>'20 50 21N, 104 43 11E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04036',
		'name'=>'Chiềng Khoa',
		'type'=>'Xã',
		'location'=>'20 49 50N, 104 49 18E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04039',
		'name'=>'Mường Men',
		'type'=>'Xã',
		'location'=>'20 49 47N, 104 54 47E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04042',
		'name'=>'Quang Minh',
		'type'=>'Xã',
		'location'=>'20 51 47N, 104 57 23E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04045',
		'name'=>'Lóng Sập',
		'type'=>'Xã',
		'location'=>'20 46 42N, 104 31 38E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04048',
		'name'=>'Vân Hồ',
		'type'=>'Xã',
		'location'=>'20 47 09N, 104 44 13E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04051',
		'name'=>'Lóng Luông',
		'type'=>'Xã',
		'location'=>'20 46 34N, 104 51 49E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04054',
		'name'=>'Chiềng Yên',
		'type'=>'Xã',
		'location'=>'20 46 16N, 104 57 36E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04056',
		'name'=>'Chiềng Xuân',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04057',
		'name'=>'Xuân Nha',
		'type'=>'Xã',
		'location'=>'20 40 21N, 104 44 32E',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04058',
		'name'=>'Tân Xuân',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'123'
		] );
					
		Ward::create( [
		'ward_id'=>'04060',
		'name'=>'Yên Châu',
		'type'=>'Thị Trấn',
		'location'=>'21 02 49N, 104 17 52E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04063',
		'name'=>'Chiềng Đông',
		'type'=>'Xã',
		'location'=>'21 08 20N, 104 15 10E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04066',
		'name'=>'Sập Vạt',
		'type'=>'Xã',
		'location'=>'21 04 56N, 104 20 26E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04069',
		'name'=>'Chiềng Sàng',
		'type'=>'Xã',
		'location'=>'21 04 19N, 104 14 09E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04072',
		'name'=>'Chiềng Pằn',
		'type'=>'Xã',
		'location'=>'21 03 24N, 104 15 53E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04075',
		'name'=>'Viêng Lán',
		'type'=>'Xã',
		'location'=>'21 02 56N, 104 17 09E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04078',
		'name'=>'Chiềng Hặc',
		'type'=>'Xã',
		'location'=>'21 00 56N, 104 23 42E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04081',
		'name'=>'Mường Lựm',
		'type'=>'Xã',
		'location'=>'21 00 03N, 104 29 36E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04084',
		'name'=>'Chiềng On',
		'type'=>'Xã',
		'location'=>'20 58 42N, 104 10 41E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04087',
		'name'=>'Yên Sơn',
		'type'=>'Xã',
		'location'=>'21 01 57N, 104 11 51E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04090',
		'name'=>'Chiềng Khoi',
		'type'=>'Xã',
		'location'=>'21 00 28N, 104 18 33E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04093',
		'name'=>'Tú Nang',
		'type'=>'Xã',
		'location'=>'20 56 44N, 104 26 20E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04096',
		'name'=>'Lóng Phiêng',
		'type'=>'Xã',
		'location'=>'20 55 17N, 104 22 18E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04099',
		'name'=>'Phiêng Khoài',
		'type'=>'Xã',
		'location'=>'20 57 31N, 104 16 53E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04102',
		'name'=>'Chiềng Tương',
		'type'=>'Xã',
		'location'=>'20 51 04N, 104 22 54E',
		'district_id'=>'124'
		] );
					
		Ward::create( [
		'ward_id'=>'04105',
		'name'=>'Hát Lót',
		'type'=>'Thị Trấn',
		'location'=>'21 11 35N, 104 06 07E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04108',
		'name'=>'Chiềng Sung',
		'type'=>'Xã',
		'location'=>'21 19 36N, 104 04 46E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04111',
		'name'=>'Mường Bằng',
		'type'=>'Xã',
		'location'=>'21 18 10N, 104 02 16E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04114',
		'name'=>'Chiềng Chăn',
		'type'=>'Xã',
		'location'=>'21 18 03N, 104 09 49E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04117',
		'name'=>'Mương Tranh',
		'type'=>'Xã',
		'location'=>'21 14 15N, 103 50 48E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04120',
		'name'=>'Chiềng Ban',
		'type'=>'Xã',
		'location'=>'21 14 20N, 103 55 57E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04123',
		'name'=>'Chiềng Mung',
		'type'=>'Xã',
		'location'=>'21 12 34N, 103 59 54E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04126',
		'name'=>'Mường Bon',
		'type'=>'Xã',
		'location'=>'21 14 27N, 104 04 18E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04129',
		'name'=>'Chiềng Chung',
		'type'=>'Xã',
		'location'=>'21 12 22N, 103 52 54E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04132',
		'name'=>'Chiềng Mai',
		'type'=>'Xã',
		'location'=>'21 12 24N, 103 59 32E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04135',
		'name'=>'Hát Lót',
		'type'=>'Xã',
		'location'=>'21 10 43N, 104 04 09E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04136',
		'name'=>'Nà Bó',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04138',
		'name'=>'Cò Nòi',
		'type'=>'Xã',
		'location'=>'21 08 06N, 104 09 49E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04141',
		'name'=>'Chiềng Nơi',
		'type'=>'Xã',
		'location'=>'21 11 11N, 103 46 56E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04144',
		'name'=>'Phiêng Cằm',
		'type'=>'Xã',
		'location'=>'21 06 16N, 103 52 50E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04147',
		'name'=>'Chiềng Dong',
		'type'=>'Xã',
		'location'=>'21 10 14N, 103 56 25E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04150',
		'name'=>'Chiềng Kheo',
		'type'=>'Xã',
		'location'=>'21 09 13N, 103 58 50E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04153',
		'name'=>'Chiềng Ve',
		'type'=>'Xã',
		'location'=>'21 08 45N, 104 01 31E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04156',
		'name'=>'Chiềng Lương',
		'type'=>'Xã',
		'location'=>'21 04 56N, 104 07 17E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04159',
		'name'=>'Phiêng Pằn',
		'type'=>'Xã',
		'location'=>'21 01 59N, 104 04 00E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04162',
		'name'=>'Nà Ơt',
		'type'=>'Xã',
		'location'=>'21 04 05N, 103 58 28E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04165',
		'name'=>'Tà Hộc',
		'type'=>'Xã',
		'location'=>'21 14 47N, 104 13 07E',
		'district_id'=>'125'
		] );
					
		Ward::create( [
		'ward_id'=>'04168',
		'name'=>'Sông Mã',
		'type'=>'Thị Trấn',
		'location'=>'21 03 09N, 103 45 16E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04171',
		'name'=>'Bó Sinh',
		'type'=>'Xã',
		'location'=>'21 17 02N, 103 28 49E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04174',
		'name'=>'Pú Pẩu',
		'type'=>'Xã',
		'location'=>'21 15 18N, 103 27 03E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04177',
		'name'=>'Chiềng Phung',
		'type'=>'Xã',
		'location'=>'21 15 56N, 103 36 17E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04180',
		'name'=>'Chiềng En',
		'type'=>'Xã',
		'location'=>'21 11 56N, 103 29 46E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04183',
		'name'=>'Mường Lầm',
		'type'=>'Xã',
		'location'=>'21 11 33N, 103 34 00E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04186',
		'name'=>'Nậm Ty',
		'type'=>'Xã',
		'location'=>'21 12 00N, 103 40 33E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04189',
		'name'=>'Đứa Mòn',
		'type'=>'Xã',
		'location'=>'21 06 45N, 103 28 20E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04192',
		'name'=>'Yên Hưng',
		'type'=>'Xã',
		'location'=>'21 07 56N, 103 33 29E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04195',
		'name'=>'Chiềng Sơ',
		'type'=>'Xã',
		'location'=>'21 07 30N, 103 38 48E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04198',
		'name'=>'Nà Ngựu',
		'type'=>'Xã',
		'location'=>'21 05 20N, 103 44 01E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04201',
		'name'=>'Nậm Mằn',
		'type'=>'Xã',
		'location'=>'23 03 41N, 103 35 11E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04204',
		'name'=>'Chiềng Khoong',
		'type'=>'Xã',
		'location'=>'21 00 43N, 103 48 07E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04207',
		'name'=>'Chiềng Cang',
		'type'=>'Xã',
		'location'=>'20 59 56N, 103 53 28E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04210',
		'name'=>'Huổi Một',
		'type'=>'Xã',
		'location'=>'21 00 38N, 103 39 42E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04213',
		'name'=>'Mường Sai',
		'type'=>'Xã',
		'location'=>'20 59 06N, 104 00 35E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04216',
		'name'=>'Mường Cai',
		'type'=>'Xã',
		'location'=>'20 54 42N, 103 44 11E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04219',
		'name'=>'Mường Hung',
		'type'=>'Xã',
		'location'=>'20 55 11N, 103 50 51E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04222',
		'name'=>'Chiềng Khương',
		'type'=>'Xã',
		'location'=>'20 56 07N, 103 58 35E',
		'district_id'=>'126'
		] );
					
		Ward::create( [
		'ward_id'=>'04225',
		'name'=>'Sam Kha',
		'type'=>'Xã',
		'location'=>'21 03 31N, 103 22 17E',
		'district_id'=>'127'
		] );
					
		Ward::create( [
		'ward_id'=>'04228',
		'name'=>'Púng Bánh',
		'type'=>'Xã',
		'location'=>'20 59 49N, 103 29 10E',
		'district_id'=>'127'
		] );
					
		Ward::create( [
		'ward_id'=>'04231',
		'name'=>'Xốp Cộp',
		'type'=>'Xã',
		'location'=>'20 57 21N, 103 37 09E',
		'district_id'=>'127'
		] );
					
		Ward::create( [
		'ward_id'=>'04234',
		'name'=>'Dồm Cang',
		'type'=>'Xã',
		'location'=>'20 57 36N, 103 34 09E',
		'district_id'=>'127'
		] );
					
		Ward::create( [
		'ward_id'=>'04237',
		'name'=>'Nậm Lạnh',
		'type'=>'Xã',
		'location'=>'20 51 42N, 103 30 46E',
		'district_id'=>'127'
		] );
					
		Ward::create( [
		'ward_id'=>'04240',
		'name'=>'Mường Lèo',
		'type'=>'Xã',
		'location'=>'20 53 55N, 103 20 11E',
		'district_id'=>'127'
		] );
					
		Ward::create( [
		'ward_id'=>'04243',
		'name'=>'Mường Và',
		'type'=>'Xã',
		'location'=>'20 50 41N, 103 36 27E',
		'district_id'=>'127'
		] );
					
		Ward::create( [
		'ward_id'=>'04246',
		'name'=>'Mường Lạn',
		'type'=>'Xã',
		'location'=>'20 45 40N, 103 42 15E',
		'district_id'=>'127'
		] );
					
		Ward::create( [
		'ward_id'=>'04249',
		'name'=>'Yên Thịnh',
		'type'=>'Phường',
		'location'=>'21 43 59N, 104 55 31E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04252',
		'name'=>'Yên Ninh',
		'type'=>'Phường',
		'location'=>'21 42 54N, 104 53 52E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04255',
		'name'=>'Minh Tân',
		'type'=>'Phường',
		'location'=>'21 43 26N, 104 53 50E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04258',
		'name'=>'Nguyễn Thái Học',
		'type'=>'Phường',
		'location'=>'21 42 42N, 104 52 35E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04261',
		'name'=>'Đồng Tâm',
		'type'=>'Phường',
		'location'=>'21 43 16N, 104 54 49E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04264',
		'name'=>'Nguyễn Phúc',
		'type'=>'Phường',
		'location'=>'21 42 32N, 104 52 03E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04267',
		'name'=>'Hồng Hà',
		'type'=>'Phường',
		'location'=>'21 42 06N, 104 52 28E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04270',
		'name'=>'Minh Bảo',
		'type'=>'Xã',
		'location'=>'21 45 44N, 104 54 19E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04273',
		'name'=>'Nam Cường',
		'type'=>'Xã',
		'location'=>'21 43 40N, 104 52 25E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04276',
		'name'=>'Tuy Lộc',
		'type'=>'Xã',
		'location'=>'21 43 32N, 104 51 03E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04279',
		'name'=>'Tân Thịnh',
		'type'=>'Xã',
		'location'=>'21 42 45N, 104 56 05E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04282',
		'name'=>'Pú Trạng',
		'type'=>'Phường',
		'location'=>'21 36 06N, 104 29 21E',
		'district_id'=>'133'
		] );
					
		Ward::create( [
		'ward_id'=>'04285',
		'name'=>'Trung Tâm',
		'type'=>'Phường',
		'location'=>'21 36 13N, 104 30 38E',
		'district_id'=>'133'
		] );
					
		Ward::create( [
		'ward_id'=>'04288',
		'name'=>'Tân An',
		'type'=>'Phường',
		'location'=>'21 35 30N, 104 30 19E',
		'district_id'=>'133'
		] );
					
		Ward::create( [
		'ward_id'=>'04291',
		'name'=>'Cầu Thia',
		'type'=>'Phường',
		'location'=>'21 35 15N, 104 31 02E',
		'district_id'=>'133'
		] );
					
		Ward::create( [
		'ward_id'=>'04294',
		'name'=>'Nghĩa Lợi',
		'type'=>'Xã',
		'location'=>'21 36 45N, 104 30 44E',
		'district_id'=>'133'
		] );
					
		Ward::create( [
		'ward_id'=>'04297',
		'name'=>'Nghĩa Phúc',
		'type'=>'Xã',
		'location'=>'21 37 13N, 104 29 39E',
		'district_id'=>'133'
		] );
					
		Ward::create( [
		'ward_id'=>'04300',
		'name'=>'Nghĩa An',
		'type'=>'Xã',
		'location'=>'21 34 52N, 104 29 00E',
		'district_id'=>'133'
		] );
					
		Ward::create( [
		'ward_id'=>'04303',
		'name'=>'Yên Thế',
		'type'=>'Thị Trấn',
		'location'=>'22 05 55N, 104 45 52E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04306',
		'name'=>'Tân Phượng',
		'type'=>'Xã',
		'location'=>'22 15 20N, 104 37 12E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04309',
		'name'=>'Lâm Thượng',
		'type'=>'Xã',
		'location'=>'22 13 05N, 104 40 36E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04312',
		'name'=>'Khánh Thiện',
		'type'=>'Xã',
		'location'=>'22 14 03N, 104 42 04E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04315',
		'name'=>'Minh Chuẩn',
		'type'=>'Xã',
		'location'=>'22 10 48N, 104 38 09E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04318',
		'name'=>'Mai Sơn',
		'type'=>'Xã',
		'location'=>'12 10 47N, 104 43 14E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04321',
		'name'=>'Khai Trung',
		'type'=>'Xã',
		'location'=>'22 10 39N, 104 40 20E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04324',
		'name'=>'Mường Lai',
		'type'=>'Xã',
		'location'=>'22 08 57N, 104 49 10E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04327',
		'name'=>'An Lạc',
		'type'=>'Xã',
		'location'=>'22 08 38N, 104 36 47E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04330',
		'name'=>'Minh Xuân',
		'type'=>'Xã',
		'location'=>'22 09 01N, 104 46 29E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04333',
		'name'=>'Tô Mậu',
		'type'=>'Xã',
		'location'=>'22 08 13N, 104 39 42E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04336',
		'name'=>'Tân Lĩnh',
		'type'=>'Xã',
		'location'=>'22 07 35N, 104 43 11E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04339',
		'name'=>'Yên Thắng',
		'type'=>'Xã',
		'location'=>'22 06 40N, 104 44 50E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04342',
		'name'=>'Khánh Hoà',
		'type'=>'Xã',
		'location'=>'22 05 02N, 104 36 54E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04345',
		'name'=>'Vĩnh Lạc',
		'type'=>'Xã',
		'location'=>'22 05 50N, 104 50 53E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04348',
		'name'=>'Liễu Đô',
		'type'=>'Xã',
		'location'=>'22 04 57N, 104 48 08E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04351',
		'name'=>'Động Quan',
		'type'=>'Xã',
		'location'=>'22 04 47N, 104 41 13E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04354',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'22 03 09N, 104 45 21E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04357',
		'name'=>'Minh Tiến',
		'type'=>'Xã',
		'location'=>'22 02 57N, 104 50 17E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04360',
		'name'=>'Trúc Lâu',
		'type'=>'Xã',
		'location'=>'22 02 46N, 104 38 37E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04363',
		'name'=>'Phúc Lợi',
		'type'=>'Xã',
		'location'=>'22 00 38N, 104 41 59E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04366',
		'name'=>'Phan Thanh',
		'type'=>'Xã',
		'location'=>'21 59 26N, 104 47 52E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04369',
		'name'=>'An Phú',
		'type'=>'Xã',
		'location'=>'21 58 58N, 104 50 09E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04372',
		'name'=>'Trung Tâm',
		'type'=>'Xã',
		'location'=>'21 58 19N, 104 45 06E',
		'district_id'=>'135'
		] );
					
		Ward::create( [
		'ward_id'=>'04375',
		'name'=>'Mậu A',
		'type'=>'Thị Trấn',
		'location'=>'21 52 41N, 104 41 44E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04378',
		'name'=>'Lang Thíp',
		'type'=>'Xã',
		'location'=>'22 08 39N, 104 26 01E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04381',
		'name'=>'Lâm Giang',
		'type'=>'Xã',
		'location'=>'22 04 47N, 104 31 16E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04384',
		'name'=>'Châu Quế Thượng',
		'type'=>'Xã',
		'location'=>'22 02 54N, 104 25 10E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04387',
		'name'=>'Châu Quế Hạ',
		'type'=>'Xã',
		'location'=>'22 05 35N, 104 29 14E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04390',
		'name'=>'An Bình',
		'type'=>'Xã',
		'location'=>'22 00 23N, 104 34 29E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04393',
		'name'=>'Quang Minh',
		'type'=>'Xã',
		'location'=>'21 58 49N, 104 37 56E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04396',
		'name'=>'Đông An',
		'type'=>'Xã',
		'location'=>'21 57 41N, 104 33 27E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04399',
		'name'=>'Đông Cuông',
		'type'=>'Xã',
		'location'=>'21 57 06N, 104 36 43E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04402',
		'name'=>'Phong Dụ Hạ',
		'type'=>'Xã',
		'location'=>'21 55 39N, 104 27 21E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04405',
		'name'=>'Mậu Đông',
		'type'=>'Xã',
		'location'=>'21 55 31N, 104 39 46E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04408',
		'name'=>'Ngòi A',
		'type'=>'Xã',
		'location'=>'21 15 09N, 104 42 30E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04411',
		'name'=>'Xuân Tầm',
		'type'=>'Xã',
		'location'=>'21 52 52N, 104 31 06E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04414',
		'name'=>'Tân Hợp',
		'type'=>'Xã',
		'location'=>'21 53 14N, 104 35 09E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04417',
		'name'=>'An Thịnh',
		'type'=>'Xã',
		'location'=>'21 52 32N, 104 38 36E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04420',
		'name'=>'Yên Thái',
		'type'=>'Xã',
		'location'=>'21 53 17N, 104 45 01E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04423',
		'name'=>'Phong Dụ Thượng',
		'type'=>'Xã',
		'location'=>'21 49 27N, 104 25 39E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04426',
		'name'=>'Yên Hợp',
		'type'=>'Xã',
		'location'=>'21 50 57N, 104 41 59E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04429',
		'name'=>'Đại Sơn',
		'type'=>'Xã',
		'location'=>'21 49 17N, 104 34 35E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04432',
		'name'=>'Yên Hưng',
		'type'=>'Xã',
		'location'=>'21 51 08N, 104 44 40E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04435',
		'name'=>'Đại Phác',
		'type'=>'Xã',
		'location'=>'21 50 06N, 104 38 43E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04438',
		'name'=>'Yên Phú',
		'type'=>'Xã',
		'location'=>'21 50 16N, 104 40 22E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04441',
		'name'=>'Xuân Ái',
		'type'=>'Xã',
		'location'=>'21 49 10N, 104 43 08E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04444',
		'name'=>'Hoàng Thắng',
		'type'=>'Xã',
		'location'=>'21 47 32N, 104 44 11E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04447',
		'name'=>'Viễn Sơn',
		'type'=>'Xã',
		'location'=>'21 46 20N, 104 41 00E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04450',
		'name'=>'Mỏ Vàng',
		'type'=>'Xã',
		'location'=>'21 44 07N, 104 38 40E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04453',
		'name'=>'Nà Hẩu',
		'type'=>'Xã',
		'location'=>'21 45 47N, 104 33 40E',
		'district_id'=>'136'
		] );
					
		Ward::create( [
		'ward_id'=>'04456',
		'name'=>'Mù Cang Chải',
		'type'=>'Thị Trấn',
		'location'=>'21 50 49N, 104 05 30E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04459',
		'name'=>'Hồ Bốn',
		'type'=>'Xã',
		'location'=>'21 54 33N, 103 56 22E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04462',
		'name'=>'Nậm Có',
		'type'=>'Xã',
		'location'=>'21 51 35N, 104 18 17E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04465',
		'name'=>'Khao Mang',
		'type'=>'Xã',
		'location'=>'21 53 54N, 104 00 08E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04468',
		'name'=>'Mồ Dề',
		'type'=>'Xã',
		'location'=>'21 52 22N, 104 06 28E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04471',
		'name'=>'Chế Cu Nha',
		'type'=>'Xã',
		'location'=>'21 50 58N, 104 09 34E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04474',
		'name'=>'Lao Chải',
		'type'=>'Xã',
		'location'=>'21 49 04N, 103 59 49E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04477',
		'name'=>'Kim Nọi',
		'type'=>'Xã',
		'location'=>'21 49 29N, 104 04 45E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04480',
		'name'=>'Cao Phạ',
		'type'=>'Xã',
		'location'=>'21 46 54N, 104 14 32E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04483',
		'name'=>'La Pán Tẩn',
		'type'=>'Xã',
		'location'=>'21 48 05N, 104 10 39E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04486',
		'name'=>'Dế Xu Phình',
		'type'=>'Xã',
		'location'=>'21 46 44N, 104 07 40E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04489',
		'name'=>'Chế Tạo',
		'type'=>'Xã',
		'location'=>'21 42 29N, 104 01 35E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04492',
		'name'=>'Púng Luông',
		'type'=>'Xã',
		'location'=>'21 44 38N, 104 11 35E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04495',
		'name'=>'Nậm Khắt',
		'type'=>'Xã',
		'location'=>'21 41 22N, 104 14 12E',
		'district_id'=>'137'
		] );
					
		Ward::create( [
		'ward_id'=>'04498',
		'name'=>'Cổ Phúc',
		'type'=>'Thị Trấn',
		'location'=>'21 45 50N, 104 49 14E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04501',
		'name'=>'Tân Đồng',
		'type'=>'Xã',
		'location'=>'21 51 05N, 104 47 46E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04504',
		'name'=>'Báo Đáp',
		'type'=>'Xã',
		'location'=>'21 49 25N, 104 45 59E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04507',
		'name'=>'Đào Thịnh',
		'type'=>'Xã',
		'location'=>'21 48 37N, 104 48 09E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04510',
		'name'=>'Việt Thành',
		'type'=>'Xã',
		'location'=>'21 47 33N, 104 48 55E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04513',
		'name'=>'Hòa Cuông',
		'type'=>'Xã',
		'location'=>'21 47 46N, 104 50 44E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04516',
		'name'=>'Minh Quán',
		'type'=>'Xã',
		'location'=>'21 46 48N, 104 51 30E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04519',
		'name'=>'Quy Mông',
		'type'=>'Xã',
		'location'=>'21 46 16N, 104 46 44E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04522',
		'name'=>'Cường Thịnh',
		'type'=>'Xã',
		'location'=>'21 45 28N, 104 52 29E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04525',
		'name'=>'Kiên Thành',
		'type'=>'Xã',
		'location'=>'21 42 55N, 104 43 47E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04528',
		'name'=>'Nga Quán',
		'type'=>'Xã',
		'location'=>'21 44 49N, 104 50 37E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04531',
		'name'=>'Y Can',
		'type'=>'Xã',
		'location'=>'21 43 04N, 104 47 35E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04534',
		'name'=>'Minh Tiến',
		'type'=>'Xã',
		'location'=>'21 43 36N, 104 49 33E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04537',
		'name'=>'Lương Thịnh',
		'type'=>'Xã',
		'location'=>'21 39 58N, 104 46 17E',
		'district_id'=>'138'
		] );
					
		Ward::create( [
		'ward_id'=>'04540',
		'name'=>'Âu Lâu',
		'type'=>'Xã',
		'location'=>'21 41 31N, 104 50 31E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04543',
		'name'=>'Giới Phiên',
		'type'=>'Xã',
		'location'=>'21 41 43N, 104 53 25E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04546',
		'name'=>'Hợp Minh',
		'type'=>'Xã',
		'location'=>'21 41 02N, 104 51 52E',
		'district_id'=>'132'
		] );
					
		Ward::create( [
		'ward_id'=>'04549',
		'name'=>'Văn Tiến',
		'type'=>'Xã',
		'location'=>'21 40 39N, 104 56 11E',
		'district_id'=>'132'
		] );


		//----------------------
		Ward::create( [
		'ward_id'=>'04552',
		'name'=>'Phúc Lộc',
		'type'=>'Xã',
		'location'=>'21 40 25N, 104 54 46E',
		'district_id'=>'132'
		] );
		
		Ward::create( [
		'ward_id'=>'04555',
		'name'=>'Văn Lãng',
		'type'=>'Xã',
		'location'=>'21 40 06N, 104 57 43E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04558',
		'name'=>'Văn Phú',
		'type'=>'Xã',
		'location'=>'21 41 27N, 104 55 00E',
		'district_id'=>'132'
		] );
		
		Ward::create( [
		'ward_id'=>'04561',
		'name'=>'Bảo Hưng',
		'type'=>'Xã',
		'location'=>'21 40 09N, 104 53 40E',
		'district_id'=>'138'
		] );
		
		Ward::create( [
		'ward_id'=>'04564',
		'name'=>'Việt Cường',
		'type'=>'Xã',
		'location'=>'21 37 53N, 104 50 57E',
		'district_id'=>'138'
		] );
		
		Ward::create( [
		'ward_id'=>'04567',
		'name'=>'Minh Quân',
		'type'=>'Xã',
		'location'=>'21 38 12N, 104 54 08E',
		'district_id'=>'138'
		] );
		
		Ward::create( [
		'ward_id'=>'04570',
		'name'=>'Hồng Ca',
		'type'=>'Xã',
		'location'=>'21 35 56N, 104 41 48E',
		'district_id'=>'138'
		] );
		
		Ward::create( [
		'ward_id'=>'04573',
		'name'=>'Hưng Thịnh',
		'type'=>'Xã',
		'location'=>'21 35 46N, 104 47 10E',
		'district_id'=>'138'
		] );
		
		Ward::create( [
		'ward_id'=>'04576',
		'name'=>'Hưng Khánh',
		'type'=>'Xã',
		'location'=>'21 34 26N, 104 45 15E',
		'district_id'=>'138'
		] );
		
		Ward::create( [
		'ward_id'=>'04579',
		'name'=>'Việt Hồng',
		'type'=>'Xã',
		'location'=>'21 33 55N, 104 49 57E',
		'district_id'=>'138'
		] );
		
		Ward::create( [
		'ward_id'=>'04582',
		'name'=>'Vân Hội',
		'type'=>'Xã',
		'location'=>'21 34 58N, 104 52 45E',
		'district_id'=>'138'
		] );
		
		Ward::create( [
		'ward_id'=>'04585',
		'name'=>'Trạm Tấu',
		'type'=>'Thị Trấn',
		'location'=>'21 27 41N, 104 22 42E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04588',
		'name'=>'Túc Đán',
		'type'=>'Xã',
		'location'=>'21 36 32N, 104 22 16E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04591',
		'name'=>'Pá Lau',
		'type'=>'Xã',
		'location'=>'21 33 11N, 104 23 28E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04594',
		'name'=>'Xà Hồ',
		'type'=>'Xã',
		'location'=>'21 31 17N, 104 20 57E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04597',
		'name'=>'Phình Hồ',
		'type'=>'Xã',
		'location'=>'21 31 38N, 104 33 18E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04600',
		'name'=>'Trạm Tấu',
		'type'=>'Xã',
		'location'=>'21 31 07N, 104 26 02E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04603',
		'name'=>'Tà Si Láng',
		'type'=>'Xã',
		'location'=>'21 28 14N, 104 36 10E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04606',
		'name'=>'Pá Hu',
		'type'=>'Xã',
		'location'=>'21 29 02N, 104 27 25E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04609',
		'name'=>'Làng Nhì',
		'type'=>'Xã',
		'location'=>'21 27 48N, 104 31 04E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04612',
		'name'=>'Bản Công',
		'type'=>'Xã',
		'location'=>'21 27 18N, 104 20 43E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04615',
		'name'=>'Bản Mù',
		'type'=>'Xã',
		'location'=>'21 24 53N, 104 27 18E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04618',
		'name'=>'Hát Lừu',
		'type'=>'Xã',
		'location'=>'21 28 00N, 104 23 12E',
		'district_id'=>'139'
		] );
		
		Ward::create( [
		'ward_id'=>'04621',
		'name'=>'Nông Trường Liên Sơn',
		'type'=>'Thị Trấn',
		'location'=>'21 39 08N, 104 29 26E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04624',
		'name'=>'Nông Trường Nghĩa Lộ',
		'type'=>'Thị Trấn',
		'location'=>'21 34 48N, 104 33 11E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04627',
		'name'=>'Nông Trường Trần Phú',
		'type'=>'Thị Trấn',
		'location'=>'21 27 34N, 104 45 38E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04630',
		'name'=>'Tú Lệ',
		'type'=>'Xã',
		'location'=>'21 46 53N, 104 18 04E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04633',
		'name'=>'Nậm Búng',
		'type'=>'Xã',
		'location'=>'21 43 49N, 104 20 49E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04636',
		'name'=>'Gia Hội',
		'type'=>'Xã',
		'location'=>'21 43 51N, 104 25 19E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04639',
		'name'=>'Sùng Đô',
		'type'=>'Xã',
		'location'=>'21 43 06N, 104 32 12E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04642',
		'name'=>'Nậm Mười',
		'type'=>'Xã',
		'location'=>'21 43 25N, 104 29 00E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04645',
		'name'=>'An Lương',
		'type'=>'Xã',
		'location'=>'21 40 44N, 104 36 45E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04648',
		'name'=>'Nậm Lành',
		'type'=>'Xã',
		'location'=>'21 39 45N, 104 24 54E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04651',
		'name'=>'Sơn Lương',
		'type'=>'Xã',
		'location'=>'21 40 57N, 104 29 33E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04654',
		'name'=>'Suối Quyền',
		'type'=>'Xã',
		'location'=>'21 39 24N, 104 33 03E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04657',
		'name'=>'Suối Giàng',
		'type'=>'Xã',
		'location'=>'21 37 10N, 104 35 47E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04660',
		'name'=>'Sơn A',
		'type'=>'Xã',
		'location'=>'21 38 20N, 104 29 50E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04663',
		'name'=>'Phù Nham',
		'type'=>'Xã',
		'location'=>'21 36 25N, 104 31 42E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04666',
		'name'=>'Nghĩa Sơn',
		'type'=>'Xã',
		'location'=>'21 36 28N, 104 28 09E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04669',
		'name'=>'Suối Bu',
		'type'=>'Xã',
		'location'=>'21 32 31N, 104 40 15E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04672',
		'name'=>'Sơn Thịnh',
		'type'=>'Xã',
		'location'=>'21 33 42N, 104 35 19E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04675',
		'name'=>'Thanh Lương',
		'type'=>'Xã',
		'location'=>'21 34 11N, 104 31 15E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04678',
		'name'=>'Hạnh Sơn',
		'type'=>'Xã',
		'location'=>'21 34 05N, 104 29 36E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04681',
		'name'=>'Phúc Sơn',
		'type'=>'Xã',
		'location'=>'21 32 19N, 104 29 14E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04684',
		'name'=>'Thạch Lương',
		'type'=>'Xã',
		'location'=>'21 32 34N, 104 30 39E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04687',
		'name'=>'Đại Lịch',
		'type'=>'Xã',
		'location'=>'21 32 04N, 104 48 23E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04690',
		'name'=>'Đồng Khê',
		'type'=>'Xã',
		'location'=>'21 32 03N, 104 38 12E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04693',
		'name'=>'Cát Thịnh',
		'type'=>'Xã',
		'location'=>'21 27 54N, 104 40 27E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04696',
		'name'=>'Tân Thịnh',
		'type'=>'Xã',
		'location'=>'21 30 22N, 104 45 59E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04699',
		'name'=>'Chấn Thịnh',
		'type'=>'Xã',
		'location'=>'21 29 36N, 104 50 39E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04702',
		'name'=>'Bình Thuận',
		'type'=>'Xã',
		'location'=>'21 26 16N, 104 51 48E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04705',
		'name'=>'Thượng Bằng La',
		'type'=>'Xã',
		'location'=>'21 23 47N, 104 46 19E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04708',
		'name'=>'Minh An',
		'type'=>'Xã',
		'location'=>'21 23 57N, 104 48 27E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04711',
		'name'=>'Nghĩa Tâm',
		'type'=>'Xã',
		'location'=>'21 23 41N, 104 51 02E',
		'district_id'=>'140'
		] );
		
		Ward::create( [
		'ward_id'=>'04714',
		'name'=>'Yên Bình',
		'type'=>'Thị Trấn',
		'location'=>'21 45 07N, 104 57 48E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04717',
		'name'=>'Thác Bà',
		'type'=>'Thị Trấn',
		'location'=>'21 44 40N, 105 01 59E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04720',
		'name'=>'Xuân Long',
		'type'=>'Xã',
		'location'=>'22 01 27N, 104 54 37E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04723',
		'name'=>'Tích Cốc',
		'type'=>'Xã',
		'location'=>'22 01 13N, 104 58 34E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04726',
		'name'=>'Cảm Nhân',
		'type'=>'Xã',
		'location'=>'21 58 25N, 104 58 09E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04729',
		'name'=>'Ngọc Chấn',
		'type'=>'Xã',
		'location'=>'21 57 56N, 104 54 10E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04732',
		'name'=>'Tân Nguyên',
		'type'=>'Xã',
		'location'=>'21 56 10N, 104 46 47E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04735',
		'name'=>'Phúc Ninh',
		'type'=>'Xã',
		'location'=>'21 56 01N, 104 53 41E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04738',
		'name'=>'Bảo Ái',
		'type'=>'Xã',
		'location'=>'21 54 28N, 104 49 30E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04741',
		'name'=>'Mỹ Gia',
		'type'=>'Xã',
		'location'=>'21 15 40N, 104 57 00E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04744',
		'name'=>'Xuân Lai',
		'type'=>'Xã',
		'location'=>'21 55 03N, 104 58 09E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04747',
		'name'=>'Mông Sơn',
		'type'=>'Xã',
		'location'=>'21 52 52N, 104 54 41E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04750',
		'name'=>'Cẩm Ân',
		'type'=>'Xã',
		'location'=>'21 52 30N, 104 51 59E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04753',
		'name'=>'Yên Thành',
		'type'=>'Xã',
		'location'=>'21 52 43N, 104 58 57E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04756',
		'name'=>'Tân Hương',
		'type'=>'Xã',
		'location'=>'21 49 56N, 104 54 38E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04759',
		'name'=>'Phúc An',
		'type'=>'Xã',
		'location'=>'21 50 48N, 105 01 00E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04762',
		'name'=>'Bạch Hà',
		'type'=>'Xã',
		'location'=>'21 48 54N, 105 03 58E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04765',
		'name'=>'Vũ Linh',
		'type'=>'Xã',
		'location'=>'21 48 40N, 105 00 22E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04768',
		'name'=>'Đại Đồng',
		'type'=>'Xã',
		'location'=>'21 46 34N, 104 56 14E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04771',
		'name'=>'Vĩnh Kiên',
		'type'=>'Xã',
		'location'=>'21 46 25N, 105 01 04E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04774',
		'name'=>'Yên Bình',
		'type'=>'Xã',
		'location'=>'21 46 15N, 105 03 45E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04777',
		'name'=>'Thịnh Hưng',
		'type'=>'Xã',
		'location'=>'21 42 40N, 104 59 57E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04780',
		'name'=>'Hán Đà',
		'type'=>'Xã',
		'location'=>'21 43 17N, 105 03 02E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04783',
		'name'=>'Phú Thịnh',
		'type'=>'Xã',
		'location'=>'21 42 23N, 104 57 51E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04786',
		'name'=>'Đại Minh',
		'type'=>'Xã',
		'location'=>'21 41 44N, 105 03 47E',
		'district_id'=>'141'
		] );
		
		Ward::create( [
		'ward_id'=>'04789',
		'name'=>'Hòa Bình',
		'type'=>'Phường',
		'location'=>'20 47 06N, 105 19 07E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04792',
		'name'=>'Tân Hòa',
		'type'=>'Phường',
		'location'=>'20 51 29N, 105 19 56E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04795',
		'name'=>'Thịnh Lang',
		'type'=>'Phường',
		'location'=>'20 50 29N, 105 20 49E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04798',
		'name'=>'Hữu Nghị',
		'type'=>'Phường',
		'location'=>'20 49 59N, 105 19 41E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04801',
		'name'=>'Tân Thịnh',
		'type'=>'Phường',
		'location'=>'20 49 18N, 105 19 44E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04804',
		'name'=>'Đồng Tiến',
		'type'=>'Phường',
		'location'=>'20 49 44N, 105 21 10E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04807',
		'name'=>'Phương Lâm',
		'type'=>'Phường',
		'location'=>'20 48 49N, 105 20 04E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04810',
		'name'=>'Chăm Mát',
		'type'=>'Phường',
		'location'=>'20 46 30N, 105 19 56E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04813',
		'name'=>'Yên Mông',
		'type'=>'Xã',
		'location'=>'20 54 08N, 105 19 37E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04816',
		'name'=>'Sủ Ngòi',
		'type'=>'Xã',
		'location'=>'20 49 18N, 105 21 46E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04819',
		'name'=>'Dân Chủ',
		'type'=>'Xã',
		'location'=>'20 48 01N, 105 21 32E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04822',
		'name'=>'Thái Thịnh',
		'type'=>'Xã',
		'location'=>'20 47 48N, 105 17 40E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04825',
		'name'=>'Hoà Bình',
		'type'=>'Xã',
		'location'=>'20 51 41N, 105 18 30E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04828',
		'name'=>'Thống Nhất',
		'type'=>'Xã',
		'location'=>'20 46 03N, 105 21 18E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04831',
		'name'=>'Đà Bắc',
		'type'=>'Thị Trấn',
		'location'=>'20 52 40N, 105 14 56E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04834',
		'name'=>'Đồng Nghê',
		'type'=>'Xã',
		'location'=>'21 04 19N, 104 53 15E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04837',
		'name'=>'Suối Nánh',
		'type'=>'Xã',
		'location'=>'21 02 14N, 104 54 26E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04840',
		'name'=>'Giáp Đắt',
		'type'=>'Xã',
		'location'=>'21 01 22N, 104 58 53E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04843',
		'name'=>'Mường Tuổng',
		'type'=>'Xã',
		'location'=>'20 59 58N, 104 54 00E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04846',
		'name'=>'Mường Chiềng',
		'type'=>'Xã',
		'location'=>'20 59 54N, 104 57 13E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04849',
		'name'=>'Tân Pheo',
		'type'=>'Xã',
		'location'=>'20 59 00N, 105 02 34E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04852',
		'name'=>'Đồng Chum',
		'type'=>'Xã',
		'location'=>'20 57 10N, 104 58 44E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04855',
		'name'=>'Tân Minh',
		'type'=>'Xã',
		'location'=>'20 55 14N, 105 08 41E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04858',
		'name'=>'Đoàn Kết',
		'type'=>'Xã',
		'location'=>'20 55 01N, 105 04 32E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04861',
		'name'=>'Đồng Ruộng',
		'type'=>'Xã',
		'location'=>'20 54 17N, 105 00 14E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04864',
		'name'=>'Hào Lý',
		'type'=>'Xã',
		'location'=>'20 55 31N, 105 15 51E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04867',
		'name'=>'Tu Lý',
		'type'=>'Xã',
		'location'=>'20 53 34N, 105 14 56E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04870',
		'name'=>'Trung Thành',
		'type'=>'Xã',
		'location'=>'20 52 27N, 105 06 10E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04873',
		'name'=>'Yên Hòa',
		'type'=>'Xã',
		'location'=>'20 51 10N, 105 03 01E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04876',
		'name'=>'Cao Sơn',
		'type'=>'Xã',
		'location'=>'20 50 58N, 105 09 08E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04879',
		'name'=>'Toàn Sơn',
		'type'=>'Xã',
		'location'=>'20 50 35N, 105 16 50E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04882',
		'name'=>'Tân Dân',
		'type'=>'Xã',
		'location'=>'20 49 38N, 105 02 29E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'04885',
		'name'=>'Hiền Lương',
		'type'=>'Xã',
		'location'=>'20 50 21N, 105 13 23E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04888',
		'name'=>'Tiền Phong',
		'type'=>'Xã',
		'location'=>'20 48 06N, 105 07 18E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04891',
		'name'=>'Vầy Nưa',
		'type'=>'Xã',
		'location'=>'20 47 55N, 105 13 08E',
		'district_id'=>'150'
		] );
		
		Ward::create( [
		'ward_id'=>'04894',
		'name'=>'Kỳ Sơn',
		'type'=>'Thị Trấn',
		'location'=>'20 53 17N, 105 21 15E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04897',
		'name'=>'Hợp Thịnh',
		'type'=>'Xã',
		'location'=>'20 59 51N, 105 20 27E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04900',
		'name'=>'Phú Minh',
		'type'=>'Xã',
		'location'=>'20 59 38N, 105 22 05E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04903',
		'name'=>'Hợp Thành',
		'type'=>'Xã',
		'location'=>'20 56 58N, 105 21 24E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04906',
		'name'=>'Phúc Tiến',
		'type'=>'Xã',
		'location'=>'20 56 39N, 105 23 52E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04909',
		'name'=>'Dân Hòa',
		'type'=>'Xã',
		'location'=>'20 55 27N, 105 26 11E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04912',
		'name'=>'Mông Hóa',
		'type'=>'Xã',
		'location'=>'20 54 06N, 105 24 08E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04915',
		'name'=>'Dân Hạ',
		'type'=>'Xã',
		'location'=>'20 53 23N, 105 23 32E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04918',
		'name'=>'Trung Minh',
		'type'=>'Xã',
		'location'=>'20 51 41N, 105 21 25E',
		'district_id'=>'148'
		] );
		
		Ward::create( [
		'ward_id'=>'04921',
		'name'=>'Độc Lập',
		'type'=>'Xã',
		'location'=>'20 49 17N, 105 24 12E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04924',
		'name'=>'Lương Sơn',
		'type'=>'Thị Trấn',
		'location'=>'20 53 38N, 105 31 03E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04927',
		'name'=>'Yên Trung',
		'type'=>'Xã',
		'location'=>'20 59 39N, 105 25 44E',
		'district_id'=>'276'
		] );
		
		Ward::create( [
		'ward_id'=>'04930',
		'name'=>'Yên Bình',
		'type'=>'Xã',
		'location'=>'20 59 22N, 105 27 28E',
		'district_id'=>'276'
		] );
		
		Ward::create( [
		'ward_id'=>'04933',
		'name'=>'Yên Quang',
		'type'=>'Xã',
		'location'=>'20 58 37N, 105 24 43E',
		'district_id'=>'151'
		] );
		
		Ward::create( [
		'ward_id'=>'04936',
		'name'=>'Tiến Xuân',
		'type'=>'Xã',
		'location'=>'20 58 41N, 105 28 48E',
		'district_id'=>'276'
		] );
		
		Ward::create( [
		'ward_id'=>'04939',
		'name'=>'Đông Xuân',
		'type'=>'Xã',
		'location'=>'20 57 19N, 105 30 10E',
		'district_id'=>'275'
		] );
		
		Ward::create( [
		'ward_id'=>'04942',
		'name'=>'Lâm Sơn',
		'type'=>'Xã',
		'location'=>'20 54 44N, 105 28 48E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04945',
		'name'=>'Hòa Sơn',
		'type'=>'Xã',
		'location'=>'20 54 42N, 105 32 28E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04948',
		'name'=>'Trường Sơn',
		'type'=>'Xã',
		'location'=>'20 51 09N, 105 27 00E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04951',
		'name'=>'Tân Vinh',
		'type'=>'Xã',
		'location'=>'20 51 52N, 105 30 01E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04954',
		'name'=>'Nhuận Trạch',
		'type'=>'Xã',
		'location'=>'20 51 59N, 105 33 35E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04957',
		'name'=>'Cao Răm',
		'type'=>'Xã',
		'location'=>'20 49 47N, 105 30 31E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04960',
		'name'=>'Cư Yên',
		'type'=>'Xã',
		'location'=>'20 50 12N, 105 33 13E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04963',
		'name'=>'Hợp Hòa',
		'type'=>'Xã',
		'location'=>'20 50 13N, 105 31 35E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04966',
		'name'=>'Liên Sơn',
		'type'=>'Xã',
		'location'=>'20 49 34N, 105 35 58E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04969',
		'name'=>'Thành Lập',
		'type'=>'Xã',
		'location'=>'20 48 39N, 105 37 47E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04972',
		'name'=>'Tiến Sơn',
		'type'=>'Xã',
		'location'=>'20 47 23N, 105 35 09E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04975',
		'name'=>'Trung Sơn',
		'type'=>'Xã',
		'location'=>'20 46 20N, 105 37 19E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04978',
		'name'=>'Bo',
		'type'=>'Thị Trấn',
		'location'=>'20 40 25N, 105 31 52E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'04981',
		'name'=>'Thanh Hà',
		'type'=>'Thị Trấn',
		'location'=>'20 35 49N, 105 39 52E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'04984',
		'name'=>'Đú Sáng',
		'type'=>'Xã',
		'location'=>'20 47 20N, 105 25 32E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'04987',
		'name'=>'Bắc Sơn',
		'type'=>'Xã',
		'location'=>'20 46 27N, 105 31 11E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'04990',
		'name'=>'Bình Sơn',
		'type'=>'Xã',
		'location'=>'20 45 51N, 105 28 45E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'04993',
		'name'=>'Hùng Tiến',
		'type'=>'Xã',
		'location'=>'20 46 07N, 105 32 38E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'04996',
		'name'=>'Tân Thành',
		'type'=>'Xã',
		'location'=>'20 44 51N, 105 36 04E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'04999',
		'name'=>'Tú Sơn',
		'type'=>'Xã',
		'location'=>'20 43 41N, 105 24 22E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05002',
		'name'=>'Nật Sơn',
		'type'=>'Xã',
		'location'=>'20 44 11N, 105 33 16E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05005',
		'name'=>'Vĩnh Tiến',
		'type'=>'Xã',
		'location'=>'20 43 25N, 105 26 48E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05008',
		'name'=>'Cao Dương',
		'type'=>'Xã',
		'location'=>'20 43 31N, 105 39 20E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'05011',
		'name'=>'Sơn Thủy',
		'type'=>'Xã',
		'location'=>'20 44 02N, 105 30 04E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05014',
		'name'=>'Đông Bắc',
		'type'=>'Xã',
		'location'=>'20 42 56N, 105 27 39E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05017',
		'name'=>'Thượng Bì',
		'type'=>'Xã',
		'location'=>'20 42 50N, 105 31 15E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05020',
		'name'=>'Lập Chiệng',
		'type'=>'Xã',
		'location'=>'20 42 28N, 105 34 11E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05023',
		'name'=>'Hợp Châu',
		'type'=>'Xã',
		'location'=>'20 42 31N, 105 37 09E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'05026',
		'name'=>'Vĩnh Đồng',
		'type'=>'Xã',
		'location'=>'20 41 52N, 105 29 21E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05029',
		'name'=>'Hạ Bì',
		'type'=>'Xã',
		'location'=>'20 41 27N, 105 30 55E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05032',
		'name'=>'Trung Bì',
		'type'=>'Xã',
		'location'=>'20 14 24N, 105 32 10E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05035',
		'name'=>'Kim Sơn',
		'type'=>'Xã',
		'location'=>'20 40 50N, 105 35 14E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05038',
		'name'=>'Hợp Đồng',
		'type'=>'Xã',
		'location'=>'20 40 15N, 105 28 35E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05041',
		'name'=>'Long Sơn',
		'type'=>'Xã',
		'location'=>'20 40 05N, 105 37 56E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'05044',
		'name'=>'Thượng Tiến',
		'type'=>'Xã',
		'location'=>'20 38 56N, 105 26 16E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05047',
		'name'=>'Cao Thắng',
		'type'=>'Xã',
		'location'=>'20 40 34N, 105 39 49E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'05050',
		'name'=>'Kim Tiến',
		'type'=>'Xã',
		'location'=>'20 39 09N, 105 30 00E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05053',
		'name'=>'Kim Bình',
		'type'=>'Xã',
		'location'=>'20 39 41N, 105 32 32E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05056',
		'name'=>'Hợp Kim',
		'type'=>'Xã',
		'location'=>'20 39 46N, 105 34 10E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05059',
		'name'=>'Thanh Lương',
		'type'=>'Xã',
		'location'=>'20 38 56N, 105 39 52E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'05062',
		'name'=>'Hợp Thanh',
		'type'=>'Xã',
		'location'=>'20 38 33N, 105 38 36E',
		'district_id'=>'152'
		] );
		
		Ward::create( [
		'ward_id'=>'05065',
		'name'=>'Kim Bôi',
		'type'=>'Xã',
		'location'=>'20 38 45N, 105 32 47E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05068',
		'name'=>'Nam Thượng',
		'type'=>'Xã',
		'location'=>'20 37 31N, 105 35 44E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05071',
		'name'=>'Kim Truy',
		'type'=>'Xã',
		'location'=>'20 37 02N, 105 31 27E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05074',
		'name'=>'Thanh Nông',
		'type'=>'Xã',
		'location'=>'20 36 13N, 105 39 35E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05077',
		'name'=>'Cuối Hạ',
		'type'=>'Xã',
		'location'=>'20 35 05N, 105 32 31E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05080',
		'name'=>'Sào Báy',
		'type'=>'Xã',
		'location'=>'20 35 37N, 105 36 13E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05083',
		'name'=>'Mi Hòa',
		'type'=>'Xã',
		'location'=>'20 33 59N, 105 38 43E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05086',
		'name'=>'Nuông Dăm',
		'type'=>'Xã',
		'location'=>'20 33 18N, 105 36 35E',
		'district_id'=>'153'
		] );
		
		Ward::create( [
		'ward_id'=>'05089',
		'name'=>'Cao Phong',
		'type'=>'Thị Trấn',
		'location'=>'20 42 57N, 105 19 26E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05092',
		'name'=>'Bình Thanh',
		'type'=>'Xã',
		'location'=>'20 45 51N, 105 15 49E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05095',
		'name'=>'Thung Nai',
		'type'=>'Xã',
		'location'=>'20 44 54N, 105 13 43E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05098',
		'name'=>'Bắc Phong',
		'type'=>'Xã',
		'location'=>'20 44 11N, 105 17 50E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05101',
		'name'=>'Thu Phong',
		'type'=>'Xã',
		'location'=>'20 44 20N, 105 20 56E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05104',
		'name'=>'Đông Phong',
		'type'=>'Xã',
		'location'=>'20 42 25N, 105 21 15E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05107',
		'name'=>'Xuân Phong',
		'type'=>'Xã',
		'location'=>'20 41 15N, 105 23 10E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05110',
		'name'=>'Tây Phong',
		'type'=>'Xã',
		'location'=>'20 41 06N, 105 17 48E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05113',
		'name'=>'Tân Phong',
		'type'=>'Xã',
		'location'=>'20 40 44N, 105 20 28E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05116',
		'name'=>'Dũng Phong',
		'type'=>'Xã',
		'location'=>'20 39 34N, 105 20 09E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05119',
		'name'=>'Nam Phong',
		'type'=>'Xã',
		'location'=>'20 38 24N, 105 18 56E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05122',
		'name'=>'Yên Lập',
		'type'=>'Xã',
		'location'=>'20 38 13N, 105 21 59E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05125',
		'name'=>'Yên Thượng',
		'type'=>'Xã',
		'location'=>'20 36 50N, 105 22 24E',
		'district_id'=>'154'
		] );
		
		Ward::create( [
		'ward_id'=>'05128',
		'name'=>'Mường Khến',
		'type'=>'Thị Trấn',
		'location'=>'20 37 16N, 105 16 59E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05131',
		'name'=>'Ngòi Hoa',
		'type'=>'Xã',
		'location'=>'20 44 31N, 105 09 56E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05134',
		'name'=>'Trung Hòa',
		'type'=>'Xã',
		'location'=>'20 41 39N, 105 13 44E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05137',
		'name'=>'Phú Vinh',
		'type'=>'Xã',
		'location'=>'20 41 14N, 105 10 08E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05140',
		'name'=>'Phú Cường',
		'type'=>'Xã',
		'location'=>'20 39 51N, 105 09 07E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05143',
		'name'=>'Mỹ Hòa',
		'type'=>'Xã',
		'location'=>'20 39 37N, 105 14 21E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05146',
		'name'=>'Quy Hậu',
		'type'=>'Xã',
		'location'=>'20 37 50N, 105 16 13E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05149',
		'name'=>'Phong Phú',
		'type'=>'Xã',
		'location'=>'20 37 51N, 105 12 43E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05152',
		'name'=>'Quyết Chiến',
		'type'=>'Xã',
		'location'=>'20 34 55N, 105 11 37E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05155',
		'name'=>'Mãn Đức',
		'type'=>'Xã',
		'location'=>'20 36 14N, 105 16 53E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05158',
		'name'=>'Địch Giáo',
		'type'=>'Xã',
		'location'=>'20 36 24N, 105 12 15E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05161',
		'name'=>'Tuân Lộ',
		'type'=>'Xã',
		'location'=>'20 36 31N, 105 14 28E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05164',
		'name'=>'Tử Nê',
		'type'=>'Xã',
		'location'=>'20 35 12N, 105 17 16E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05167',
		'name'=>'Thanh Hối',
		'type'=>'Xã',
		'location'=>'20 34 23N, 105 18 39E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05170',
		'name'=>'Ngọc Mỹ',
		'type'=>'Xã',
		'location'=>'20 33 01N, 105 21 28E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05173',
		'name'=>'Đông Lai',
		'type'=>'Xã',
		'location'=>'20 33 29N, 105 20 10E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05176',
		'name'=>'Lũng Vân',
		'type'=>'Xã',
		'location'=>'20 33 49N, 105 10 53E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05179',
		'name'=>'Bắc Sơn',
		'type'=>'Xã',
		'location'=>'20 34 48N, 105 08 12E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05182',
		'name'=>'Quy Mỹ',
		'type'=>'Xã',
		'location'=>'20 34 53N, 105 13 08E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05185',
		'name'=>'Do Nhân',
		'type'=>'Xã',
		'location'=>'20 33 38N, 105 14 19E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05188',
		'name'=>'Nam Sơn',
		'type'=>'Xã',
		'location'=>'20 32 36N, 105 09 59E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05191',
		'name'=>'Lỗ Sơn',
		'type'=>'Xã',
		'location'=>'20 31 55N, 105 15 49E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05194',
		'name'=>'Ngổ Luông',
		'type'=>'Xã',
		'location'=>'20 29 50N, 105 15 17E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05197',
		'name'=>'Gia Mô',
		'type'=>'Xã',
		'location'=>'20 30 31N, 105 17 03E',
		'district_id'=>'155'
		] );
		
		Ward::create( [
		'ward_id'=>'05200',
		'name'=>'Mai Châu',
		'type'=>'Thị Trấn',
		'location'=>'20 39 52N, 105 05 26E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05203',
		'name'=>'Tân Mai',
		'type'=>'Xã',
		'location'=>'20 46 10N, 105 03 47E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05206',
		'name'=>'Phúc Sạn',
		'type'=>'Xã',
		'location'=>'20 45 33N, 105 01 53E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05209',
		'name'=>'Pà Cò',
		'type'=>'Xã',
		'location'=>'20 44 25N, 105 54 27E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05212',
		'name'=>'Hang Kia',
		'type'=>'Xã',
		'location'=>'20 44 14N, 104 52 48E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05215',
		'name'=>'Ba Khan',
		'type'=>'Xã',
		'location'=>'20 43 21N, 105 06 19E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05218',
		'name'=>'Tân Sơn',
		'type'=>'Xã',
		'location'=>'20 43 10N, 104 58 15E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05221',
		'name'=>'Đồng Bảng',
		'type'=>'Xã',
		'location'=>'20 43 08N, 105 02 07E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05224',
		'name'=>'Cun Pheo',
		'type'=>'Xã',
		'location'=>'20 41 34N, 104 53 02E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05227',
		'name'=>'Bao La',
		'type'=>'Xã',
		'location'=>'20 41 27N, 104 58 01E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05230',
		'name'=>'Piềng Vế',
		'type'=>'Xã',
		'location'=>'20 41 07N, 104 56 05E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05233',
		'name'=>'Tòng Đậu',
		'type'=>'Xã',
		'location'=>'20 41 30N, 105 05 04E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05236',
		'name'=>'Nà Mèo',
		'type'=>'Xã',
		'location'=>'20 40 37N, 105 01 31E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05239',
		'name'=>'Thung Khe',
		'type'=>'Xã',
		'location'=>'20 39 12N, 105 07 50E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05242',
		'name'=>'Nà Phòn',
		'type'=>'Xã',
		'location'=>'20 39 55N, 105 03 25E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05245',
		'name'=>'Săm Khóe',
		'type'=>'Xã',
		'location'=>'20 38 53N, 104 58 33E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05248',
		'name'=>'Chiềng Châu',
		'type'=>'Xã',
		'location'=>'20 38 26N, 105 03 59E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05251',
		'name'=>'Mai Hạ',
		'type'=>'Xã',
		'location'=>'20 37 36N, 105 02 51E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05254',
		'name'=>'Nong Luông',
		'type'=>'Xã',
		'location'=>'20 37 10N, 105 07 27E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05257',
		'name'=>'Mai Hịch',
		'type'=>'Xã',
		'location'=>'20 36 40N, 104 59 46E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05260',
		'name'=>'Pù Pin',
		'type'=>'Xã',
		'location'=>'20 36 19N, 105 05 47E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05263',
		'name'=>'Vạn Mai',
		'type'=>'Xã',
		'location'=>'20 35 12N, 105 02 24E',
		'district_id'=>'156'
		] );
		
		Ward::create( [
		'ward_id'=>'05266',
		'name'=>'Vụ Bản',
		'type'=>'Thị Trấn',
		'location'=>'20 27 53N, 105 26 08E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05269',
		'name'=>'Quý Hòa',
		'type'=>'Xã',
		'location'=>'20 36 12N, 105 28 23E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05272',
		'name'=>'Miền Đồi',
		'type'=>'Xã',
		'location'=>'20 34 32N, 105 24 18E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05275',
		'name'=>'Mỹ Thành',
		'type'=>'Xã',
		'location'=>'20 33 56N, 105 31 26E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05278',
		'name'=>'Tuân Đạo',
		'type'=>'Xã',
		'location'=>'20 34 13N, 105 26 19E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05281',
		'name'=>'Văn Nghĩa',
		'type'=>'Xã',
		'location'=>'20 32 39N, 105 28 41E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05284',
		'name'=>'Văn Sơn',
		'type'=>'Xã',
		'location'=>'20 32 19N, 105 23 26E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05287',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'20 32 48N, 105 26 30E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05290',
		'name'=>'Nhân Nghĩa',
		'type'=>'Xã',
		'location'=>'20 31 22N, 105 25 52E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05293',
		'name'=>'Thượng Cốc',
		'type'=>'Xã',
		'location'=>'20 30 25N, 105 22 44E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05296',
		'name'=>'Phú Lương',
		'type'=>'Xã',
		'location'=>'20 29 14N, 105 19 53E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05299',
		'name'=>'Phúc Tuy',
		'type'=>'Xã',
		'location'=>'20 30 03N, 105 20 57E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05302',
		'name'=>'Xuất Hóa',
		'type'=>'Xã',
		'location'=>'20 29 17N, 105 25 02E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05305',
		'name'=>'Yên Phú',
		'type'=>'Xã',
		'location'=>'20 29 31N, 105 27 57E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05308',
		'name'=>'Bình Hẻm',
		'type'=>'Xã',
		'location'=>'20 29 24N, 105 32 02E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05311',
		'name'=>'Chí Thiện',
		'type'=>'Xã',
		'location'=>'20 28 28N, 105 22 26E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05314',
		'name'=>'Bình Cảng',
		'type'=>'Xã',
		'location'=>'20 27 54N, 105 29 39E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05317',
		'name'=>'Bình Chân',
		'type'=>'Xã',
		'location'=>'20 27 25N, 105 31 34E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05320',
		'name'=>'Định Cư',
		'type'=>'Xã',
		'location'=>'20 27 26N, 105 24 31E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05323',
		'name'=>'Chí Đạo',
		'type'=>'Xã',
		'location'=>'20 27 30N, 105 22 43E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05326',
		'name'=>'Liên Vũ',
		'type'=>'Xã',
		'location'=>'20 27 35N, 105 27 38E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05329',
		'name'=>'Ngọc Sơn',
		'type'=>'Xã',
		'location'=>'10 26 18N, 105 20 20E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05332',
		'name'=>'Hương Nhượng',
		'type'=>'Xã',
		'location'=>'20 26 27N, 105 26 12E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05335',
		'name'=>'Vũ Lâm',
		'type'=>'Xã',
		'location'=>'20 26 34N, 105 29 09E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05338',
		'name'=>'Tự Do',
		'type'=>'Xã',
		'location'=>'20 24 54N, 105 20 40E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05341',
		'name'=>'Yên Nghiệp',
		'type'=>'Xã',
		'location'=>'20 24 18N, 105 32 34E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05344',
		'name'=>'Tân Mỹ',
		'type'=>'Xã',
		'location'=>'20 24 24N, 105 28 13E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05347',
		'name'=>'Ân Nghĩa',
		'type'=>'Xã',
		'location'=>'20 24 04N, 105 30 18E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05350',
		'name'=>'Ngọc Lâu',
		'type'=>'Xã',
		'location'=>'20 24 38N, 105 24 36E',
		'district_id'=>'157'
		] );
		
		Ward::create( [
		'ward_id'=>'05353',
		'name'=>'Hàng Trạm',
		'type'=>'Thị Trấn',
		'location'=>'20 23 46N, 105 36 46E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05356',
		'name'=>'Lạc Sỹ',
		'type'=>'Xã',
		'location'=>'20 31 11N, 105 34 30E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05359',
		'name'=>'Lạc Hưng',
		'type'=>'Xã',
		'location'=>'20 29 26N, 105 39 45E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05362',
		'name'=>'Lạc Lương',
		'type'=>'Xã',
		'location'=>'20 28 34N, 105 36 27E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05365',
		'name'=>'Bảo Hiệu',
		'type'=>'Xã',
		'location'=>'20 26 58N, 105 38 22E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05368',
		'name'=>'Đa Phúc',
		'type'=>'Xã',
		'location'=>'20 26 32N, 105 34 46E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05371',
		'name'=>'Hữu Lợi',
		'type'=>'Xã',
		'location'=>'20 24 58N, 105 39 49E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05374',
		'name'=>'Lạc Thịnh',
		'type'=>'Xã',
		'location'=>'20 23 50N, 105 34 08E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05377',
		'name'=>'Yên Lạc',
		'type'=>'Xã',
		'location'=>'20 23 08N, 105 36 46E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05380',
		'name'=>'Đoàn Kết',
		'type'=>'Xã',
		'location'=>'20 22 49N, 105 41 07E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05383',
		'name'=>'Phú Lai',
		'type'=>'Xã',
		'location'=>'20 22 11N, 105 38 37E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05386',
		'name'=>'Yên Trị',
		'type'=>'Xã',
		'location'=>'20 20 47N, 105 39 50E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05389',
		'name'=>'Ngọc Lương',
		'type'=>'Xã',
		'location'=>'20 20 26N, 105 41 40E',
		'district_id'=>'158'
		] );
		
		Ward::create( [
		'ward_id'=>'05392',
		'name'=>'Chi Nê',
		'type'=>'Thị Trấn',
		'location'=>'20 29 03N, 105 46 57E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05395',
		'name'=>'Phú Lão',
		'type'=>'Xã',
		'location'=>'20 34 06N, 105 45 10E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05398',
		'name'=>'Phú Thành',
		'type'=>'Xã',
		'location'=>'20 33 34N, 105 42 13E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05401',
		'name'=>'Cố Nghĩa',
		'type'=>'Xã',
		'location'=>'20 31 59N, 105 45 10E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05404',
		'name'=>'Hưng Thi',
		'type'=>'Xã',
		'location'=>'20 31 17N, 105 39 49E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05407',
		'name'=>'Lạc Long',
		'type'=>'Xã',
		'location'=>'20 30 53N, 105 46 52E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05410',
		'name'=>'Liên Hòa',
		'type'=>'Xã',
		'location'=>'20 30 00N, 105 44 13E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05413',
		'name'=>'Khoan Dụ',
		'type'=>'Xã',
		'location'=>'20 29 42N, 105 45 22E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05416',
		'name'=>'Đồng Môn',
		'type'=>'Xã',
		'location'=>'20 29 17N, 105 41 44E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05419',
		'name'=>'Đồng Tâm',
		'type'=>'Xã',
		'location'=>'20 27 53N, 105 49 07E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05422',
		'name'=>'Yên Bồng',
		'type'=>'Xã',
		'location'=>'20 27 25N, 105 45 53E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05425',
		'name'=>'An Lạc',
		'type'=>'Xã',
		'location'=>'20 27 12N, 105 42 25E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05428',
		'name'=>'An Bình',
		'type'=>'Xã',
		'location'=>'20 24 38N, 105 43 36E',
		'district_id'=>'159'
		] );
		
		Ward::create( [
		'ward_id'=>'05431',
		'name'=>'Quán Triều',
		'type'=>'Phường',
		'location'=>'21 36 30N, 105 48 15E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05434',
		'name'=>'Quang Vinh',
		'type'=>'Phường',
		'location'=>'21 36 31N, 105 49 17E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05437',
		'name'=>'Túc Duyên',
		'type'=>'Phường',
		'location'=>'21 35 37N, 105 51 09E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05440',
		'name'=>'Hoàng Văn Thụ',
		'type'=>'Phường',
		'location'=>'21 35 52N, 105 49 38E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05443',
		'name'=>'Trưng Vương',
		'type'=>'Phường',
		'location'=>'21 35 51N, 105 50 28E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05446',
		'name'=>'Quang Trung',
		'type'=>'Phường',
		'location'=>'21 35 34N, 105 49 10E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05449',
		'name'=>'Phan Đình Phùng',
		'type'=>'Phường',
		'location'=>'21 35 16N, 105 50 25E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05452',
		'name'=>'Tân Thịnh',
		'type'=>'Phường',
		'location'=>'21 35 03N, 105 48 36E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05455',
		'name'=>'Thịnh Đán',
		'type'=>'Phường',
		'location'=>'21 34 33N, 105 48 43E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05458',
		'name'=>'Đồng Quang',
		'type'=>'Phường',
		'location'=>'21 34 59N, 105 49 40E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05461',
		'name'=>'Gia Sàng',
		'type'=>'Phường',
		'location'=>'21 34 34N, 105 50 48E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05464',
		'name'=>'Tân Lập',
		'type'=>'Phường',
		'location'=>'21 33 43N, 105 49 41E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05467',
		'name'=>'Cam Giá',
		'type'=>'Phường',
		'location'=>'21 33 44N, 105 52 23E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05470',
		'name'=>'Phú Xá',
		'type'=>'Phường',
		'location'=>'21 33 17N, 105 51 05E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05473',
		'name'=>'Hương Sơn',
		'type'=>'Phường',
		'location'=>'21 32 40N, 105 53 04E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05476',
		'name'=>'Trung Thành',
		'type'=>'Phường',
		'location'=>'21 32 19N, 105 52 02E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05479',
		'name'=>'Tân Thành',
		'type'=>'Phường',
		'location'=>'21 31 33N, 105 52 38E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05482',
		'name'=>'Tân Long',
		'type'=>'Phường',
		'location'=>'21 37 01N, 105 47 27E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05485',
		'name'=>'Phúc Hà',
		'type'=>'Xã',
		'location'=>'21 36 07N, 105 46 59E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05488',
		'name'=>'Phúc Xuân',
		'type'=>'Xã',
		'location'=>'21 35 12N, 105 44 08E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05491',
		'name'=>'Quyết Thắng',
		'type'=>'Xã',
		'location'=>'21 34 46N, 105 47 18E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05494',
		'name'=>'Phúc Trìu',
		'type'=>'Xã',
		'location'=>'21 33 39N, 105 44 36E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05497',
		'name'=>'Thịnh Đức',
		'type'=>'Xã',
		'location'=>'21 32 17N, 105 48 11E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05500',
		'name'=>'Tích Lương',
		'type'=>'Xã',
		'location'=>'21 32 19N, 105 50 38E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05503',
		'name'=>'Tân Cương',
		'type'=>'Xã',
		'location'=>'21 31 53N, 105 46 04E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05506',
		'name'=>'Lương Sơn',
		'type'=>'Xã',
		'location'=>'21 30 55N, 105 53 12E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05509',
		'name'=>'Lương Châu',
		'type'=>'Phường',
		'location'=>'21 28 55N, 105 49 44E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05512',
		'name'=>'Mỏ Chè',
		'type'=>'Phường',
		'location'=>'21 28 28N, 105 49 53E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05515',
		'name'=>'Cải Đan',
		'type'=>'Phường',
		'location'=>'21 27 28N, 105 51 32E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05518',
		'name'=>'Thắng Lợi',
		'type'=>'Phường',
		'location'=>'21 27 45N, 105 50 01E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05521',
		'name'=>'Phố Cò',
		'type'=>'Phường',
		'location'=>'21 26 59N, 105 50 35E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05524',
		'name'=>'Vinh Sơn',
		'type'=>'Xã',
		'location'=>'21 28 05N, 105 48 26E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05527',
		'name'=>'Tân Quang',
		'type'=>'Xã',
		'location'=>'21 30 02N, 105 50 54E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05530',
		'name'=>'Bình Sơn',
		'type'=>'Xã',
		'location'=>'21 30 00N, 105 47 05E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05533',
		'name'=>'Bá Xuyên',
		'type'=>'Xã',
		'location'=>'21 30 20N, 105 49 35E',
		'district_id'=>'165'
		] );
		
		Ward::create( [
		'ward_id'=>'05536',
		'name'=>'Chợ Chu',
		'type'=>'Thị Trấn',
		'location'=>'21 54 35N, 105 38 35E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05539',
		'name'=>'Linh Thông',
		'type'=>'Xã',
		'location'=>'22 01 07N, 105 40 00E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05542',
		'name'=>'Lam Vỹ',
		'type'=>'Xã',
		'location'=>'21 59 13N, 105 42 21E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05545',
		'name'=>'Quy Kỳ',
		'type'=>'Xã',
		'location'=>'21 58 48N, 105 37 16E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05548',
		'name'=>'Tân Thịnh',
		'type'=>'Xã',
		'location'=>'21 57 31N, 105 43 16E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05551',
		'name'=>'Kim Phượng',
		'type'=>'Xã',
		'location'=>'21 56 32N, 105 39 28E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05554',
		'name'=>'Bảo Linh',
		'type'=>'Xã',
		'location'=>'21 55 09N, 105 34 00E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05557',
		'name'=>'Kim Sơn',
		'type'=>'Xã',
		'location'=>'21 56 23N, 105 37 37E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05560',
		'name'=>'Phúc Chu',
		'type'=>'Xã',
		'location'=>'21 55 24N, 105 36 36E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05563',
		'name'=>'Tân Dương',
		'type'=>'Xã',
		'location'=>'21 54 13N, 105 41 27E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05566',
		'name'=>'Phượng Tiến',
		'type'=>'Xã',
		'location'=>'21 52 57N, 105 39 28E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05569',
		'name'=>'Bảo Cường',
		'type'=>'Xã',
		'location'=>'21 53 54N, 105 37 22E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05572',
		'name'=>'Đồng Thịnh',
		'type'=>'Xã',
		'location'=>'21 52 54N, 105 35 54E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05575',
		'name'=>'Định Biên',
		'type'=>'Xã',
		'location'=>'21 53 02N, 105 34 22E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05578',
		'name'=>'Thanh Định',
		'type'=>'Xã',
		'location'=>'21 51 52N, 105 32 37E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05581',
		'name'=>'Trung Hội',
		'type'=>'Xã',
		'location'=>'21 51 52N, 105 37 59E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05584',
		'name'=>'Trung Lương',
		'type'=>'Xã',
		'location'=>'21 50 55N, 105 36 22E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05587',
		'name'=>'Bình Yên',
		'type'=>'Xã',
		'location'=>'21 50 53N, 105 34 23E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05590',
		'name'=>'Điềm Mặc',
		'type'=>'Xã',
		'location'=>'21 49 48N, 105 32 20E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05593',
		'name'=>'Phú Tiến',
		'type'=>'Xã',
		'location'=>'21 49 25N, 105 39 24E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05596',
		'name'=>'Bộc Nhiêu',
		'type'=>'Xã',
		'location'=>'21 48 12N, 105 37 09E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05599',
		'name'=>'Sơn Phú',
		'type'=>'Xã',
		'location'=>'21 48 57N, 105 34 36E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05602',
		'name'=>'Phú Đình',
		'type'=>'Xã',
		'location'=>'21 48 04N, 105 31 30E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05605',
		'name'=>'Bình Thành',
		'type'=>'Xã',
		'location'=>'21 46 28N, 105 33 51E',
		'district_id'=>'167'
		] );
		
		Ward::create( [
		'ward_id'=>'05608',
		'name'=>'Giang Tiên',
		'type'=>'Thị Trấn',
		'location'=>'21 40 36N, 105 43 53E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05611',
		'name'=>'Đu',
		'type'=>'Thị Trấn',
		'location'=>'21 43 59N, 105 42 10E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05614',
		'name'=>'Yên Ninh',
		'type'=>'Xã',
		'location'=>'21 52 10N, 105 44 20E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05617',
		'name'=>'Yên Trạch',
		'type'=>'Xã',
		'location'=>'21 51 28N, 105 41 24E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05620',
		'name'=>'Yên Đổ',
		'type'=>'Xã',
		'location'=>'21 48 01N, 105 42 32E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05623',
		'name'=>'Yên Lạc',
		'type'=>'Xã',
		'location'=>'21 46 31N, 105 45 37E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05626',
		'name'=>'Ôn Lương',
		'type'=>'Xã',
		'location'=>'21 47 18N, 105 39 01E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05629',
		'name'=>'Động Đạt',
		'type'=>'Xã',
		'location'=>'21 45 14N, 105 42 36E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05632',
		'name'=>'Phủ Lý',
		'type'=>'Xã',
		'location'=>'21 45 40N, 105 40 21E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05635',
		'name'=>'Phú Đô',
		'type'=>'Xã',
		'location'=>'21 44 29N, 105 47 33E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05638',
		'name'=>'Hợp Thành',
		'type'=>'Xã',
		'location'=>'21 45 01N, 105 38 56E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05641',
		'name'=>'Tức Tranh',
		'type'=>'Xã',
		'location'=>'21 43 40N, 105 46 00E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05644',
		'name'=>'Phấn Mễ',
		'type'=>'Xã',
		'location'=>'21 41 39N, 105 42 25E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05647',
		'name'=>'Vô Tranh',
		'type'=>'Xã',
		'location'=>'21 41 05N, 105 45 47E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05650',
		'name'=>'Cổ Lũng',
		'type'=>'Xã',
		'location'=>'21 38 57N, 105 45 08E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05653',
		'name'=>'Sơn Cẩm',
		'type'=>'Xã',
		'location'=>'21 38 30N, 105 47 05E',
		'district_id'=>'168'
		] );
		
		Ward::create( [
		'ward_id'=>'05656',
		'name'=>'Sông Cầu',
		'type'=>'Thị Trấn',
		'location'=>'21 40 42N, 105 51 57E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05659',
		'name'=>'Chùa Hang',
		'type'=>'Thị Trấn',
		'location'=>'21 37 45N, 105 49 53E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05662',
		'name'=>'Trại Cau',
		'type'=>'Thị Trấn',
		'location'=>'21 35 38N, 105 56 58E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05665',
		'name'=>'Văn Lăng',
		'type'=>'Xã',
		'location'=>'21 47 46N, 105 49 56E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05668',
		'name'=>'Tân Long',
		'type'=>'Xã',
		'location'=>'21 44 25N, 105 52 14E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05671',
		'name'=>'Hòa Bình',
		'type'=>'Xã',
		'location'=>'21 43 51N, 105 49 51E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05674',
		'name'=>'Quang Sơn',
		'type'=>'Xã',
		'location'=>'21 42 39N, 105 52 11E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05677',
		'name'=>'Minh Lập',
		'type'=>'Xã',
		'location'=>'21 41 01N, 105 48 33E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05680',
		'name'=>'Văn Hán',
		'type'=>'Xã',
		'location'=>'21 39 56N, 105 56 36E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05683',
		'name'=>'Hóa Trung',
		'type'=>'Xã',
		'location'=>'21 40 25N, 105 50 38E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05686',
		'name'=>'Khe Mo',
		'type'=>'Xã',
		'location'=>'21 39 39N, 105 52 26E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05689',
		'name'=>'Cây Thị',
		'type'=>'Xã',
		'location'=>'21 38 09N, 105 59 24E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05692',
		'name'=>'Hóa Thượng',
		'type'=>'Xã',
		'location'=>'21 39 01N, 105 49 44E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05695',
		'name'=>'Cao Ngạn',
		'type'=>'Xã',
		'location'=>'21 37 51N, 105 49 05E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05698',
		'name'=>'Hợp Tiến',
		'type'=>'Xã',
		'location'=>'21 35 01N, 106 01 46E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05701',
		'name'=>'Linh Sơn',
		'type'=>'Xã',
		'location'=>'21 36 55N, 105 52 38E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05704',
		'name'=>'Tân Lợi',
		'type'=>'Xã',
		'location'=>'21 35 56N, 105 59 25E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05707',
		'name'=>'Nam Hòa',
		'type'=>'Xã',
		'location'=>'21 36 23N, 105 54 54E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05710',
		'name'=>'Đồng Bẩm',
		'type'=>'Xã',
		'location'=>'21 36 49N, 105 50 37E',
		'district_id'=>'164'
		] );
		
		Ward::create( [
		'ward_id'=>'05713',
		'name'=>'Huống Thượng',
		'type'=>'Xã',
		'location'=>'21 35 14N, 105 52 33E',
		'district_id'=>'169'
		] );
		
		Ward::create( [
		'ward_id'=>'05716',
		'name'=>'Đình Cả',
		'type'=>'Thị Trấn',
		'location'=>'21 45 33N, 106 04 00E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05719',
		'name'=>'Sảng Mộc',
		'type'=>'Xã',
		'location'=>'21 54 29N, 106 00 11E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05722',
		'name'=>'Nghinh Tường',
		'type'=>'Xã',
		'location'=>'21 52 32N, 106 04 51E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05725',
		'name'=>'Thần Xa',
		'type'=>'Xã',
		'location'=>'21 50 15N, 105 53 56E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05728',
		'name'=>'Vũ Chấn',
		'type'=>'Xã',
		'location'=>'21 48 53N, 106 01 32E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05731',
		'name'=>'Thượng Nung',
		'type'=>'Xã',
		'location'=>'21 49 15N, 105 58 15E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05734',
		'name'=>'Phú Thượng',
		'type'=>'Xã',
		'location'=>'21 45 49N, 106 06 42E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05737',
		'name'=>'Cúc Đường',
		'type'=>'Xã',
		'location'=>'21 45 45N, 105 58 13E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05740',
		'name'=>'La Hiên',
		'type'=>'Xã',
		'location'=>'21 44 08N, 105 55 50E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05743',
		'name'=>'Lâu Thượng',
		'type'=>'Xã',
		'location'=>'21 44 25N, 106 01 03E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05746',
		'name'=>'Tràng Xá',
		'type'=>'Xã',
		'location'=>'21 42 06N, 106 05 48E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05749',
		'name'=>'Phương Giao',
		'type'=>'Xã',
		'location'=>'21 42 30N, 106 11 24E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05752',
		'name'=>'Liên Minh',
		'type'=>'Xã',
		'location'=>'21 40 27N, 106 02 11E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05755',
		'name'=>'Dân Tiến',
		'type'=>'Xã',
		'location'=>'21 39 48N, 106 07 11E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05758',
		'name'=>'Bình Long',
		'type'=>'Xã',
		'location'=>'21 38 42N, 106 10 39E',
		'district_id'=>'170'
		] );
		
		Ward::create( [
		'ward_id'=>'05761',
		'name'=>'Đại Từ',
		'type'=>'Thị Trấn',
		'location'=>'21 37 52N, 105 38 18E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05764',
		'name'=>'Quân Chu',
		'type'=>'Thị Trấn',
		'location'=>'21 29 49N, 105 43 04E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05767',
		'name'=>'Phúc Lương',
		'type'=>'Xã',
		'location'=>'21 44 59N, 105 36 44E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05770',
		'name'=>'Minh Tiến',
		'type'=>'Xã',
		'location'=>'21 44 57N, 105 32 50E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05773',
		'name'=>'Yên Lãng',
		'type'=>'Xã',
		'location'=>'21 41 18N, 105 30 26E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05776',
		'name'=>'Đức Lương',
		'type'=>'Xã',
		'location'=>'21 43 19N, 105 36 28E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05779',
		'name'=>'Phú Cường',
		'type'=>'Xã',
		'location'=>'21 42 26N, 105 33 19E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05782',
		'name'=>'Na Mao',
		'type'=>'Xã',
		'location'=>'21 41 56N, 105 32 34E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05785',
		'name'=>'Phú Lạc',
		'type'=>'Xã',
		'location'=>'21 41 45N, 105 36 50E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05788',
		'name'=>'Tân Linh',
		'type'=>'Xã',
		'location'=>'21 41 05N, 105 39 08E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05791',
		'name'=>'Phú Thịnh',
		'type'=>'Xã',
		'location'=>'21 40 46N, 105 34 34E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05794',
		'name'=>'Phục Linh',
		'type'=>'Xã',
		'location'=>'21 40 15N, 105 41 52E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05797',
		'name'=>'Phú Xuyên',
		'type'=>'Xã',
		'location'=>'21 39 28N, 105 32 24E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05800',
		'name'=>'Bản Ngoại',
		'type'=>'Xã',
		'location'=>'21 39 39N, 105 36 03E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05803',
		'name'=>'Tiên Hội',
		'type'=>'Xã',
		'location'=>'21 38 55N, 105 36 58E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05806',
		'name'=>'Hùng Sơn',
		'type'=>'Xã',
		'location'=>'21 38 30N, 105 39 01E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05809',
		'name'=>'Cù Vân',
		'type'=>'Xã',
		'location'=>'21 38 13N, 105 43 31E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05812',
		'name'=>'Hà Thượng',
		'type'=>'Xã',
		'location'=>'21 38 17N, 105 41 22E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05815',
		'name'=>'La Bằng',
		'type'=>'Xã',
		'location'=>'21 37 34N, 105 32 10E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05818',
		'name'=>'Hoàng Nông',
		'type'=>'Xã',
		'location'=>'21 36 38N, 105 33 33E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05821',
		'name'=>'Khôi Kỳ',
		'type'=>'Xã',
		'location'=>'21 37 05N, 105 36 11E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05824',
		'name'=>'An Khánh',
		'type'=>'Xã',
		'location'=>'21 36 46N, 105 45 00E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05827',
		'name'=>'Tân Thái',
		'type'=>'Xã',
		'location'=>'21 36 12N, 105 41 06E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05830',
		'name'=>'Bình Thuận',
		'type'=>'Xã',
		'location'=>'21 36 26N, 105 38 21E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05833',
		'name'=>'Lục Ba',
		'type'=>'Xã',
		'location'=>'21 35 40N, 105 38 42E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05836',
		'name'=>'Mỹ Yên',
		'type'=>'Xã',
		'location'=>'21 34 15N, 105 34 58E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05839',
		'name'=>'Vạn Thọ',
		'type'=>'Xã',
		'location'=>'21 34 17N, 105 39 42E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05842',
		'name'=>'Văn Yên',
		'type'=>'Xã',
		'location'=>'21 32 58N, 105 37 13E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05845',
		'name'=>'Ký Phú',
		'type'=>'Xã',
		'location'=>'21 32 28N, 105 38 16E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05848',
		'name'=>'Cát Nê',
		'type'=>'Xã',
		'location'=>'21 31 15N, 105 40 05E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05851',
		'name'=>'Quân Chu',
		'type'=>'Xã',
		'location'=>'21 28 20N, 105 40 40E',
		'district_id'=>'171'
		] );
		
		Ward::create( [
		'ward_id'=>'05854',
		'name'=>'Bãi Bông',
		'type'=>'Thị Trấn',
		'location'=>'21 26 15N, 105 52 57E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05857',
		'name'=>'Bắc Sơn',
		'type'=>'Thị Trấn',
		'location'=>'21 27 11N, 105 46 36E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05860',
		'name'=>'Ba Hàng',
		'type'=>'Thị Trấn',
		'location'=>'21 24 54N, 105 52 05E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05863',
		'name'=>'Phúc Tân',
		'type'=>'Xã',
		'location'=>'21 32 06N, 105 42 38E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05866',
		'name'=>'Phúc Thuận',
		'type'=>'Xã',
		'location'=>'21 28 04N, 105 41 57E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05869',
		'name'=>'Hồng Tiến',
		'type'=>'Xã',
		'location'=>'21 27 19N, 105 53 03E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05872',
		'name'=>'Minh Đức',
		'type'=>'Xã',
		'location'=>'21 26 04N, 105 48 10E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05875',
		'name'=>'Đắc Sơn',
		'type'=>'Xã',
		'location'=>'21 25 17N, 105 50 33E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05878',
		'name'=>'Đồng Tiến',
		'type'=>'Xã',
		'location'=>'21 25 06N, 105 53 29E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05881',
		'name'=>'Thành Công',
		'type'=>'Xã',
		'location'=>'21 23 44N, 105 46 16E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05884',
		'name'=>'Tiên Phong',
		'type'=>'Xã',
		'location'=>'21 24 02N, 105 55 23E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05887',
		'name'=>'Vạn Phái',
		'type'=>'Xã',
		'location'=>'21 23 49N, 105 49 45E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05890',
		'name'=>'Nam Tiến',
		'type'=>'Xã',
		'location'=>'21 23 41N, 105 51 48E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05893',
		'name'=>'Tân Hương',
		'type'=>'Xã',
		'location'=>'21 23 29N, 105 53 10E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05896',
		'name'=>'Đông Cao',
		'type'=>'Xã',
		'location'=>'21 22 42N, 105 53 43E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05899',
		'name'=>'Trung Thành',
		'type'=>'Xã',
		'location'=>'21 21 42N, 105 51 47E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05902',
		'name'=>'Tân Phú',
		'type'=>'Xã',
		'location'=>'21 21 21N, 105 53 32E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05905',
		'name'=>'Thuận Thành',
		'type'=>'Xã',
		'location'=>'21 20 30N, 105 52 22E',
		'district_id'=>'172'
		] );
		
		Ward::create( [
		'ward_id'=>'05908',
		'name'=>'Hương Sơn',
		'type'=>'Thị Trấn',
		'location'=>'21 27 55N, 105 58 41E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05911',
		'name'=>'Bàn Đạt',
		'type'=>'Xã',
		'location'=>'21 33 55N, 105 56 13E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05914',
		'name'=>'Đồng Liên',
		'type'=>'Xã',
		'location'=>'21 33 49N, 105 53 37E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05917',
		'name'=>'Tân Khánh',
		'type'=>'Xã',
		'location'=>'21 32 21N, 105 57 28E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05920',
		'name'=>'Tân Kim',
		'type'=>'Xã',
		'location'=>'21 31 15N, 105 58 52E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05923',
		'name'=>'Tân Thành',
		'type'=>'Xã',
		'location'=>'21 31 23N, 106 01 00E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05926',
		'name'=>'Đào Xá',
		'type'=>'Xã',
		'location'=>'21 31 16N, 105 55 10E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05929',
		'name'=>'Bảo Lý',
		'type'=>'Xã',
		'location'=>'21 29 51N, 105 56 59E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05932',
		'name'=>'Thượng Đình',
		'type'=>'Xã',
		'location'=>'21 30 02N, 105 54 25E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05935',
		'name'=>'Tân Hòa',
		'type'=>'Xã',
		'location'=>'21 28 37N, 106 00 53E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05938',
		'name'=>'Nhã Lộng',
		'type'=>'Xã',
		'location'=>'21 28 25N, 105 55 51E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05941',
		'name'=>'Điềm Thụy',
		'type'=>'Xã',
		'location'=>'21 27 59N, 105 54 37E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05944',
		'name'=>'Xuân Phương',
		'type'=>'Xã',
		'location'=>'21 27 45N, 105 57 26E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05947',
		'name'=>'Tân Đức',
		'type'=>'Xã',
		'location'=>'21 27 09N, 106 01 52E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05950',
		'name'=>'Úc Kỳ',
		'type'=>'Xã',
		'location'=>'21 27 09N, 105 56 14E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05953',
		'name'=>'Lương Phú',
		'type'=>'Xã',
		'location'=>'21 26 38N, 106 00 06E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05956',
		'name'=>'Nga My',
		'type'=>'Xã',
		'location'=>'21 25 53N, 105 56 03E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05959',
		'name'=>'Kha Sơn',
		'type'=>'Xã',
		'location'=>'21 25 46N, 105 58 42E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05962',
		'name'=>'Thanh Ninh',
		'type'=>'Xã',
		'location'=>'21 25 12N, 106 00 12E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05965',
		'name'=>'Dương Thành',
		'type'=>'Xã',
		'location'=>'21 24 50N, 106 01 08E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05968',
		'name'=>'Hà Châu',
		'type'=>'Xã',
		'location'=>'21 24 48N, 105 56 33E',
		'district_id'=>'173'
		] );
		
		Ward::create( [
		'ward_id'=>'05971',
		'name'=>'Hoàng Văn Thụ',
		'type'=>'Phường',
		'location'=>'21 51 24N, 106 45 58E',
		'district_id'=>'178'
		] );
		
		Ward::create( [
		'ward_id'=>'05974',
		'name'=>'Tam Thanh',
		'type'=>'Phường',
		'location'=>'21 51 33N, 106 44 47E',
		'district_id'=>'178'
		] );
		
		Ward::create( [
		'ward_id'=>'05977',
		'name'=>'Vĩnh Trại',
		'type'=>'Phường',
		'location'=>'21 51 45N, 106 45 27E',
		'district_id'=>'178'
		] );
		
		Ward::create( [
		'ward_id'=>'05980',
		'name'=>'Đông Kinh',
		'type'=>'Phường',
		'location'=>'21 50 39N, 106 45 37E',
		'district_id'=>'178'
		] );
		
		Ward::create( [
		'ward_id'=>'05983',
		'name'=>'Chi Lăng',
		'type'=>'Phường',
		'location'=>'21 50 25N, 106 44 43E',
		'district_id'=>'178'
		] );
		
		Ward::create( [
		'ward_id'=>'05986',
		'name'=>'Hoàng Đồng',
		'type'=>'Xã',
		'location'=>'21 53 08N, 106 44 13E',
		'district_id'=>'178'
		] );
		
		Ward::create( [
		'ward_id'=>'05989',
		'name'=>'Quảng Lạc',
		'type'=>'Xã',
		'location'=>'21 49 40N, 106 43 19E',
		'district_id'=>'178'
		] );
		
		Ward::create( [
		'ward_id'=>'05992',
		'name'=>'Mai Pha',
		'type'=>'Xã',
		'location'=>'21 50 08N, 106 46 19E',
		'district_id'=>'178'
		] );
		
		Ward::create( [
		'ward_id'=>'05995',
		'name'=>'Thất Khê',
		'type'=>'Thị Trấn',
		'location'=>'22 15 17N, 106 28 17E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'05998',
		'name'=>'Khánh Long',
		'type'=>'Xã',
		'location'=>'22 24 49N, 106 15 38E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06001',
		'name'=>'Đoàn Kết',
		'type'=>'Xã',
		'location'=>'22 23 26N, 106 14 33E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06004',
		'name'=>'Quốc Khánh',
		'type'=>'Xã',
		'location'=>'22 22 46N, 106 31 32E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06007',
		'name'=>'Vĩnh Tiến',
		'type'=>'Xã',
		'location'=>'22 22 39N, 106 19 23E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06010',
		'name'=>'Cao Minh',
		'type'=>'Xã',
		'location'=>'22 22 08N, 106 13 56E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06013',
		'name'=>'Chí Minh',
		'type'=>'Xã',
		'location'=>'22 20 30N, 106 24 14E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06016',
		'name'=>'Tri Phương',
		'type'=>'Xã',
		'location'=>'22 19 26N, 106 29 16E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06019',
		'name'=>'Tân Tiến',
		'type'=>'Xã',
		'location'=>'22 18 23N, 106 19 18E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06022',
		'name'=>'Tân Yên',
		'type'=>'Xã',
		'location'=>'22 17 56N, 106 14 51E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06025',
		'name'=>'Đội Cấn',
		'type'=>'Xã',
		'location'=>'22 18 42N, 106 34 08E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06028',
		'name'=>'Tân Minh',
		'type'=>'Xã',
		'location'=>'22 17 51N, 106 38 13E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06031',
		'name'=>'Kim Đồng',
		'type'=>'Xã',
		'location'=>'22 16 20N, 106 23 13E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06034',
		'name'=>'Chi Lăng',
		'type'=>'Xã',
		'location'=>'22 17 22N, 106 25 40E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06037',
		'name'=>'Trung Thành',
		'type'=>'Xã',
		'location'=>'22 15 52N, 106 34 50E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06040',
		'name'=>'Đại Đồng',
		'type'=>'Xã',
		'location'=>'22 15 45N, 106 30 07E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06043',
		'name'=>'Đào Viên',
		'type'=>'Xã',
		'location'=>'22 13 22N, 106 39 13E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06046',
		'name'=>'Đề Thám',
		'type'=>'Xã',
		'location'=>'22 12 45N, 106 26 15E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06049',
		'name'=>'Kháng Chiến',
		'type'=>'Xã',
		'location'=>'22 13 57N, 106 31 41E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06052',
		'name'=>'Bắc Ái',
		'type'=>'Xã',
		'location'=>'22 14 54N, 106 19 59E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06055',
		'name'=>'Hùng Sơn',
		'type'=>'Xã',
		'location'=>'22 11 57N, 106 28 26E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06058',
		'name'=>'Quốc Việt',
		'type'=>'Xã',
		'location'=>'22 11 39N, 106 35 09E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06061',
		'name'=>'Hùng Việt',
		'type'=>'Xã',
		'location'=>'22 10 48N, 106 31 15E',
		'district_id'=>'180'
		] );
		
		Ward::create( [
		'ward_id'=>'06064',
		'name'=>'Bình Gia',
		'type'=>'Thị Trấn',
		'location'=>'21 56 59N, 106 22 10E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06067',
		'name'=>'Hưng Đạo',
		'type'=>'Xã',
		'location'=>'22 13 24N, 106 18 18E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06070',
		'name'=>'Vĩnh Yên',
		'type'=>'Xã',
		'location'=>'22 12 16N, 106 15 41E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06073',
		'name'=>'Hoa Thám',
		'type'=>'Xã',
		'location'=>'22 10 10N, 106 23 03E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06076',
		'name'=>'Quý Hòa',
		'type'=>'Xã',
		'location'=>'22 08 53N, 106 16 24E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06079',
		'name'=>'Hồng Phong',
		'type'=>'Xã',
		'location'=>'22 06 34N, 106 24 46E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06082',
		'name'=>'Yên Lỗ',
		'type'=>'Xã',
		'location'=>'22 06 04N, 106 15 21E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06085',
		'name'=>'Thiện Hòa',
		'type'=>'Xã',
		'location'=>'22 03 55N, 106 09 59E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06088',
		'name'=>'Quang Trung',
		'type'=>'Xã',
		'location'=>'22 03 50N, 106 20 41E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06091',
		'name'=>'Thiện Thuật',
		'type'=>'Xã',
		'location'=>'22 02 15N, 106 16 50E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06094',
		'name'=>'Minh Khai',
		'type'=>'Xã',
		'location'=>'22 01 31N, 106 24 17E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06097',
		'name'=>'Thiện Long',
		'type'=>'Xã',
		'location'=>'22 00 39N, 106 08 22E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06100',
		'name'=>'Hoàng Văn Thụ',
		'type'=>'Xã',
		'location'=>'21 58 53N, 106 21 10E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06103',
		'name'=>'Hòa Bình',
		'type'=>'Xã',
		'location'=>'21 59 01N, 106 13 43E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06106',
		'name'=>'Mông Ân',
		'type'=>'Xã',
		'location'=>'21 57 58N, 106 17 39E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06109',
		'name'=>'Tân Hòa',
		'type'=>'Xã',
		'location'=>'21 56 54N, 106 09 26E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06112',
		'name'=>'Tô Hiệu',
		'type'=>'Xã',
		'location'=>'21 57 04N, 106 23 17E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06115',
		'name'=>'Hồng Thái',
		'type'=>'Xã',
		'location'=>'21 56 16N, 106 26 50E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06118',
		'name'=>'Bình La',
		'type'=>'Xã',
		'location'=>'21 56 49N, 106 29 42E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06121',
		'name'=>'Tân Văn',
		'type'=>'Xã',
		'location'=>'21 54 48N, 106 25 38E',
		'district_id'=>'181'
		] );
		
		Ward::create( [
		'ward_id'=>'06124',
		'name'=>'Na Sầm',
		'type'=>'Thị Trấn',
		'location'=>'22 03 18N, 106 36 51E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06127',
		'name'=>'Trùng Khánh',
		'type'=>'Xã',
		'location'=>'22 09 12N, 106 38 50E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06130',
		'name'=>'Tân Việt',
		'type'=>'Xã',
		'location'=>'22 08 57N, 106 33 34E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06133',
		'name'=>'Bắc La',
		'type'=>'Xã',
		'location'=>'22 06 46N, 106 29 56E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06136',
		'name'=>'Thụy Hùng',
		'type'=>'Xã',
		'location'=>'22 07 29N, 106 39 23E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06139',
		'name'=>'Trùng Quán',
		'type'=>'Xã',
		'location'=>'22 06 34N, 106 34 21E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06142',
		'name'=>'Tân Tác',
		'type'=>'Xã',
		'location'=>'22 04 38N, 106 32 28E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06145',
		'name'=>'An Hùng',
		'type'=>'Xã',
		'location'=>'22 05 08N, 106 37 11E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06148',
		'name'=>'Thanh Long',
		'type'=>'Xã',
		'location'=>'22 04 31N, 106 40 28E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06151',
		'name'=>'Hội Hoan',
		'type'=>'Xã',
		'location'=>'22 03 43N, 106 28 23E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06154',
		'name'=>'Tân Lang',
		'type'=>'Xã',
		'location'=>'22 03 37N, 106 35 19E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06157',
		'name'=>'Hoàng Việt',
		'type'=>'Xã',
		'location'=>'22 01 41N, 106 37 07E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06160',
		'name'=>'Gia Miễn',
		'type'=>'Xã',
		'location'=>'22 01 02N, 106 30 14E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06163',
		'name'=>'Thành Hòa',
		'type'=>'Xã',
		'location'=>'22 01 47N, 106 33 51E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06166',
		'name'=>'Tân Thanh',
		'type'=>'Xã',
		'location'=>'22 01 23N, 106 40 30E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06169',
		'name'=>'Nam La',
		'type'=>'Xã',
		'location'=>'22 00 37N, 106 27 22E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06172',
		'name'=>'Tân Mỹ',
		'type'=>'Xã',
		'location'=>'21 58 30N, 106 39 35E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06175',
		'name'=>'Hồng Thái',
		'type'=>'Xã',
		'location'=>'21 57 39N, 106 36 44E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06178',
		'name'=>'Hoàng Văn Thụ',
		'type'=>'Xã',
		'location'=>'21 56 46N, 106 38 01E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06181',
		'name'=>'Nhạc Kỳ',
		'type'=>'Xã',
		'location'=>'21 54 19N, 106 37 16E',
		'district_id'=>'182'
		] );
		
		Ward::create( [
		'ward_id'=>'06184',
		'name'=>'Đồng Đăng',
		'type'=>'Thị Trấn',
		'location'=>'21 57 29N, 106 42 05E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06187',
		'name'=>'Cao Lộc',
		'type'=>'Thị Trấn',
		'location'=>'21 52 02N, 106 46 04E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06190',
		'name'=>'Bảo Lâm',
		'type'=>'Xã',
		'location'=>'21 58 38N, 106 45 06E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06193',
		'name'=>'Thanh Loà',
		'type'=>'Xã',
		'location'=>'21 57 41N, 106 49 53E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06196',
		'name'=>'Cao Lâu',
		'type'=>'Xã',
		'location'=>'21 55 40N, 106 54 44E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06199',
		'name'=>'Thạch Đạn',
		'type'=>'Xã',
		'location'=>'21 56 09N, 106 46 19E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06202',
		'name'=>'Xuất Lễ',
		'type'=>'Xã',
		'location'=>'21 54 43N, 107 00 10E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06205',
		'name'=>'Hồng Phong',
		'type'=>'Xã',
		'location'=>'21 55 43N, 106 40 40E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06208',
		'name'=>'Thụy Hùng',
		'type'=>'Xã',
		'location'=>'21 54 57N, 106 42 54E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06211',
		'name'=>'Lộc Yên',
		'type'=>'Xã',
		'location'=>'21 55 36N, 106 49 58E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06214',
		'name'=>'Phú Xá',
		'type'=>'Xã',
		'location'=>'21 55 01N, 106 41 29E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06217',
		'name'=>'Bình Trung',
		'type'=>'Xã',
		'location'=>'21 53 54N, 106 38 54E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06220',
		'name'=>'Hải Yến',
		'type'=>'Xã',
		'location'=>'21 53 21N, 106 51 21E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06223',
		'name'=>'Hòa Cư',
		'type'=>'Xã',
		'location'=>'21 53 18N, 106 48 11E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06226',
		'name'=>'Hợp Thành',
		'type'=>'Xã',
		'location'=>'21 52 28N, 106 46 26E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06229',
		'name'=>'Song Giáp',
		'type'=>'Xã',
		'location'=>'21 52 38N, 106 41 27E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06232',
		'name'=>'Công Sơn',
		'type'=>'Xã',
		'location'=>'21 52 04N, 106 54 18E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06235',
		'name'=>'Gia Cát',
		'type'=>'Xã',
		'location'=>'21 50 37N, 106 49 48E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06238',
		'name'=>'Mẫu Sơn',
		'type'=>'Xã',
		'location'=>'21 51 22N, 106 59 04E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06241',
		'name'=>'Xuân Long',
		'type'=>'Xã',
		'location'=>'21 49 03N, 106 40 28E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06244',
		'name'=>'Tân Liên',
		'type'=>'Xã',
		'location'=>'21 48 41N, 106 49 01E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06247',
		'name'=>'Yên Trạch',
		'type'=>'Xã',
		'location'=>'21 47 24N, 106 45 54E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06250',
		'name'=>'Tân Thành',
		'type'=>'Xã',
		'location'=>'21 46 15N, 106 40 23E',
		'district_id'=>'183'
		] );
		
		Ward::create( [
		'ward_id'=>'06253',
		'name'=>'Văn Quan',
		'type'=>'Thị Trấn',
		'location'=>'21 51 47N, 106 31 51E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06256',
		'name'=>'Trấn Ninh',
		'type'=>'Xã',
		'location'=>'21 58 19N, 106 33 55E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06259',
		'name'=>'Phú Mỹ',
		'type'=>'Xã',
		'location'=>'21 57 38N, 106 31 03E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06262',
		'name'=>'Việt Yên',
		'type'=>'Xã',
		'location'=>'21 57 24N, 106 33 12E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06265',
		'name'=>'Song Giang',
		'type'=>'Xã',
		'location'=>'21 56 25N, 106 35 30E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06268',
		'name'=>'Vân Mộng',
		'type'=>'Xã',
		'location'=>'21 55 33N, 106 33 14E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06271',
		'name'=>'Vĩnh Lại',
		'type'=>'Xã',
		'location'=>'21 53 57N, 106 33 35E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06274',
		'name'=>'Hòa Bình',
		'type'=>'Xã',
		'location'=>'21 53 59N, 106 31 15E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06277',
		'name'=>'Tú Xuyên',
		'type'=>'Xã',
		'location'=>'21 51 30N, 106 29 01E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06280',
		'name'=>'Văn An',
		'type'=>'Xã',
		'location'=>'21 53 28N, 106 36 02E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06283',
		'name'=>'Đại An',
		'type'=>'Xã',
		'location'=>'21 51 36N, 106 34 12E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06286',
		'name'=>'Khánh Khê',
		'type'=>'Xã',
		'location'=>'21 52 06N, 106 38 42E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06289',
		'name'=>'Chu Túc',
		'type'=>'Xã',
		'location'=>'21 51 14N, 106 36 54E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06292',
		'name'=>'Lương Năng',
		'type'=>'Xã',
		'location'=>'21 50 11N, 106 26 15E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06295',
		'name'=>'Đồng Giáp',
		'type'=>'Xã',
		'location'=>'21 51 18N, 106 40 51E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06298',
		'name'=>'Xuân Mai',
		'type'=>'Xã',
		'location'=>'21 49 46N, 106 32 11E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06301',
		'name'=>'Tràng Các',
		'type'=>'Xã',
		'location'=>'21 49 42N, 106 38 43E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06304',
		'name'=>'Tràng Sơn',
		'type'=>'Xã',
		'location'=>'21 49 17N, 106 34 14E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06307',
		'name'=>'Tân Đoàn',
		'type'=>'Xã',
		'location'=>'21 48 42N, 106 36 04E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06310',
		'name'=>'Bình Phúc',
		'type'=>'Xã',
		'location'=>'21 47 58N, 106 30 52E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06313',
		'name'=>'Tri Lễ',
		'type'=>'Xã',
		'location'=>'21 47 02N, 106 26 52E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06316',
		'name'=>'Tràng Phái',
		'type'=>'Xã',
		'location'=>'21 46 08N, 106 35 53E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06319',
		'name'=>'Yên Phúc',
		'type'=>'Xã',
		'location'=>'21 46 14N, 106 31 35E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06322',
		'name'=>'Hữu Lễ',
		'type'=>'Xã',
		'location'=>'21 43 35N, 106 25 31E',
		'district_id'=>'184'
		] );
		
		Ward::create( [
		'ward_id'=>'06325',
		'name'=>'Bắc Sơn',
		'type'=>'Thị Trấn',
		'location'=>'21 54 26N, 106 18 46E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06328',
		'name'=>'Long Đống',
		'type'=>'Xã',
		'location'=>'21 56 03N, 106 17 41E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06331',
		'name'=>'Vạn Thủy',
		'type'=>'Xã',
		'location'=>'21 54 36N, 106 12 42E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06334',
		'name'=>'Quỳnh Sơn',
		'type'=>'Xã',
		'location'=>'21 54 57N, 106 21 24E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06337',
		'name'=>'Đồng Ý',
		'type'=>'Xã',
		'location'=>'21 53 47N, 106 14 50E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06340',
		'name'=>'Tân Tri',
		'type'=>'Xã',
		'location'=>'21 51 39N, 106 08 41E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06343',
		'name'=>'Bắc Sơn',
		'type'=>'Xã',
		'location'=>'21 53 30N, 106 21 38E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06346',
		'name'=>'Hữu Vĩnh',
		'type'=>'Xã',
		'location'=>'21 53 16N, 106 18 41E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06349',
		'name'=>'Hưng Vũ',
		'type'=>'Xã',
		'location'=>'21 51 31N, 106 21 53E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06352',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'21 52 21N, 106 16 20E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06355',
		'name'=>'Vũ Sơn',
		'type'=>'Xã',
		'location'=>'21 51 43N, 106 13 09E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06358',
		'name'=>'Chiêu Vũ',
		'type'=>'Xã',
		'location'=>'21 51 36N, 106 18 53E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06361',
		'name'=>'Tân Hương',
		'type'=>'Xã',
		'location'=>'21 49 24N, 106 14 55E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06364',
		'name'=>'Chiến Thắng',
		'type'=>'Xã',
		'location'=>'21 49 48N, 106 10 57E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06367',
		'name'=>'Vũ Lăng',
		'type'=>'Xã',
		'location'=>'21 48 29N, 106 17 46E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06370',
		'name'=>'Trấn Yên',
		'type'=>'Xã',
		'location'=>'21 46 30N, 106 21 38E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06373',
		'name'=>'Vũ Lễ',
		'type'=>'Xã',
		'location'=>'21 47 35N, 106 09 38E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06376',
		'name'=>'Nhất Hòa',
		'type'=>'Xã',
		'location'=>'21 46 24N, 106 15 55E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06379',
		'name'=>'Tân Thành',
		'type'=>'Xã',
		'location'=>'21 45 17N, 106 11 50E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06382',
		'name'=>'Nhất Tiến',
		'type'=>'Xã',
		'location'=>'21 42 49N, 106 16 44E',
		'district_id'=>'185'
		] );
		
		Ward::create( [
		'ward_id'=>'06385',
		'name'=>'Hữu Lũng',
		'type'=>'Thị Trấn',
		'location'=>'21 30 34N, 106 20 34E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06388',
		'name'=>'Hữu Liên',
		'type'=>'Xã',
		'location'=>'21 42 14N, 106 22 10E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06391',
		'name'=>'Yên Bình',
		'type'=>'Xã',
		'location'=>'21 38 26N, 106 15 09E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06394',
		'name'=>'Quyết Thắng',
		'type'=>'Xã',
		'location'=>'21 38 29N, 106 12 54E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06397',
		'name'=>'Hòa Bình',
		'type'=>'Xã',
		'location'=>'21 37 31N, 106 18 28E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06400',
		'name'=>'Yên Thịnh',
		'type'=>'Xã',
		'location'=>'21 37 40N, 106 20 47E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06403',
		'name'=>'Yên Sơn',
		'type'=>'Xã',
		'location'=>'21 36 37N, 106 24 38E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06406',
		'name'=>'Thiện Kỵ',
		'type'=>'Xã',
		'location'=>'21 34 39N, 106 11 28E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06409',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'21 35 08N, 106 14 25E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06412',
		'name'=>'Yên Vượng',
		'type'=>'Xã',
		'location'=>'21 34 41N, 106 19 51E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06415',
		'name'=>'Minh Tiến',
		'type'=>'Xã',
		'location'=>'21 33 18N, 106 16 35E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06418',
		'name'=>'Nhật Tiến',
		'type'=>'Xã',
		'location'=>'21 32 09N, 106 19 08E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06421',
		'name'=>'Thanh Sơn',
		'type'=>'Xã',
		'location'=>'21 32 38N, 106 13 15E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06424',
		'name'=>'Đồng Tân',
		'type'=>'Xã',
		'location'=>'21 31 36N, 106 21 41E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06427',
		'name'=>'Cai Kinh',
		'type'=>'Xã',
		'location'=>'21 32 29N, 106 24 09E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06430',
		'name'=>'Hòa Lạc',
		'type'=>'Xã',
		'location'=>'21 32 33N, 106 28 32E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06433',
		'name'=>'Vân Nham',
		'type'=>'Xã',
		'location'=>'21 31 50N, 106 14 27E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06436',
		'name'=>'Đồng Tiến',
		'type'=>'Xã',
		'location'=>'21 31 21N, 106 11 44E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06439',
		'name'=>'Đô Lương',
		'type'=>'Xã',
		'location'=>'21 30 35N, 106 15 41E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06442',
		'name'=>'Tân Thành',
		'type'=>'Xã',
		'location'=>'21 29 08N, 106 25 57E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06445',
		'name'=>'Hòa Sơn',
		'type'=>'Xã',
		'location'=>'21 29 19N, 106 28 29E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06448',
		'name'=>'Minh Sơn',
		'type'=>'Xã',
		'location'=>'21 29 05N, 106 18 42E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06451',
		'name'=>'Hồ Sơn',
		'type'=>'Xã',
		'location'=>'21 29 53N, 106 23 06E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06454',
		'name'=>'Sơn Hà',
		'type'=>'Xã',
		'location'=>'21 29 40N, 106 20 52E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06457',
		'name'=>'Minh Hòa',
		'type'=>'Xã',
		'location'=>'21 27 44N, 106 20 20E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06460',
		'name'=>'Hòa Thắng',
		'type'=>'Xã',
		'location'=>'21 26 18N, 106 22 06E',
		'district_id'=>'186'
		] );
		
		Ward::create( [
		'ward_id'=>'06463',
		'name'=>'Đồng Mỏ',
		'type'=>'Thị Trấn',
		'location'=>'21 39 46N, 106 34 31E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06466',
		'name'=>'Chi Lăng',
		'type'=>'Thị Trấn',
		'location'=>'21 33 59N, 106 29 54E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06469',
		'name'=>'Vân An',
		'type'=>'Xã',
		'location'=>'21 45 28N, 106 47 41E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06472',
		'name'=>'Vân Thủy',
		'type'=>'Xã',
		'location'=>'21 44 58N, 106 43 13E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06475',
		'name'=>'Gia Lộc',
		'type'=>'Xã',
		'location'=>'21 44 01N, 106 33 07E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06478',
		'name'=>'Bắc Thủy',
		'type'=>'Xã',
		'location'=>'21 43 38N, 106 40 25E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06481',
		'name'=>'Chiến Thắng',
		'type'=>'Xã',
		'location'=>'21 43 28N, 106 45 04E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06484',
		'name'=>'Mai Sao',
		'type'=>'Xã',
		'location'=>'21 42 29N, 106 36 57E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06487',
		'name'=>'Bằng Hữu',
		'type'=>'Xã',
		'location'=>'21 43 57N, 106 28 55E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06490',
		'name'=>'Thượng Cường',
		'type'=>'Xã',
		'location'=>'21 41 42N, 106 34 02E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06493',
		'name'=>'Bằng Mạc',
		'type'=>'Xã',
		'location'=>'21 41 22N, 106 29 31E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06496',
		'name'=>'Nhân Lý',
		'type'=>'Xã',
		'location'=>'21 41 02N, 106 39 15E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06499',
		'name'=>'Lâm Sơn',
		'type'=>'Xã',
		'location'=>'21 40 04N, 106 41 12E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06502',
		'name'=>'Liên Sơn',
		'type'=>'Xã',
		'location'=>'21 40 31N, 106 44 29E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06505',
		'name'=>'Vạn Linh',
		'type'=>'Xã',
		'location'=>'21 39 10N, 106 28 17E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06508',
		'name'=>'Hòa Bình',
		'type'=>'Xã',
		'location'=>'21 39 55N, 106 32 16E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06511',
		'name'=>'Quang Lang',
		'type'=>'Xã',
		'location'=>'21 38 18N, 106 34 36E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06514',
		'name'=>'Hữu Kiên',
		'type'=>'Xã',
		'location'=>'21 36 22N, 106 43 54E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06517',
		'name'=>'Quan Sơn',
		'type'=>'Xã',
		'location'=>'21 37 47N, 106 38 18E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06520',
		'name'=>'Y Tịch',
		'type'=>'Xã',
		'location'=>'21 36 33N, 106 29 26E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06523',
		'name'=>'Chi Lăng',
		'type'=>'Xã',
		'location'=>'21 35 42N, 106 31 50E',
		'district_id'=>'187'
		] );
		
		Ward::create( [
		'ward_id'=>'06526',
		'name'=>'Na Dương',
		'type'=>'Thị Trấn',
		'location'=>'21 41 31N, 106 58 00E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06529',
		'name'=>'Lộc Bình',
		'type'=>'Thị Trấn',
		'location'=>'21 45 32N, 106 55 28E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06532',
		'name'=>'Mẫu Sơn',
		'type'=>'Xã',
		'location'=>'21 49 39N, 106 56 59E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06535',
		'name'=>'Bằng Khánh',
		'type'=>'Xã',
		'location'=>'21 48 41N, 106 52 48E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06538',
		'name'=>'Xuân Lễ',
		'type'=>'Xã',
		'location'=>'21 48 53N, 106 51 27E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06541',
		'name'=>'Yên Khoái',
		'type'=>'Xã',
		'location'=>'21 48 05N, 107 00 23E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06544',
		'name'=>'Xuân Mãn',
		'type'=>'Xã',
		'location'=>'21 48 03N, 106 53 32E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06547',
		'name'=>'Tú Mịch',
		'type'=>'Xã',
		'location'=>'21 46 46N, 107 04 12E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06550',
		'name'=>'Hữu Khánh',
		'type'=>'Xã',
		'location'=>'21 46 24N, 106 56 43E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06553',
		'name'=>'Đồng Bục',
		'type'=>'Xã',
		'location'=>'21 47 05N, 106 54 16E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06556',
		'name'=>'Vân Mộng',
		'type'=>'Xã',
		'location'=>'21 46 40N, 106 51 04E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06559',
		'name'=>'Tam Gia',
		'type'=>'Xã',
		'location'=>'21 44 29N, 107 08 32E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06562',
		'name'=>'Tú Đoạn',
		'type'=>'Xã',
		'location'=>'21 45 02N, 106 58 15E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06565',
		'name'=>'Khuất Xá',
		'type'=>'Xã',
		'location'=>'21 44 51N, 107 01 06E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06568',
		'name'=>'Như Khuê',
		'type'=>'Xã',
		'location'=>'21 45 30N, 106 52 20E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06571',
		'name'=>'Lục Thôn',
		'type'=>'Xã',
		'location'=>'21 45 10N, 106 54 19E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06574',
		'name'=>'Tĩnh Bắc',
		'type'=>'Xã',
		'location'=>'21 42 42N, 107 04 44E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06577',
		'name'=>'Xuân Tình',
		'type'=>'Xã',
		'location'=>'21 44 37N, 106 50 26E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06580',
		'name'=>'Hiệp Hạ',
		'type'=>'Xã',
		'location'=>'21 43 30N, 106 49 38E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06583',
		'name'=>'Nhượng Bạn',
		'type'=>'Xã',
		'location'=>'21 43 21N, 106 51 53E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06586',
		'name'=>'Quan Bản',
		'type'=>'Xã',
		'location'=>'21 43 22N, 106 55 14E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06589',
		'name'=>'Sàn Viên',
		'type'=>'Xã',
		'location'=>'21 40 44N, 107 00 38E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06592',
		'name'=>'Đông Quan',
		'type'=>'Xã',
		'location'=>'21 39 20N, 106 55 50E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06595',
		'name'=>'Minh Phát',
		'type'=>'Xã',
		'location'=>'21 41 24N, 106 49 23E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06598',
		'name'=>'Hữu Lân',
		'type'=>'Xã',
		'location'=>'21 37 44N, 106 48 14E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06601',
		'name'=>'Lợi Bác',
		'type'=>'Xã',
		'location'=>'21 37 05N, 106 58 40E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06604',
		'name'=>'Nam Quan',
		'type'=>'Xã',
		'location'=>'21 38 10N, 106 53 29E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06607',
		'name'=>'Xuân Dương',
		'type'=>'Xã',
		'location'=>'21 35 04N, 106 50 46E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06610',
		'name'=>'Ái Quốc',
		'type'=>'Xã',
		'location'=>'21 33 15N, 106 54 41E',
		'district_id'=>'188'
		] );
		
		Ward::create( [
		'ward_id'=>'06613',
		'name'=>'Đình Lập',
		'type'=>'Thị Trấn',
		'location'=>'21 33 06N, 107 05 31E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06616',
		'name'=>'N T Thái Bình',
		'type'=>'Thị Trấn',
		'location'=>'21 28 26N, 107 01 30E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06619',
		'name'=>'Bắc Xa',
		'type'=>'Xã',
		'location'=>'21 39 57N, 107 07 45E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06622',
		'name'=>'Bính Xá',
		'type'=>'Xã',
		'location'=>'21 38 45N, 107 09 36E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06625',
		'name'=>'Kiên Mộc',
		'type'=>'Xã',
		'location'=>'21 36 00N, 107 12 45E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06628',
		'name'=>'Đình Lập',
		'type'=>'Xã',
		'location'=>'21 35 38N, 107 04 10E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06631',
		'name'=>'Thái Bình',
		'type'=>'Xã',
		'location'=>'21 30 00N, 106 58 20E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06634',
		'name'=>'Cường Lợi',
		'type'=>'Xã',
		'location'=>'21 29 31N, 107 05 57E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06637',
		'name'=>'Châu Sơn',
		'type'=>'Xã',
		'location'=>'21 28 32N, 107 11 09E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06640',
		'name'=>'Lâm Ca',
		'type'=>'Xã',
		'location'=>'21 23 51N, 107 02 36E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06643',
		'name'=>'Đồng Thắng',
		'type'=>'Xã',
		'location'=>'21 24 36N, 107 08 12E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06646',
		'name'=>'Bắc Lãng',
		'type'=>'Xã',
		'location'=>'21 24 19N, 107 12 34E',
		'district_id'=>'189'
		] );
		
		Ward::create( [
		'ward_id'=>'06649',
		'name'=>'Hà Khánh',
		'type'=>'Phường',
		'location'=>'21 00 06N, 107 07 49E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06652',
		'name'=>'Hà Phong',
		'type'=>'Phường',
		'location'=>'20 57 44N, 107 09 34E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06655',
		'name'=>'Hà Khẩu',
		'type'=>'Phường',
		'location'=>'20 58 54N, 106 59 34E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06658',
		'name'=>'Cao Xanh',
		'type'=>'Phường',
		'location'=>'20 58 38N, 107 04 30E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06661',
		'name'=>'Giếng Đáy',
		'type'=>'Phường',
		'location'=>'20 58 47N, 107 01 12E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06664',
		'name'=>'Hà Tu',
		'type'=>'Phường',
		'location'=>'20 57 25N, 107 08 46E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06667',
		'name'=>'Hà Trung',
		'type'=>'Phường',
		'location'=>'20 58 11N, 107 07 17E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06670',
		'name'=>'Hà Lầm',
		'type'=>'Phường',
		'location'=>'20 58 25N, 107 06 43E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06673',
		'name'=>'Bãi Cháy',
		'type'=>'Phường',
		'location'=>'20 57 57N, 107 02 05E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06676',
		'name'=>'Cao Thắng',
		'type'=>'Phường',
		'location'=>'20 58 08N, 107 05 39E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06679',
		'name'=>'Hùng Thắng',
		'type'=>'Phường',
		'location'=>'20 57 37N, 107 00 12E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06682',
		'name'=>'Yết Kiêu',
		'type'=>'Phường',
		'location'=>'20 57 41N, 107 04 24E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06685',
		'name'=>'Trần Hưng Đạo',
		'type'=>'Phường',
		'location'=>'20 57 23N, 107 04 54E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06688',
		'name'=>'Hồng Hải',
		'type'=>'Phường',
		'location'=>'20 57 00N, 107 06 18E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06691',
		'name'=>'Hồng Gai',
		'type'=>'Phường',
		'location'=>'20 57 06N, 107 04 12E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06694',
		'name'=>'Bạch Đằng',
		'type'=>'Phường',
		'location'=>'20 57 05N, 107 05 09E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06697',
		'name'=>'Hồng Hà',
		'type'=>'Phường',
		'location'=>'20 56 38N, 107 07 18E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06700',
		'name'=>'Tuần Châu',
		'type'=>'Phường',
		'location'=>'20 55 31N, 106 58 26E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06703',
		'name'=>'Việt Hưng',
		'type'=>'Xã',
		'location'=>'20 59 18N, 106 58 18E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06706',
		'name'=>'Đại Yên',
		'type'=>'Xã',
		'location'=>'20 58 13N, 106 55 34E',
		'district_id'=>'193'
		] );
		
		Ward::create( [
		'ward_id'=>'06709',
		'name'=>'Ka Long',
		'type'=>'Phường',
		'location'=>'21 31 49N, 107 57 47E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06712',
		'name'=>'Trần Phú',
		'type'=>'Phường',
		'location'=>'21 32 09N, 107 58 13E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06715',
		'name'=>'Ninh Dương',
		'type'=>'Phường',
		'location'=>'21 30 43N, 107 56 43E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06718',
		'name'=>'Hoà Lạc',
		'type'=>'Phường',
		'location'=>'21 31 37N, 107 58 01E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06721',
		'name'=>'Trà Cổ',
		'type'=>'Phường',
		'location'=>'21 28 47N, 108 03 18E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06724',
		'name'=>'Hải Sơn',
		'type'=>'Xã',
		'location'=>'21 36 26N, 107 47 17E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06727',
		'name'=>'Bắc Sơn',
		'type'=>'Xã',
		'location'=>'21 36 24N, 107 50 12E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06730',
		'name'=>'Hải Đông',
		'type'=>'Xã',
		'location'=>'21 30 26N, 107 51 59E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06733',
		'name'=>'Hải Tiến',
		'type'=>'Xã',
		'location'=>'21 30 02N, 107 50 04E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06736',
		'name'=>'Hải Yên',
		'type'=>'Phường',
		'location'=>'21 31 19N, 107 55 00E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06739',
		'name'=>'Quảng Nghĩa',
		'type'=>'Xã',
		'location'=>'21 31 11N, 107 46 47E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06742',
		'name'=>'Hải Hoà',
		'type'=>'Phường',
		'location'=>'21 31 07N, 108 01 13E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06745',
		'name'=>'Hải Xuân',
		'type'=>'Xã',
		'location'=>'21 29 35N, 107 59 15E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06748',
		'name'=>'Vạn Ninh',
		'type'=>'Xã',
		'location'=>'21 26 56N, 107 55 05E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06751',
		'name'=>'Bình Ngọc',
		'type'=>'Xã',
		'location'=>'21 26 44N, 107 59 25E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06754',
		'name'=>'Vĩnh Trung',
		'type'=>'Xã',
		'location'=>'21 19 41N, 107 52 16E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06757',
		'name'=>'Vĩnh Thực',
		'type'=>'Xã',
		'location'=>'21 19 29N, 107 58 06E',
		'district_id'=>'194'
		] );
		
		Ward::create( [
		'ward_id'=>'06760',
		'name'=>'Mông Dương',
		'type'=>'Phường',
		'location'=>'21 06 50N, 107 18 01E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06763',
		'name'=>'Cửa Ông',
		'type'=>'Phường',
		'location'=>'21 01 53N, 107 21 23E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06766',
		'name'=>'Cẩm Sơn',
		'type'=>'Phường',
		'location'=>'21 01 01N, 107 18 35E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06769',
		'name'=>'Cẩm Đông',
		'type'=>'Phường',
		'location'=>'21 01 02N, 107 17 55E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06772',
		'name'=>'Cẩm Phú',
		'type'=>'Phường',
		'location'=>'21 00 09N, 107 19 48E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06775',
		'name'=>'Cẩm Tây',
		'type'=>'Phường',
		'location'=>'21 01 36N, 107 16 57E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06778',
		'name'=>'Quang Hanh',
		'type'=>'Phường',
		'location'=>'20 59 16N, 107 12 39E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06781',
		'name'=>'Cẩm Thịnh',
		'type'=>'Phường',
		'location'=>'20 59 47N, 107 21 03E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06784',
		'name'=>'Cẩm Thủy',
		'type'=>'Phường',
		'location'=>'21 00 39N, 107 15 47E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06787',
		'name'=>'Cẩm Thạch',
		'type'=>'Phường',
		'location'=>'21 00 18N, 107 15 00E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06790',
		'name'=>'Cẩm Thành',
		'type'=>'Phường',
		'location'=>'21 00 40N, 107 16 36E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06793',
		'name'=>'Cẩm Trung',
		'type'=>'Phường',
		'location'=>'21 00 36N, 107 16 11E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06796',
		'name'=>'Cẩm Bình',
		'type'=>'Phường',
		'location'=>'21 00 23N, 107 17 00E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06799',
		'name'=>'Cộng Hòa',
		'type'=>'Xã',
		'location'=>'21 09 28N, 107 21 46E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06802',
		'name'=>'Cẩm Hải',
		'type'=>'Xã',
		'location'=>'21 06 25N, 107 20 39E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06805',
		'name'=>'Dương Huy',
		'type'=>'Xã',
		'location'=>'21 03 33N, 107 14 17E',
		'district_id'=>'195'
		] );
		
		Ward::create( [
		'ward_id'=>'06808',
		'name'=>'Vàng Danh',
		'type'=>'Phường',
		'location'=>'21 06 56N, 106 48 21E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06811',
		'name'=>'Thanh Sơn',
		'type'=>'Phường',
		'location'=>'21 03 33N, 106 45 13E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06814',
		'name'=>'Bắc Sơn',
		'type'=>'Phường',
		'location'=>'21 03 16N, 106 48 36E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06817',
		'name'=>'Quang Trung',
		'type'=>'Phường',
		'location'=>'21 01 59N, 106 46 36E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06820',
		'name'=>'Trưng Vương',
		'type'=>'Phường',
		'location'=>'21 01 46N, 106 47 38E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06823',
		'name'=>'Nam Khê',
		'type'=>'Phường',
		'location'=>'21 01 37N, 106 49 03E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06826',
		'name'=>'Yên Thanh',
		'type'=>'Phường',
		'location'=>'21 00 50N, 106 44 48E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06829',
		'name'=>'Thượng Yên Công',
		'type'=>'Xã',
		'location'=>'21 07 21N, 106 44 16E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06832',
		'name'=>'Phương Đông',
		'type'=>'Xã',
		'location'=>'21 03 42N, 106 43 30E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06835',
		'name'=>'Phương Nam',
		'type'=>'Xã',
		'location'=>'21 01 05N, 106 41 39E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'06838',
		'name'=>'Bình Liêu',
		'type'=>'Thị Trấn',
		'location'=>'21 31 32N, 107 23 41E',
		'district_id'=>'198'
		] );
		
		Ward::create( [
		'ward_id'=>'06841',
		'name'=>'Hoành Mô',
		'type'=>'Xã',
		'location'=>'21 35 14N, 107 29 12E',
		'district_id'=>'198'
		] );
		
		Ward::create( [
		'ward_id'=>'06844',
		'name'=>'Đồng Tâm',
		'type'=>'Xã',
		'location'=>'21 35 11N, 107 26 08E',
		'district_id'=>'198'
		] );
		
		Ward::create( [
		'ward_id'=>'06847',
		'name'=>'Đồng Văn',
		'type'=>'Xã',
		'location'=>'21 34 04N, 107 34 22E',
		'district_id'=>'198'
		] );
		
		Ward::create( [
		'ward_id'=>'06850',
		'name'=>'Tình Húc',
		'type'=>'Xã',
		'location'=>'21 31 59N, 107 23 23E',
		'district_id'=>'198'
		] );
		
		Ward::create( [
		'ward_id'=>'06853',
		'name'=>'Vô Ngại',
		'type'=>'Xã',
		'location'=>'21 31 10N, 107 20 44E',
		'district_id'=>'198'
		] );
		
		Ward::create( [
		'ward_id'=>'06856',
		'name'=>'Lục Hồn',
		'type'=>'Xã',
		'location'=>'21 32 52N, 107 25 57E',
		'district_id'=>'198'
		] );
		
		Ward::create( [
		'ward_id'=>'06859',
		'name'=>'Húc Động',
		'type'=>'Xã',
		'location'=>'21 28 59N, 107 28 59E',
		'district_id'=>'198'
		] );
		
		Ward::create( [
		'ward_id'=>'06862',
		'name'=>'Tiên Yên',
		'type'=>'Thị Trấn',
		'location'=>'21 19 55N, 107 23 24E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06865',
		'name'=>'Hà Lâu',
		'type'=>'Xã',
		'location'=>'21 28 45N, 107 16 19E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06868',
		'name'=>'Đại Dực',
		'type'=>'Xã',
		'location'=>'21 25 47N, 107 25 35E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06869',
		'name'=>'Đại Thành',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06871',
		'name'=>'Phong Dụ',
		'type'=>'Xã',
		'location'=>'21 24 43N, 107 22 38E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06874',
		'name'=>'Điền Xá',
		'type'=>'Xã',
		'location'=>'21 21 48N, 107 17 46E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06877',
		'name'=>'Đông Ngũ',
		'type'=>'Xã',
		'location'=>'21 20 42N, 107 27 23E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06880',
		'name'=>'Yên Than',
		'type'=>'Xã',
		'location'=>'21 21 22N, 107 21 42E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06883',
		'name'=>'Đông Hải',
		'type'=>'Xã',
		'location'=>'21 19 42N, 107 31 15E',
		'district_id'=>'199'
		] );			
		Ward::create( [
		'ward_id'=>'06886',
		'name'=>'Hải Lạng',
		'type'=>'Xã',
		'location'=>'21 17 00N, 107 22 45E',
		'district_id'=>'199'
		] );


		// ------------------
		Ward::create( [
		'ward_id'=>'06889',
		'name'=>'Tiên Lãng',
		'type'=>'Xã',
		'location'=>'21 18 24N, 107 26 17E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06892',
		'name'=>'Đồng Rui',
		'type'=>'Xã',
		'location'=>'21 13 25N, 107 24 16E',
		'district_id'=>'199'
		] );
		
		Ward::create( [
		'ward_id'=>'06895',
		'name'=>'Đầm Hà',
		'type'=>'Thị Trấn',
		'location'=>'21 21 05N, 107 35 45E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06898',
		'name'=>'Quảng Lâm',
		'type'=>'Xã',
		'location'=>'21 26 43N, 107 33 35E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06901',
		'name'=>'Quảng An',
		'type'=>'Xã',
		'location'=>'21 24 49N, 107 31 08E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06904',
		'name'=>'Tân Bình',
		'type'=>'Xã',
		'location'=>'21 21 41N, 107 38 24E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06907',
		'name'=>'Quảng Lợi',
		'type'=>'Xã',
		'location'=>'21 23 01N, 107 34 57E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06910',
		'name'=>'Dực Yên',
		'type'=>'Xã',
		'location'=>'21 21 26N, 107 32 19E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06913',
		'name'=>'Quảng Tân',
		'type'=>'Xã',
		'location'=>'21 21 56N, 107 35 12E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06916',
		'name'=>'Đầm Hà',
		'type'=>'Xã',
		'location'=>'21 17 04N, 107 37 06E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06917',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06919',
		'name'=>'Đại Bình',
		'type'=>'Xã',
		'location'=>'21 17 07N, 107 31 37E',
		'district_id'=>'200'
		] );
		
		Ward::create( [
		'ward_id'=>'06922',
		'name'=>'Quảng Hà',
		'type'=>'Thị Trấn',
		'location'=>'21 27 06N, 107 45 09E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06925',
		'name'=>'Quảng Đức',
		'type'=>'Xã',
		'location'=>'21 34 14N, 107 41 28E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06928',
		'name'=>'Quảng Sơn',
		'type'=>'Xã',
		'location'=>'21 31 32N, 107 36 40E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06931',
		'name'=>'Quảng Thành',
		'type'=>'Xã',
		'location'=>'21 30 18N, 107 44 09E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06934',
		'name'=>'Quảng Thắng',
		'type'=>'Xã',
		'location'=>'21 29 07N, 107 47 23E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06937',
		'name'=>'Quảng Thịnh',
		'type'=>'Xã',
		'location'=>'21 28 39N, 107 43 00E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06940',
		'name'=>'Quảng Minh',
		'type'=>'Xã',
		'location'=>'21 27 07N, 107 47 15E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06943',
		'name'=>'Quảng Chính',
		'type'=>'Xã',
		'location'=>'21 27 31N, 107 43 53E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06946',
		'name'=>'Quảng Long',
		'type'=>'Xã',
		'location'=>'21 27 15N, 107 41 58E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06949',
		'name'=>'Đường Hoa',
		'type'=>'Xã',
		'location'=>'21 24 42N, 107 38 37E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06952',
		'name'=>'Quảng Phong',
		'type'=>'Xã',
		'location'=>'21 23 29N, 107 42 59E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06955',
		'name'=>'Quảng Trung',
		'type'=>'Xã',
		'location'=>'21 26 23N, 107 44 49E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06958',
		'name'=>'Phú Hải',
		'type'=>'Xã',
		'location'=>'21 25 24N, 107 47 05E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06961',
		'name'=>'Quảng Điền',
		'type'=>'Xã',
		'location'=>'21 24 18N, 107 45 40E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06964',
		'name'=>'Tiến Tới',
		'type'=>'Xã',
		'location'=>'21 23 40N, 107 43 21E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06967',
		'name'=>'Cái Chiên',
		'type'=>'Xã',
		'location'=>'21 18 31N, 107 44 45E',
		'district_id'=>'201'
		] );
		
		Ward::create( [
		'ward_id'=>'06970',
		'name'=>'Ba Chẽ',
		'type'=>'Thị Trấn',
		'location'=>'21 16 08N, 107 17 20E',
		'district_id'=>'202'
		] );
		
		Ward::create( [
		'ward_id'=>'06973',
		'name'=>'Thanh Sơn',
		'type'=>'Xã',
		'location'=>'21 18 11N, 107 12 34E',
		'district_id'=>'202'
		] );
		
		Ward::create( [
		'ward_id'=>'06976',
		'name'=>'Thanh Lâm',
		'type'=>'Xã',
		'location'=>'21 19 06N, 107 08 47E',
		'district_id'=>'202'
		] );
		
		Ward::create( [
		'ward_id'=>'06979',
		'name'=>'Đạp Thanh',
		'type'=>'Xã',
		'location'=>'21 17 40N, 107 06 05E',
		'district_id'=>'202'
		] );
		
		Ward::create( [
		'ward_id'=>'06982',
		'name'=>'Nam Sơn',
		'type'=>'Xã',
		'location'=>'21 15 04N, 107 18 08E',
		'district_id'=>'202'
		] );
		
		Ward::create( [
		'ward_id'=>'06985',
		'name'=>'Lương Mông',
		'type'=>'Xã',
		'location'=>'21 16 05N, 107 01 32E',
		'district_id'=>'202'
		] );
		
		Ward::create( [
		'ward_id'=>'06988',
		'name'=>'Đồn Đạc',
		'type'=>'Xã',
		'location'=>'21 12 06N, 107 14 43E',
		'district_id'=>'202'
		] );
		
		Ward::create( [
		'ward_id'=>'06991',
		'name'=>'Minh Cầm',
		'type'=>'Xã',
		'location'=>'21 13 56N, 107 03 28E',
		'district_id'=>'202'
		] );
		
		Ward::create( [
		'ward_id'=>'06994',
		'name'=>'Cái Rồng',
		'type'=>'Thị Trấn',
		'location'=>'21 03 33N, 107 26 03E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'06997',
		'name'=>'Đài Xuyên',
		'type'=>'Xã',
		'location'=>'21 12 38N, 107 29 12E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07000',
		'name'=>'Bình Dân',
		'type'=>'Xã',
		'location'=>'21 09 58N, 107 26 08E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07003',
		'name'=>'Vạn Yên',
		'type'=>'Xã',
		'location'=>'21 08 59N, 107 38 01E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07006',
		'name'=>'Minh Châu',
		'type'=>'Xã',
		'location'=>'21 01 38N, 107 36 22E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07009',
		'name'=>'Đoàn Kết',
		'type'=>'Xã',
		'location'=>'21 05 53N, 107 24 34E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07012',
		'name'=>'Hạ Long',
		'type'=>'Xã',
		'location'=>'21 03 49N, 107 28 42E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07015',
		'name'=>'Đông Xá',
		'type'=>'Xã',
		'location'=>'20 59 43N, 104 24 03E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07018',
		'name'=>'Bản Sen',
		'type'=>'Xã',
		'location'=>'20 58 25N, 107 27 50E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07021',
		'name'=>'Thắng Lợi',
		'type'=>'Xã',
		'location'=>'20 55 10N, 107 19 47E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07024',
		'name'=>'Quan Lạn',
		'type'=>'Xã',
		'location'=>'20 50 28N, 107 29 02E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07027',
		'name'=>'Ngọc Vừng',
		'type'=>'Xã',
		'location'=>'20 44 47N, 107 18 35E',
		'district_id'=>'203'
		] );
		
		Ward::create( [
		'ward_id'=>'07030',
		'name'=>'Trới',
		'type'=>'Thị Trấn',
		'location'=>'21 02 04N, 106 59 13E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07033',
		'name'=>'Kỳ Thượng',
		'type'=>'Xã',
		'location'=>'21 11 13N, 107 09 00E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07036',
		'name'=>'Đồng Sơn',
		'type'=>'Xã',
		'location'=>'21 10 45N, 107 01 04E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07039',
		'name'=>'Tân Dân',
		'type'=>'Xã',
		'location'=>'21 08 41N, 106 53 06E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07042',
		'name'=>'Đồng Lâm',
		'type'=>'Xã',
		'location'=>'21 06 55N, 107 00 53E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07045',
		'name'=>'Hòa Bình',
		'type'=>'Xã',
		'location'=>'21 05 21N, 107 12 24E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07048',
		'name'=>'Vũ Oai',
		'type'=>'Xã',
		'location'=>'21 05 12N, 107 08 34E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07051',
		'name'=>'Dân Chủ',
		'type'=>'Xã',
		'location'=>'21 04 19N, 106 55 13E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07054',
		'name'=>'Quảng La',
		'type'=>'Xã',
		'location'=>'21 04 32N, 106 52 28E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07057',
		'name'=>'Bằng Cả',
		'type'=>'Xã',
		'location'=>'21 04 41N, 106 51 25E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07060',
		'name'=>'Thống Nhất',
		'type'=>'Xã',
		'location'=>'21 02 25N, 107 05 40E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07063',
		'name'=>'Sơn Dương',
		'type'=>'Xã',
		'location'=>'21 03 15N, 106 58 32E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07066',
		'name'=>'Lê Lợi',
		'type'=>'Xã',
		'location'=>'21 00 54N, 107 01 38E',
		'district_id'=>'204'
		] );
		
		Ward::create( [
		'ward_id'=>'07069',
		'name'=>'Mạo Khê',
		'type'=>'Thị Trấn',
		'location'=>'21 03 58N, 106 36 10E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07072',
		'name'=>'Đông Triều',
		'type'=>'Thị Trấn',
		'location'=>'21 05 04N, 106 30 37E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07075',
		'name'=>'An Sinh',
		'type'=>'Xã',
		'location'=>'21 10 11N, 106 32 00E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07078',
		'name'=>'Tràng Lương',
		'type'=>'Xã',
		'location'=>'21 08 05N, 106 39 39E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07081',
		'name'=>'Bình Khê',
		'type'=>'Xã',
		'location'=>'21 07 47N, 106 35 22E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07084',
		'name'=>'Việt Dân',
		'type'=>'Xã',
		'location'=>'21 06 38N, 106 30 00E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07087',
		'name'=>'Tân Việt',
		'type'=>'Xã',
		'location'=>'21 06 47N, 106 31 16E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07090',
		'name'=>'Bình Dương',
		'type'=>'Xã',
		'location'=>'21 06 35N, 106 28 00E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07093',
		'name'=>'Đức Chính',
		'type'=>'Xã',
		'location'=>'21 05 49N, 106 31 13E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07096',
		'name'=>'Tràng An',
		'type'=>'Xã',
		'location'=>'21 06 16N, 106 32 53E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07099',
		'name'=>'Nguyễn Huệ',
		'type'=>'Xã',
		'location'=>'21 05 24N, 106 27 19E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07102',
		'name'=>'Thủy An',
		'type'=>'Xã',
		'location'=>'21 05 08N, 106 28 30E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07105',
		'name'=>'Xuân Sơn',
		'type'=>'Xã',
		'location'=>'21 05 05N, 106 33 10E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07108',
		'name'=>'Hồng Thái Tây',
		'type'=>'Xã',
		'location'=>'21 03 00N, 106 40 00E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07111',
		'name'=>'Hồng Thái Đông',
		'type'=>'Xã',
		'location'=>'21 03 31N, 106 41 26E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07114',
		'name'=>'Hoàng Quế',
		'type'=>'Xã',
		'location'=>'21 03 23N, 106 38 16E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07117',
		'name'=>'Yên Thọ',
		'type'=>'Xã',
		'location'=>'21 03 42N, 106 37 00E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07120',
		'name'=>'Hồng Phong',
		'type'=>'Xã',
		'location'=>'21 04 32N, 106 30 02E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07123',
		'name'=>'Kim Sơn',
		'type'=>'Xã',
		'location'=>'21 04 12N, 106 33 29E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07126',
		'name'=>'Hưng Đạo',
		'type'=>'Xã',
		'location'=>'21 03 52N, 106 31 36E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07129',
		'name'=>'Yên Đức',
		'type'=>'Xã',
		'location'=>'21 01 34N, 106 37 40E',
		'district_id'=>'205'
		] );
		
		Ward::create( [
		'ward_id'=>'07132',
		'name'=>'Quảng Yên',
		'type'=>'Thị Trấn',
		'location'=>'20 56 24N, 106 48 06E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07135',
		'name'=>'Đông Mai',
		'type'=>'Xã',
		'location'=>'21 00 21N, 106 49 17E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07138',
		'name'=>'Minh Thành',
		'type'=>'Xã',
		'location'=>'20 59 55N, 106 52 00E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07141',
		'name'=>'Điền Công',
		'type'=>'Xã',
		'location'=>'20 59 57N, 106 46 45E',
		'district_id'=>'196'
		] );
		
		Ward::create( [
		'ward_id'=>'07144',
		'name'=>'Sông Khoai',
		'type'=>'Xã',
		'location'=>'20 58 46N, 106 48 31E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07147',
		'name'=>'Hiệp Hòa',
		'type'=>'Xã',
		'location'=>'20 57 35N, 106 47 42E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07150',
		'name'=>'Cộng Hòa',
		'type'=>'Xã',
		'location'=>'20 56 57N, 106 49 30E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07153',
		'name'=>'Tiền An',
		'type'=>'Xã',
		'location'=>'20 56 36N, 106 50 32E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07156',
		'name'=>'Hoàng Tân',
		'type'=>'Xã',
		'location'=>'20 54 07N, 106 55 10E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07159',
		'name'=>'Tân An',
		'type'=>'Xã',
		'location'=>'20 56 24N, 106 52 31E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07162',
		'name'=>'Yên Giang',
		'type'=>'Xã',
		'location'=>'20 56 34N, 106 47 03E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07165',
		'name'=>'Nam Hòa',
		'type'=>'Xã',
		'location'=>'20 55 19N, 106 47 12E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07168',
		'name'=>'Hà An',
		'type'=>'Xã',
		'location'=>'20 53 47N, 106 51 28E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07171',
		'name'=>'Cẩm La',
		'type'=>'Xã',
		'location'=>'20 55 03N, 106 48 39E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07174',
		'name'=>'Phong Hải',
		'type'=>'Xã',
		'location'=>'20 54 30N, 106 49 39E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07177',
		'name'=>'Yên Hải',
		'type'=>'Xã',
		'location'=>'20 53 30N, 106 46 59E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07180',
		'name'=>'Liên Hòa',
		'type'=>'Xã',
		'location'=>'20 51 53N, 106 51 03E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07183',
		'name'=>'Phong Cốc',
		'type'=>'Xã',
		'location'=>'20 52 30N, 106 46 09E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07186',
		'name'=>'Liên Vị',
		'type'=>'Xã',
		'location'=>'20 51 29N, 106 48 12E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07189',
		'name'=>'Tiền Phong',
		'type'=>'Xã',
		'location'=>'20 51 00N, 106 50 26E',
		'district_id'=>'206'
		] );
		
		Ward::create( [
		'ward_id'=>'07192',
		'name'=>'Cô Tô',
		'type'=>'Thị Trấn',
		'location'=>'20 56 50N, 107 41 53E',
		'district_id'=>'207'
		] );
		
		Ward::create( [
		'ward_id'=>'07195',
		'name'=>'Đồng Tiến',
		'type'=>'Xã',
		'location'=>'21 04 10N, 107 45 37E',
		'district_id'=>'207'
		] );
		
		Ward::create( [
		'ward_id'=>'07198',
		'name'=>'Thanh Lân',
		'type'=>'Xã',
		'location'=>'21 07 03N, 107 54 13E',
		'district_id'=>'207'
		] );
		
		Ward::create( [
		'ward_id'=>'07201',
		'name'=>'Thọ Xương',
		'type'=>'Phường',
		'location'=>'21 17 49N, 106 11 45E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07204',
		'name'=>'Trần Nguyên Hãn',
		'type'=>'Phường',
		'location'=>'21 17 03N, 106 11 40E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07207',
		'name'=>'Ngô Quyền',
		'type'=>'Phường',
		'location'=>'21 16 54N, 106 11 57E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07210',
		'name'=>'Hoàng Văn Thụ',
		'type'=>'Phường',
		'location'=>'21 16 36N, 106 12 14E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07213',
		'name'=>'Trần Phú',
		'type'=>'Phường',
		'location'=>'21 16 41N, 106 11 19E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07216',
		'name'=>'Mỹ Độ',
		'type'=>'Phường',
		'location'=>'21 16 19N, 106 10 47E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07219',
		'name'=>'Lê Lợi',
		'type'=>'Phường',
		'location'=>'21 16 13N, 106 11 50E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07222',
		'name'=>'Song Mai',
		'type'=>'Xã',
		'location'=>'21 18 12N, 106 10 16E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07225',
		'name'=>'Xương Giang',
		'type'=>'Xã',
		'location'=>'21 17 43N, 106 12 49E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07228',
		'name'=>'Đa Mai',
		'type'=>'Xã',
		'location'=>'21 17 12N, 106 10 00E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07231',
		'name'=>'Dĩnh Kế',
		'type'=>'Xã',
		'location'=>'21 16 51N, 106 13 04E',
		'district_id'=>'213'
		] );
		
		Ward::create( [
		'ward_id'=>'07234',
		'name'=>'Cầu Gồ',
		'type'=>'Thị Trấn',
		'location'=>'21 28 31N, 106 07 23E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07237',
		'name'=>'Bố Hạ',
		'type'=>'Thị Trấn',
		'location'=>'21 26 46N, 106 11 55E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07243',
		'name'=>'Đồng Tiến',
		'type'=>'Xã',
		'location'=>'21 34 58N, 106 08 30E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07246',
		'name'=>'Canh Nậu',
		'type'=>'Xã',
		'location'=>'21 34 51N, 106 06 32E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07249',
		'name'=>'Xuân Lương',
		'type'=>'Xã',
		'location'=>'21 35 01N, 106 03 58E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07252',
		'name'=>'Tam Tiến',
		'type'=>'Xã',
		'location'=>'21 31 33N, 106 04 54E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07255',
		'name'=>'Đồng Vương',
		'type'=>'Xã',
		'location'=>'21 31 41N, 106 07 57E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07258',
		'name'=>'Đồng Hưu',
		'type'=>'Xã',
		'location'=>'21 30 20N, 106 10 34E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07260',
		'name'=>'Đồng Tâm',
		'type'=>'Xã',
		'location'=>'21 29 32N, 106 08 07E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07261',
		'name'=>'Tam Hiệp',
		'type'=>'Xã',
		'location'=>'21 29 50N, 106 07 00E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07264',
		'name'=>'Tiến Thắng',
		'type'=>'Xã',
		'location'=>'21 29 17N, 106 04 03E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07267',
		'name'=>'Hồng Kỳ',
		'type'=>'Xã',
		'location'=>'21 29 08N, 106 09 16E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07270',
		'name'=>'Đồng Lạc',
		'type'=>'Xã',
		'location'=>'21 27 44N, 106 08 49E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07273',
		'name'=>'Đông Sơn',
		'type'=>'Xã',
		'location'=>'21 28 13N, 106 14 32E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07276',
		'name'=>'Tân Hiệp',
		'type'=>'Xã',
		'location'=>'21 28 06N, 106 06 16E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07279',
		'name'=>'Hương Vĩ',
		'type'=>'Xã',
		'location'=>'21 28 14N, 106 11 57E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07282',
		'name'=>'Đồng Kỳ',
		'type'=>'Xã',
		'location'=>'21 27 57N, 106 10 33E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07285',
		'name'=>'An Thượng',
		'type'=>'Xã',
		'location'=>'21 27 44N, 106 04 33E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07288',
		'name'=>'Phồn Xương',
		'type'=>'Xã',
		'location'=>'21 28 22N, 106 07 55E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07291',
		'name'=>'Tân Sỏi',
		'type'=>'Xã',
		'location'=>'21 26 37N, 106 09 40E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07294',
		'name'=>'Bố Hạ',
		'type'=>'Xã',
		'location'=>'21 26 27N, 106 11 04E',
		'district_id'=>'215'
		] );
		
		Ward::create( [
		'ward_id'=>'07297',
		'name'=>'Cao Thượng',
		'type'=>'Thị Trấn',
		'location'=>'21 23 21N, 106 07 19E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07300',
		'name'=>'Nhã Nam',
		'type'=>'Thị Trấn',
		'location'=>'21 26 16N, 106 05 52E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07303',
		'name'=>'Lan Giới',
		'type'=>'Xã',
		'location'=>'21 27 21N, 106 03 43E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07306',
		'name'=>'Nhã Nam',
		'type'=>'Xã',
		'location'=>'21 26 49N, 106 05 28E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07309',
		'name'=>'Tân Trung',
		'type'=>'Xã',
		'location'=>'21 26 03N, 106 07 27E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07312',
		'name'=>'Đại Hóa',
		'type'=>'Xã',
		'location'=>'21 25 45N, 106 03 12E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07315',
		'name'=>'Quang Tiến',
		'type'=>'Xã',
		'location'=>'21 25 37N, 106 04 19E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07318',
		'name'=>'Phúc Sơn',
		'type'=>'Xã',
		'location'=>'21 25 27N, 106 02 19E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07321',
		'name'=>'An Dương',
		'type'=>'Xã',
		'location'=>'21 24 51N, 106 05 06E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07324',
		'name'=>'Phúc Hòa',
		'type'=>'Xã',
		'location'=>'21 25 15N, 106 08 50E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07327',
		'name'=>'Liên Sơn',
		'type'=>'Xã',
		'location'=>'21 24 52N, 106 06 53E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07330',
		'name'=>'Hợp Đức',
		'type'=>'Xã',
		'location'=>'21 24 01N, 106 09 32E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07333',
		'name'=>'Lam Cốt',
		'type'=>'Xã',
		'location'=>'21 24 12N, 106 03 02E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07336',
		'name'=>'Cao Xá',
		'type'=>'Xã',
		'location'=>'21 22 44N, 106 06 29E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07339',
		'name'=>'Cao Thượng',
		'type'=>'Xã',
		'location'=>'21 23 29N, 106 08 18E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07342',
		'name'=>'Việt Ngọc',
		'type'=>'Xã',
		'location'=>'21 22 56N, 106 01 59E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07345',
		'name'=>'Song Vân',
		'type'=>'Xã',
		'location'=>'21 22 41N, 106 03 09E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07348',
		'name'=>'Ngọc Châu',
		'type'=>'Xã',
		'location'=>'21 22 39N, 106 05 01E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07351',
		'name'=>'Ngọc Vân',
		'type'=>'Xã',
		'location'=>'21 21 31N, 106 02 27E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07354',
		'name'=>'Việt Lập',
		'type'=>'Xã',
		'location'=>'21 21 16N, 106 08 59E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07357',
		'name'=>'Liên Chung',
		'type'=>'Xã',
		'location'=>'21 21 36N, 106 10 14E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07360',
		'name'=>'Ngọc Thiện',
		'type'=>'Xã',
		'location'=>'21 20 53N, 106 04 38E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07363',
		'name'=>'Ngọc Lý',
		'type'=>'Xã',
		'location'=>'21 20 29N, 106 06 42E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07366',
		'name'=>'Quế Nham',
		'type'=>'Xã',
		'location'=>'21 19 35N, 106 09 58E',
		'district_id'=>'216'
		] );
		
		Ward::create( [
		'ward_id'=>'07369',
		'name'=>'Kép',
		'type'=>'Thị Trấn',
		'location'=>'21 24 19N, 106 16 48E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07375',
		'name'=>'Vôi',
		'type'=>'Thị Trấn',
		'location'=>'21 21 21N, 106 15 09E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07378',
		'name'=>'Nghĩa Hòa',
		'type'=>'Xã',
		'location'=>'21 26 30N, 106 14 62E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07381',
		'name'=>'Nghĩa Hưng',
		'type'=>'Xã',
		'location'=>'21 26 23N, 106 12 58E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07384',
		'name'=>'Quang Thịnh',
		'type'=>'Xã',
		'location'=>'21 26 31N, 106 16 04E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07387',
		'name'=>'Hương Sơn',
		'type'=>'Xã',
		'location'=>'21 24 41N, 106 18 42E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07390',
		'name'=>'Đào Mỹ',
		'type'=>'Xã',
		'location'=>'21 25 24N, 106 12 03E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07393',
		'name'=>'Tiên Lục',
		'type'=>'Xã',
		'location'=>'21 24 21N, 106 12 23E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07396',
		'name'=>'An Hà',
		'type'=>'Xã',
		'location'=>'21 24 57N, 106 14 09E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07399',
		'name'=>'Tân Thịnh',
		'type'=>'Xã',
		'location'=>'21 24 43N, 106 16 02E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07402',
		'name'=>'Mỹ Hà',
		'type'=>'Xã',
		'location'=>'21 24 10N, 106 10 35E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07405',
		'name'=>'Hương Lạc',
		'type'=>'Xã',
		'location'=>'21 23 12N, 106 15 46E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07408',
		'name'=>'Dương Đức',
		'type'=>'Xã',
		'location'=>'21 21 55N, 106 11 22E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07411',
		'name'=>'Tân Thanh',
		'type'=>'Xã',
		'location'=>'21 22 06N, 106 13 28E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07414',
		'name'=>'Yên Mỹ',
		'type'=>'Xã',
		'location'=>'21 21 49N, 106 15 39E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07417',
		'name'=>'Tân Hưng',
		'type'=>'Xã',
		'location'=>'21 21 19N, 106 17 34E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07420',
		'name'=>'Mỹ Thái',
		'type'=>'Xã',
		'location'=>'21 20 17N, 106 12 57E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07423',
		'name'=>'Phi Mô',
		'type'=>'Xã',
		'location'=>'21 20 13N, 106 14 27E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07426',
		'name'=>'Xương Lâm',
		'type'=>'Xã',
		'location'=>'21 19 59N, 106 16 27E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07429',
		'name'=>'Xuân Hương',
		'type'=>'Xã',
		'location'=>'21 19 15N, 106 12 16E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07432',
		'name'=>'Tân Dĩnh',
		'type'=>'Xã',
		'location'=>'21 18 41N, 106 14 30E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07435',
		'name'=>'Đại Lâm',
		'type'=>'Xã',
		'location'=>'21 18 31N, 106 17 03E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07438',
		'name'=>'Thái Đào',
		'type'=>'Xã',
		'location'=>'21 17 44N, 106 15 58E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07441',
		'name'=>'Dĩnh Trì',
		'type'=>'Xã',
		'location'=>'21 16 59N, 106 14 13E',
		'district_id'=>'217'
		] );
		
		Ward::create( [
		'ward_id'=>'07444',
		'name'=>'Đồi Ngô',
		'type'=>'Thị Trấn',
		'location'=>'21 18 23N, 106 22 57E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07447',
		'name'=>'Lục Nam',
		'type'=>'Thị Trấn',
		'location'=>'21 17 32N, 106 24 40E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07450',
		'name'=>'Đông Hưng',
		'type'=>'Xã',
		'location'=>'21 23 09N, 106 26 36E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07453',
		'name'=>'Đông Phú',
		'type'=>'Xã',
		'location'=>'21 22 22N, 106 25 11E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07456',
		'name'=>'Tam Dị',
		'type'=>'Xã',
		'location'=>'21 21 34N, 106 23 27E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07459',
		'name'=>'Bảo Sơn',
		'type'=>'Xã',
		'location'=>'21 22 10N, 106 20 18E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07462',
		'name'=>'Bảo Đài',
		'type'=>'Xã',
		'location'=>'21 20 02N, 106 21 46E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07465',
		'name'=>'Thanh Lâm',
		'type'=>'Xã',
		'location'=>'21 19 29N, 106 19 11E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07468',
		'name'=>'Tiên Nha',
		'type'=>'Xã',
		'location'=>'21 19 20N, 106 25 48E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07471',
		'name'=>'Trường Giang',
		'type'=>'Xã',
		'location'=>'21 18 29N, 106 29 24E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07474',
		'name'=>'Tiên Hưng',
		'type'=>'Xã',
		'location'=>'21 18 10N, 106 23 53E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07477',
		'name'=>'Phương Sơn',
		'type'=>'Xã',
		'location'=>'21 18 23N, 106 19 17E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07480',
		'name'=>'Chu Điện',
		'type'=>'Xã',
		'location'=>'21 18 12N, 106 21 36E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07483',
		'name'=>'Cương Sơn',
		'type'=>'Xã',
		'location'=>'21 17 47N, 106 25 28E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07486',
		'name'=>'Nghĩa Phương',
		'type'=>'Xã',
		'location'=>'21 16 20N, 106 28 09E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07489',
		'name'=>'Vô Tranh',
		'type'=>'Xã',
		'location'=>'21 16 01N, 106 31 51E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07492',
		'name'=>'Bình Sơn',
		'type'=>'Xã',
		'location'=>'21 15 50N, 106 37 30E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07495',
		'name'=>'Lan Mẫu',
		'type'=>'Xã',
		'location'=>'21 16 07N, 106 19 10E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07498',
		'name'=>'Yên Sơn',
		'type'=>'Xã',
		'location'=>'21 15 33N, 106 20 26E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07501',
		'name'=>'Khám Lạng',
		'type'=>'Xã',
		'location'=>'21 16 03N, 106 22 50E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07504',
		'name'=>'Huyền Sơn',
		'type'=>'Xã',
		'location'=>'21 15 34N, 106 24 56E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07507',
		'name'=>'Trường Sơn',
		'type'=>'Xã',
		'location'=>'21 14 04N, 106 33 41E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07510',
		'name'=>'Lục Sơn',
		'type'=>'Xã',
		'location'=>'21 13 03N, 106 37 20E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07513',
		'name'=>'Bắc Lũng',
		'type'=>'Xã',
		'location'=>'21 15 26N, 106 22 01E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07516',
		'name'=>'Vũ Xá',
		'type'=>'Xã',
		'location'=>'21 13 40N, 106 20 41E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07519',
		'name'=>'Cẩm Lý',
		'type'=>'Xã',
		'location'=>'21 12 40N, 106 22 51E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07522',
		'name'=>'Đan Hội',
		'type'=>'Xã',
		'location'=>'21 11 18N, 106 19 59E',
		'district_id'=>'218'
		] );
		
		Ward::create( [
		'ward_id'=>'07525',
		'name'=>'Chũ',
		'type'=>'Thị Trấn',
		'location'=>'21 21 45N, 106 33 14E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07528',
		'name'=>'Cấm Sơn',
		'type'=>'Xã',
		'location'=>'21 34 20N, 106 34 36E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07531',
		'name'=>'Tân Sơn',
		'type'=>'Xã',
		'location'=>'21 34 16N, 106 38 20E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07534',
		'name'=>'Phong Minh',
		'type'=>'Xã',
		'location'=>'21 32 38N, 106 44 09E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07537',
		'name'=>'Phong Vân',
		'type'=>'Xã',
		'location'=>'21 21 28N, 106 40 08E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07540',
		'name'=>'Xa Lý',
		'type'=>'Xã',
		'location'=>'21 32 31N, 106 49 14E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07543',
		'name'=>'Hộ Đáp',
		'type'=>'Xã',
		'location'=>'21 30 41N, 106 36 45E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07546',
		'name'=>'Sơn Hải',
		'type'=>'Xã',
		'location'=>'21 30 31N, 106 32 51E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07549',
		'name'=>'Thanh Hải',
		'type'=>'Xã',
		'location'=>'21 26 01N, 106 35 02E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07552',
		'name'=>'Kiên Lao',
		'type'=>'Xã',
		'location'=>'21 36 37N, 106 29 57E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07555',
		'name'=>'Biên Sơn',
		'type'=>'Xã',
		'location'=>'21 27 26N, 106 37 29E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07558',
		'name'=>'Kiên Thành',
		'type'=>'Xã',
		'location'=>'21 26 33N, 106 33 28E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07561',
		'name'=>'Hồng Giang',
		'type'=>'Xã',
		'location'=>'21 24 17N, 106 36 31E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07564',
		'name'=>'Kim Sơn',
		'type'=>'Xã',
		'location'=>'21 24 58N, 106 44 40E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07567',
		'name'=>'Tân Hoa',
		'type'=>'Xã',
		'location'=>'21 23 42N, 106 42 32E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07570',
		'name'=>'Giáp Sơn',
		'type'=>'Xã',
		'location'=>'21 24 07N, 106 39 10E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07573',
		'name'=>'Biển Động',
		'type'=>'Xã',
		'location'=>'21 23 20N, 106 44 59E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07576',
		'name'=>'Quý Sơn',
		'type'=>'Xã',
		'location'=>'21 22 41N, 106 30 34E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07579',
		'name'=>'Trù Hựu',
		'type'=>'Xã',
		'location'=>'21 23 23N, 106 32 57E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07582',
		'name'=>'Phì Điền',
		'type'=>'Xã',
		'location'=>'21 23 51N, 106 39 50E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07585',
		'name'=>'Nghĩa Hồ',
		'type'=>'Xã',
		'location'=>'21 22 35N, 106 35 16E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07588',
		'name'=>'Tân Quang',
		'type'=>'Xã',
		'location'=>'21 22 03N, 106 38 35E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07591',
		'name'=>'Đồng Cốc',
		'type'=>'Xã',
		'location'=>'21 21 48N, 106 41 29E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07594',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'21 19 31N, 106 38 36E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07597',
		'name'=>'Phú Nhuận',
		'type'=>'Xã',
		'location'=>'21 20 40N, 106 43 51E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07600',
		'name'=>'Mỹ An',
		'type'=>'Xã',
		'location'=>'21 19 37N, 106 31 08E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07603',
		'name'=>'Nam Dương',
		'type'=>'Xã',
		'location'=>'21 20 09N, 106 34 22E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07606',
		'name'=>'Tân Mộc',
		'type'=>'Xã',
		'location'=>'21 17 58N, 106 35 25E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07609',
		'name'=>'Đèo Gia',
		'type'=>'Xã',
		'location'=>'21 17 59N, 106 42 49E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07612',
		'name'=>'Phượng Sơn',
		'type'=>'Xã',
		'location'=>'21 20 19N, 106 29 11E',
		'district_id'=>'219'
		] );
		
		Ward::create( [
		'ward_id'=>'07615',
		'name'=>'An Châu',
		'type'=>'Thị Trấn',
		'location'=>'21 20 19N, 106 50 59E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07616',
		'name'=>'Thanh Sơn',
		'type'=>'Thị Trấn',
		'location'=>'',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07618',
		'name'=>'Thạch Sơn',
		'type'=>'Xã',
		'location'=>'21 25 11N, 106 52 07E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07621',
		'name'=>'Vân Sơn',
		'type'=>'Xã',
		'location'=>'21 24 01N, 106 55 06E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07624',
		'name'=>'Hữu Sản',
		'type'=>'Xã',
		'location'=>'21 24 26N, 106 57 48E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07627',
		'name'=>'Quế Sơn',
		'type'=>'Xã',
		'location'=>'21 24 51N, 106 47 47E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07630',
		'name'=>'Phúc Thắng',
		'type'=>'Xã',
		'location'=>'21 24 42N, 106 49 53E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07633',
		'name'=>'Chiên Sơn',
		'type'=>'Xã',
		'location'=>'21 23 27N, 106 47 16E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07636',
		'name'=>'Giáo Liêm',
		'type'=>'Xã',
		'location'=>'21 22 56N, 106 49 39E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07639',
		'name'=>'Vĩnh Khương',
		'type'=>'Xã',
		'location'=>'21 22 26N, 106 52 16E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07642',
		'name'=>'Cẩm Đàn',
		'type'=>'Xã',
		'location'=>'21 21 42N, 106 46 11E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07645',
		'name'=>'An Lạc',
		'type'=>'Xã',
		'location'=>'21 19 39N, 106 56 42E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07648',
		'name'=>'An Lập',
		'type'=>'Xã',
		'location'=>'21 20 48N, 106 51 31E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07651',
		'name'=>'Yên Định',
		'type'=>'Xã',
		'location'=>'21 20 06N, 106 47 35E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07654',
		'name'=>'Lệ Viễn',
		'type'=>'Xã',
		'location'=>'21 20 44N, 106 53 46E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07657',
		'name'=>'An Châu',
		'type'=>'Xã',
		'location'=>'21 19 12N, 106 50 44E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07660',
		'name'=>'An Bá',
		'type'=>'Xã',
		'location'=>'21 18 03N, 106 49 18E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07663',
		'name'=>'Tuấn Đạo',
		'type'=>'Xã',
		'location'=>'21 15 43N, 106 44 22E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07666',
		'name'=>'Dương Hưu',
		'type'=>'Xã',
		'location'=>'21 13 52N, 106 55 56E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07669',
		'name'=>'Bồng Am',
		'type'=>'Xã',
		'location'=>'21 15 14N, 106 49 00E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07672',
		'name'=>'Long Sơn',
		'type'=>'Xã',
		'location'=>'21 13 38N, 106 52 49E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07675',
		'name'=>'Tuấn Mậu',
		'type'=>'Xã',
		'location'=>'21 12 07N, 106 43 51E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07678',
		'name'=>'Thanh Luận',
		'type'=>'Xã',
		'location'=>'21 11 43N, 106 48 16E',
		'district_id'=>'220'
		] );
		
		Ward::create( [
		'ward_id'=>'07681',
		'name'=>'Neo',
		'type'=>'Thị Trấn',
		'location'=>'21 12 16N, 106 14 27E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07682',
		'name'=>'Tân Dân',
		'type'=>'Thị Trấn',
		'location'=>'',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07684',
		'name'=>'Lão Hộ',
		'type'=>'Xã',
		'location'=>'21 16 29N, 106 17 24E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07687',
		'name'=>'Tân Mỹ',
		'type'=>'Xã',
		'location'=>'21 16 19N, 106 09 32E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07690',
		'name'=>'Hương Gián',
		'type'=>'Xã',
		'location'=>'21 15 36N, 106 14 22E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07693',
		'name'=>'Tân An',
		'type'=>'Xã',
		'location'=>'21 15 36N, 106 16 05E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07696',
		'name'=>'Đồng Sơn',
		'type'=>'Xã',
		'location'=>'21 14 37N, 106 11 46E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07699',
		'name'=>'Tân Tiến',
		'type'=>'Xã',
		'location'=>'21 15 12N, 106 13 02E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07702',
		'name'=>'Quỳnh Sơn',
		'type'=>'Xã',
		'location'=>'21 14 54N, 106 17 40E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07705',
		'name'=>'Song Khê',
		'type'=>'Xã',
		'location'=>'21 15 09N, 106 10 34E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07708',
		'name'=>'Nội Hoàng',
		'type'=>'Xã',
		'location'=>'21 14 15N, 106 09 23E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07711',
		'name'=>'Tiền Phong',
		'type'=>'Xã',
		'location'=>'21 13 54N, 106 10 11E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07714',
		'name'=>'Xuân Phú',
		'type'=>'Xã',
		'location'=>'21 14 17N, 106 15 41E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07717',
		'name'=>'Tân Liễu',
		'type'=>'Xã',
		'location'=>'21 13 51N, 106 13 29E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07720',
		'name'=>'Trí Yên',
		'type'=>'Xã',
		'location'=>'21 13 12N, 106 18 58E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07723',
		'name'=>'Lãng Sơn',
		'type'=>'Xã',
		'location'=>'21 13 17N, 106 17 11E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07726',
		'name'=>'Yên Lư',
		'type'=>'Xã',
		'location'=>'21 12 03N, 106 10 56E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07729',
		'name'=>'Tiến Dũng',
		'type'=>'Xã',
		'location'=>'21 12 27N, 106 16 33E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07732',
		'name'=>'Nham Sơn',
		'type'=>'Xã',
		'location'=>'21 11 47N, 106 13 08E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07735',
		'name'=>'Đức Giang',
		'type'=>'Xã',
		'location'=>'21 11 35N, 106 16 45E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07738',
		'name'=>'Cảnh Thụy',
		'type'=>'Xã',
		'location'=>'21 11 43N, 106 15 36E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07741',
		'name'=>'Tư Mại',
		'type'=>'Xã',
		'location'=>'21 10 09N, 106 15 16E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07744',
		'name'=>'Thắng Cương',
		'type'=>'Xã',
		'location'=>'21 10 10N, 106 13 43E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07747',
		'name'=>'Đồng Việt',
		'type'=>'Xã',
		'location'=>'21 09 21N, 106 18 19E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07750',
		'name'=>'Đồng Phúc',
		'type'=>'Xã',
		'location'=>'21 08 46N, 106 17 17E',
		'district_id'=>'221'
		] );
		
		Ward::create( [
		'ward_id'=>'07753',
		'name'=>'Bích Động',
		'type'=>'Thị Trấn',
		'location'=>'21 16 44N, 106 06 13E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07756',
		'name'=>'Nếnh',
		'type'=>'Thị Trấn',
		'location'=>'21 14 37N, 106 05 42E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07759',
		'name'=>'Thượng Lan',
		'type'=>'Xã',
		'location'=>'21 19 24N, 106 04 14E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07762',
		'name'=>'Việt Tiến',
		'type'=>'Xã',
		'location'=>'21 19 07N, 106 02 31E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07765',
		'name'=>'Nghĩa Trung',
		'type'=>'Xã',
		'location'=>'21 18 21N, 106 18 17E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07768',
		'name'=>'Minh Đức',
		'type'=>'Xã',
		'location'=>'21 18 42N, 106 06 36E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07771',
		'name'=>'Hương Mai',
		'type'=>'Xã',
		'location'=>'21 17 35N, 106 02 35E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07774',
		'name'=>'Tự Lạn',
		'type'=>'Xã',
		'location'=>'21 17 58N, 106 04 25E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07777',
		'name'=>'Bích Sơn',
		'type'=>'Xã',
		'location'=>'21 16 40N, 106 05 38E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07780',
		'name'=>'Trung Sơn',
		'type'=>'Xã',
		'location'=>'21 16 06N, 106 03 13E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07783',
		'name'=>'Hồng Thái',
		'type'=>'Xã',
		'location'=>'21 16 14N, 106 07 24E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07786',
		'name'=>'Tiên Sơn',
		'type'=>'Xã',
		'location'=>'21 14 49N, 106 02 03E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07789',
		'name'=>'Tăng Tiến',
		'type'=>'Xã',
		'location'=>'21 15 27N, 106 09 01E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07792',
		'name'=>'Quảng Minh',
		'type'=>'Xã',
		'location'=>'21 14 43N, 106 05 11E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07795',
		'name'=>'Hoàng Ninh',
		'type'=>'Xã',
		'location'=>'21 15 14N, 106 07 09E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07798',
		'name'=>'Ninh Sơn',
		'type'=>'Xã',
		'location'=>'12 14 11N, 106 04 39E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07801',
		'name'=>'Vân Trung',
		'type'=>'Xã',
		'location'=>'21 13 45N, 106 07 49E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07804',
		'name'=>'Vân Hà',
		'type'=>'Xã',
		'location'=>'21 13 01N, 106 02 22E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07807',
		'name'=>'Quang Châu',
		'type'=>'Xã',
		'location'=>'21 12 47N, 106 06 17E',
		'district_id'=>'222'
		] );
		
		Ward::create( [
		'ward_id'=>'07810',
		'name'=>'Thắng',
		'type'=>'Thị Trấn',
		'location'=>'21 21 14N, 105 58 55E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07813',
		'name'=>'Đồng Tân',
		'type'=>'Xã',
		'location'=>'21 25 21N, 105 57 51E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07816',
		'name'=>'Thanh Vân',
		'type'=>'Xã',
		'location'=>'21 24 25N, 105 58 09E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07819',
		'name'=>'Hoàng Lương',
		'type'=>'Xã',
		'location'=>'21 23 55N, 105 59 30E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07822',
		'name'=>'Hoàng Vân',
		'type'=>'Xã',
		'location'=>'21 23 24N, 105 57 10E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07825',
		'name'=>'Hoàng Thanh',
		'type'=>'Xã',
		'location'=>'21 23 35N, 106 00 15E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07828',
		'name'=>'Hoàng An',
		'type'=>'Xã',
		'location'=>'21 23 12N, 105 58 23E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07831',
		'name'=>'Ngọc Sơn',
		'type'=>'Xã',
		'location'=>'21 22 01N, 105 59 55E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07834',
		'name'=>'Thái Sơn',
		'type'=>'Xã',
		'location'=>'21 22 04N, 105 56 41E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07837',
		'name'=>'Hòa Sơn',
		'type'=>'Xã',
		'location'=>'21 21 59N, 105 55 07E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07840',
		'name'=>'Đức Thắng',
		'type'=>'Xã',
		'location'=>'21 21 28N, 105 58 02E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07843',
		'name'=>'Quang Minh',
		'type'=>'Xã',
		'location'=>'21 21 05N, 105 54 36E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07846',
		'name'=>'Lương Phong',
		'type'=>'Xã',
		'location'=>'21 20 38N, 106 00 32E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07849',
		'name'=>'Hùng Sơn',
		'type'=>'Xã',
		'location'=>'21 20 53N, 105 56 13E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07852',
		'name'=>'Đại Thành',
		'type'=>'Xã',
		'location'=>'21 20 26N, 105 54 25E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07855',
		'name'=>'Thường Thắng',
		'type'=>'Xã',
		'location'=>'21 20 04N, 105 57 10E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07858',
		'name'=>'Hợp Thịnh',
		'type'=>'Xã',
		'location'=>'21 19 30N, 105 54 06E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07861',
		'name'=>'Danh Thắng',
		'type'=>'Xã',
		'location'=>'21 19 27N, 105 58 58E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07864',
		'name'=>'Mai Trung',
		'type'=>'Xã',
		'location'=>'21 18 58N, 105 56 03E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07867',
		'name'=>'Đoan Bái',
		'type'=>'Xã',
		'location'=>'21 18 49N, 106 00 08E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07870',
		'name'=>'Bắc Lý',
		'type'=>'Xã',
		'location'=>'21 17 46N, 105 58 07E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07873',
		'name'=>'Xuân Cẩm',
		'type'=>'Xã',
		'location'=>'21 17 23N, 105 55 39E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07876',
		'name'=>'Hương Lâm',
		'type'=>'Xã',
		'location'=>'21 16 25N, 105 56 46E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07879',
		'name'=>'Đông Lỗ',
		'type'=>'Xã',
		'location'=>'21 16 56N, 106 00 37E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07882',
		'name'=>'Châu Minh',
		'type'=>'Xã',
		'location'=>'21 15 31N, 105 58 31E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07885',
		'name'=>'Mai Đình',
		'type'=>'Xã',
		'location'=>'21 14 40N, 105 57 25E',
		'district_id'=>'223'
		] );
		
		Ward::create( [
		'ward_id'=>'07888',
		'name'=>'Dữu Lâu',
		'type'=>'Phường',
		'location'=>'21 20 12N, 105 24 03E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07891',
		'name'=>'Vân Cơ',
		'type'=>'Phường',
		'location'=>'21 20 19N, 105 22 09E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07894',
		'name'=>'Nông Trang',
		'type'=>'Phường',
		'location'=>'21 19 47N, 105 22 52E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07897',
		'name'=>'Tân Dân',
		'type'=>'Phường',
		'location'=>'21 19 29N, 105 23 38E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07900',
		'name'=>'Gia Cẩm',
		'type'=>'Phường',
		'location'=>'21 19 06N, 105 23 28E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07903',
		'name'=>'Tiên Cát',
		'type'=>'Phường',
		'location'=>'21 18 33N, 105 24 12E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07906',
		'name'=>'Thọ Sơn',
		'type'=>'Phường',
		'location'=>'21 18 13N, 105 24 48E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07909',
		'name'=>'Thanh Miếu',
		'type'=>'Phường',
		'location'=>'21 18 35N, 105 25 27E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07912',
		'name'=>'Bạch Hạc',
		'type'=>'Phường',
		'location'=>'21 16 54N, 105 26 31E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07915',
		'name'=>'Bến Gót',
		'type'=>'Phường',
		'location'=>'21 18 05N, 105 25 47E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07918',
		'name'=>'Vân Phú',
		'type'=>'Xã',
		'location'=>'21 21 09N, 105 21 32E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07921',
		'name'=>'Phượng Lâu',
		'type'=>'Xã',
		'location'=>'21 21 19N, 105 22 44E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07924',
		'name'=>'Thụy Vân',
		'type'=>'Xã',
		'location'=>'21 19 40N, 105 20 57E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07927',
		'name'=>'Minh Phương',
		'type'=>'Xã',
		'location'=>'21 19 47N, 105 21 49E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07930',
		'name'=>'Trưng Vương',
		'type'=>'Xã',
		'location'=>'21 19 29N, 105 25 32E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07933',
		'name'=>'Minh Nông',
		'type'=>'Xã',
		'location'=>'21 18 27N, 105 22 43E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07936',
		'name'=>'Sông Lô',
		'type'=>'Xã',
		'location'=>'21 18 38N, 105 26 26E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'07939',
		'name'=>'Trường Thịnh',
		'type'=>'Phường',
		'location'=>'21 24 22N, 105 12 57E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07942',
		'name'=>'Hùng Vương',
		'type'=>'Phường',
		'location'=>'21 24 12N, 105 12 46E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07945',
		'name'=>'Phong Châu',
		'type'=>'Phường',
		'location'=>'21 23 54N, 105 13 38E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07948',
		'name'=>'Âu Cơ',
		'type'=>'Phường',
		'location'=>'21 23 47N, 105 12 33E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07951',
		'name'=>'Hà Lộc',
		'type'=>'Xã',
		'location'=>'21 26 07N, 105 14 00E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07954',
		'name'=>'Phú Hộ',
		'type'=>'Xã',
		'location'=>'21 25 53N, 105 15 29E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07957',
		'name'=>'Văn Lung',
		'type'=>'Xã',
		'location'=>'21 25 13N, 105 12 46E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07960',
		'name'=>'Thanh Minh',
		'type'=>'Xã',
		'location'=>'21 22 58N, 105 12 22E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07963',
		'name'=>'Hà Thạch',
		'type'=>'Xã',
		'location'=>'21 24 23N, 105 15 18E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07966',
		'name'=>'Thanh Vinh',
		'type'=>'Xã',
		'location'=>'21 24 24N, 105 11 20E',
		'district_id'=>'228'
		] );
		
		Ward::create( [
		'ward_id'=>'07969',
		'name'=>'Đoan Hùng',
		'type'=>'Thị Trấn',
		'location'=>'21 37 51N, 105 10 44E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07972',
		'name'=>'Đông Khê',
		'type'=>'Xã',
		'location'=>'21 42 12N, 105 05 50E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07975',
		'name'=>'Nghinh Xuyên',
		'type'=>'Xã',
		'location'=>'21 41 15N, 105 06 58E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07978',
		'name'=>'Hùng Quan',
		'type'=>'Xã',
		'location'=>'21 40 49N, 105 09 42E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07981',
		'name'=>'Bằng Luân',
		'type'=>'Xã',
		'location'=>'21 40 26N, 105 03 17E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07984',
		'name'=>'Vân Du',
		'type'=>'Xã',
		'location'=>'21 39 27N, 105 10 52E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07987',
		'name'=>'Phương Trung',
		'type'=>'Xã',
		'location'=>'21 39 43N, 105 08 03E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07990',
		'name'=>'Quế Lâm',
		'type'=>'Xã',
		'location'=>'21 39 28N, 105 05 47E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07993',
		'name'=>'Minh Lương',
		'type'=>'Xã',
		'location'=>'21 39 15N, 105 02 00E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07996',
		'name'=>'Bằng Doãn',
		'type'=>'Xã',
		'location'=>'21 38 14N, 105 03 34E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'07999',
		'name'=>'Chí Đám',
		'type'=>'Xã',
		'location'=>'21 38 55N, 105 12 47E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08002',
		'name'=>'Phong Phú',
		'type'=>'Xã',
		'location'=>'21 38 52N, 105 09 45E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08005',
		'name'=>'Phúc Lai',
		'type'=>'Xã',
		'location'=>'21 37 13N, 105 05 41E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08008',
		'name'=>'Ngọc Quan',
		'type'=>'Xã',
		'location'=>'21 36 49N, 105 09 07E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08011',
		'name'=>'Hữu Đô',
		'type'=>'Xã',
		'location'=>'21 37 51N, 105 12 36E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08014',
		'name'=>'Đại Nghĩa',
		'type'=>'Xã',
		'location'=>'21 36 50N, 105 12 31E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08017',
		'name'=>'Sóc Đăng',
		'type'=>'Xã',
		'location'=>'21 36 26N, 105 11 09E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08020',
		'name'=>'Phú Thứ',
		'type'=>'Xã',
		'location'=>'21 36 30N, 105 14 12E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08023',
		'name'=>'Tây Cốc',
		'type'=>'Xã',
		'location'=>'21 37 05N, 105 07 29E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08026',
		'name'=>'Yên Kiện',
		'type'=>'Xã',
		'location'=>'21 35 08N, 105 10 15E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08029',
		'name'=>'Hùng Long',
		'type'=>'Xã',
		'location'=>'21 35 28N, 105 13 17E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08032',
		'name'=>'Vụ Quang',
		'type'=>'Xã',
		'location'=>'21 33 28N, 105 15 09E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08035',
		'name'=>'Vân Đồn',
		'type'=>'Xã',
		'location'=>'21 34 12N, 105 12 55E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08038',
		'name'=>'Tiêu Sơn',
		'type'=>'Xã',
		'location'=>'21 33 51N, 105 10 40E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08041',
		'name'=>'Minh Tiến',
		'type'=>'Xã',
		'location'=>'21 33 08N, 105 09 37E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08044',
		'name'=>'Minh Phú',
		'type'=>'Xã',
		'location'=>'21 32 15N, 105 14 14E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08047',
		'name'=>'Chân Mộng',
		'type'=>'Xã',
		'location'=>'21 31 45N, 105 12 35E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08050',
		'name'=>'Ca Đình',
		'type'=>'Xã',
		'location'=>'21 35 31N, 105 07 28E',
		'district_id'=>'230'
		] );
		
		Ward::create( [
		'ward_id'=>'08053',
		'name'=>'Hạ Hoà',
		'type'=>'Thị Trấn',
		'location'=>'21 34 16N, 105 00 32E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08056',
		'name'=>'Đại Phạm',
		'type'=>'Xã',
		'location'=>'21 39 53N, 105 00 04E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08059',
		'name'=>'Hậu Bổng',
		'type'=>'Xã',
		'location'=>'21 38 44N, 104 56 41E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08062',
		'name'=>'Đan Hà',
		'type'=>'Xã',
		'location'=>'21 38 20N, 104 57 10E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08065',
		'name'=>'Hà Lương',
		'type'=>'Xã',
		'location'=>'21 37 52N, 105 00 51E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08068',
		'name'=>'Lệnh Khanh',
		'type'=>'Xã',
		'location'=>'21 37 20N, 104 58 24E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08071',
		'name'=>'Phụ Khánh',
		'type'=>'Xã',
		'location'=>'21 36 42N, 104 59 20E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08074',
		'name'=>'Liên Phương',
		'type'=>'Xã',
		'location'=>'21 37 26N, 104 54 56E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08077',
		'name'=>'Đan Thượng',
		'type'=>'Xã',
		'location'=>'21 37 20N, 104 56 21E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08080',
		'name'=>'Hiền Lương',
		'type'=>'Xã',
		'location'=>'21 35 45N, 104 53 50E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08083',
		'name'=>'Động Lâm',
		'type'=>'Xã',
		'location'=>'21 36 03N, 104 56 06E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08086',
		'name'=>'Lâm Lợi',
		'type'=>'Xã',
		'location'=>'21 35 39N, 104 57 08E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08089',
		'name'=>'Phương Viên',
		'type'=>'Xã',
		'location'=>'21 35 26N, 105 04 52E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08092',
		'name'=>'Gia Điền',
		'type'=>'Xã',
		'location'=>'21 36 35N, 105 02 42E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08095',
		'name'=>'Ấm Hạ',
		'type'=>'Xã',
		'location'=>'21 35 05N, 105 02 05E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08098',
		'name'=>'Quân Khê',
		'type'=>'Xã',
		'location'=>'21 34 05N, 104 53 58E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08101',
		'name'=>'Y Sơn',
		'type'=>'Xã',
		'location'=>'21 35 20N, 104 59 23E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08104',
		'name'=>'Hương Xạ',
		'type'=>'Xã',
		'location'=>'21 33 52N, 105 04 02E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08107',
		'name'=>'Cáo Điền',
		'type'=>'Xã',
		'location'=>'21 34 05N, 105 05 57E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08110',
		'name'=>'Xuân Áng',
		'type'=>'Xã',
		'location'=>'21 33 16N, 104 56 38E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08113',
		'name'=>'Yên Kỳ',
		'type'=>'Xã',
		'location'=>'21 33 16N, 105 06 47E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08116',
		'name'=>'Chuế Lưu',
		'type'=>'Xã',
		'location'=>'21 33 34N, 104 58 51E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08119',
		'name'=>'Minh Hạc',
		'type'=>'Xã',
		'location'=>'21 33 10N, 105 01 35E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08122',
		'name'=>'Lang Sơn',
		'type'=>'Xã',
		'location'=>'21 32 10N, 105 02 15E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08125',
		'name'=>'Bằng Giã',
		'type'=>'Xã',
		'location'=>'21 32 08N, 104 59 40E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08128',
		'name'=>'Yên Luật',
		'type'=>'Xã',
		'location'=>'21 32 01N, 105 03 12E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08131',
		'name'=>'Vô Tranh',
		'type'=>'Xã',
		'location'=>'21 30 54N, 104 57 33E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08134',
		'name'=>'Văn Lang',
		'type'=>'Xã',
		'location'=>'21 31 10N, 105 00 21E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08137',
		'name'=>'Chính Công',
		'type'=>'Xã',
		'location'=>'21 31 35N, 105 04 34E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08140',
		'name'=>'Minh Côi',
		'type'=>'Xã',
		'location'=>'21 30 25N, 105 01 35E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08143',
		'name'=>'Vĩnh Chân',
		'type'=>'Xã',
		'location'=>'21 30 25N, 105 03 50E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08146',
		'name'=>'Mai Tùng',
		'type'=>'Xã',
		'location'=>'21 30 23N, 105 02 34E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08149',
		'name'=>'Vụ Cầu',
		'type'=>'Xã',
		'location'=>'21 29 28N, 105 04 17E',
		'district_id'=>'231'
		] );
		
		Ward::create( [
		'ward_id'=>'08152',
		'name'=>'Thanh Ba',
		'type'=>'Thị Trấn',
		'location'=>'21 30 21N, 105 08 36E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08155',
		'name'=>'Thanh Vân',
		'type'=>'Xã',
		'location'=>'21 32 29N, 105 07 34E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08156',
		'name'=>'Vân Lĩnh',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08158',
		'name'=>'Đông Lĩnh',
		'type'=>'Xã',
		'location'=>'21 32 08N, 105 08 51E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08161',
		'name'=>'Đại An',
		'type'=>'Xã',
		'location'=>'21 31 28N, 105 10 59E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08164',
		'name'=>'Hanh Cù',
		'type'=>'Xã',
		'location'=>'21 31 22N, 105 05 52E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08167',
		'name'=>'Thái Ninh',
		'type'=>'Xã',
		'location'=>'21 30 52N, 105 09 51E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08170',
		'name'=>'Đồng Xuân',
		'type'=>'Xã',
		'location'=>'21 30 29N, 105 07 25E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08173',
		'name'=>'Năng Yên',
		'type'=>'Xã',
		'location'=>'21 30 03N, 105 11 49E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08176',
		'name'=>'Yển Khê',
		'type'=>'Xã',
		'location'=>'21 29 47N, 105 05 46E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08179',
		'name'=>'Ninh Dân',
		'type'=>'Xã',
		'location'=>'21 28 52N, 105 09 15E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08182',
		'name'=>'Quảng Nạp',
		'type'=>'Xã',
		'location'=>'21 29 17N, 105 11 11E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08185',
		'name'=>'Vũ Yển',
		'type'=>'Xã',
		'location'=>'21 28 44N, 105 05 30E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08188',
		'name'=>'Yên Nội',
		'type'=>'Xã',
		'location'=>'21 28 39N, 105 08 18E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08191',
		'name'=>'Phương Lĩnh',
		'type'=>'Xã',
		'location'=>'21 28 57N, 105 06 47E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08194',
		'name'=>'Võ Lao',
		'type'=>'Xã',
		'location'=>'21 27 59N, 105 11 16E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08197',
		'name'=>'Khải Xuân',
		'type'=>'Xã',
		'location'=>'21 27 56N, 105 12 35E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08200',
		'name'=>'Mạn Lạn',
		'type'=>'Xã',
		'location'=>'21 27 45N, 105 06 31E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08203',
		'name'=>'Thanh Xá',
		'type'=>'Xã',
		'location'=>'21 27 39N, 105 07 58E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08206',
		'name'=>'Chí Tiên',
		'type'=>'Xã',
		'location'=>'21 26 19N, 105 09 29E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08209',
		'name'=>'Đông Thành',
		'type'=>'Xã',
		'location'=>'21 26 20N, 105 11 34E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08212',
		'name'=>'Hoàng Cương',
		'type'=>'Xã',
		'location'=>'21 26 37N, 105 07 54E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08215',
		'name'=>'Sơn Cương',
		'type'=>'Xã',
		'location'=>'21 24 45N, 105 10 08E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08218',
		'name'=>'Thanh Hà',
		'type'=>'Xã',
		'location'=>'21 24 04N, 105 10 44E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08221',
		'name'=>'Đỗ Sơn',
		'type'=>'Xã',
		'location'=>'21 22 47N, 105 10 50E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08224',
		'name'=>'Đỗ Xuyên',
		'type'=>'Xã',
		'location'=>'21 21 11N, 105 11 33E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08227',
		'name'=>'Lương Lỗ',
		'type'=>'Xã',
		'location'=>'21 20 48N, 105 12 02E',
		'district_id'=>'232'
		] );
		
		Ward::create( [
		'ward_id'=>'08230',
		'name'=>'Phong Châu',
		'type'=>'Thị Trấn',
		'location'=>'21 24 29N, 105 18 45E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08233',
		'name'=>'Phú Mỹ',
		'type'=>'Xã',
		'location'=>'21 30 56N, 105 17 03E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08234',
		'name'=>'Lệ Mỹ',
		'type'=>'Xã',
		'location'=>'',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08236',
		'name'=>'Liên Hoa',
		'type'=>'Xã',
		'location'=>'21 30 28N, 105 15 32E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08239',
		'name'=>'Trạm Thản',
		'type'=>'Xã',
		'location'=>'21 29 53N, 105 13 58E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08242',
		'name'=>'Trị Quận',
		'type'=>'Xã',
		'location'=>'21 29 28N, 105 18 48E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08245',
		'name'=>'Trung Giáp',
		'type'=>'Xã',
		'location'=>'21 28 23N, 105 16 39E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08248',
		'name'=>'Tiên Phú',
		'type'=>'Xã',
		'location'=>'21 28 20N, 105 14 40E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08251',
		'name'=>'Hạ Giáp',
		'type'=>'Xã',
		'location'=>'21 28 16N, 105 19 26E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08254',
		'name'=>'Bảo Thanh',
		'type'=>'Xã',
		'location'=>'21 27 49N, 105 17 46E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08257',
		'name'=>'Phú Lộc',
		'type'=>'Xã',
		'location'=>'21 26 00N, 105 17 26E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08260',
		'name'=>'Gia Thanh',
		'type'=>'Xã',
		'location'=>'21 26 48N, 105 18 53E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08263',
		'name'=>'Tiên Du',
		'type'=>'Xã',
		'location'=>'21 26 12N, 105 20 02E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08266',
		'name'=>'Phú Nham',
		'type'=>'Xã',
		'location'=>'21 25 41N, 105 19 06E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08269',
		'name'=>'Bình Bộ',
		'type'=>'Xã',
		'location'=>'21 25 13N, 105 22 52E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08272',
		'name'=>'An Đạo',
		'type'=>'Xã',
		'location'=>'21 24 54N, 105 21 28E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08275',
		'name'=>'Tử Đà',
		'type'=>'Xã',
		'location'=>'21 24 05N, 105 23 06E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08278',
		'name'=>'Phù Ninh',
		'type'=>'Xã',
		'location'=>'21 23 33N, 105 20 07E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08281',
		'name'=>'Kim Đức',
		'type'=>'Xã',
		'location'=>'21 22 44N, 105 21 22E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'08284',
		'name'=>'Vĩnh Phú',
		'type'=>'Xã',
		'location'=>'21 22 53N, 105 22 45E',
		'district_id'=>'233'
		] );
		
		Ward::create( [
		'ward_id'=>'08287',
		'name'=>'Hùng Lô',
		'type'=>'Xã',
		'location'=>'21 22 00N, 105 22 29E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'08290',
		'name'=>'Yên Lập',
		'type'=>'Thị Trấn',
		'location'=>'21 21 34N, 105 03 35E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08293',
		'name'=>'Mỹ Lung',
		'type'=>'Xã',
		'location'=>'21 30 32N, 104 54 25E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08296',
		'name'=>'Mỹ Lương',
		'type'=>'Xã',
		'location'=>'21 27 14N, 104 55 49E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08299',
		'name'=>'Lương Sơn',
		'type'=>'Xã',
		'location'=>'21 27 18N, 104 58 06E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08302',
		'name'=>'Xuân An',
		'type'=>'Xã',
		'location'=>'21 24 39N, 104 58 15E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08305',
		'name'=>'Xuân Viên',
		'type'=>'Xã',
		'location'=>'21 24 32N, 104 59 53E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08308',
		'name'=>'Xuân Thủy',
		'type'=>'Xã',
		'location'=>'21 23 20N, 105 00 55E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08311',
		'name'=>'Trung Sơn',
		'type'=>'Xã',
		'location'=>'21 21 11N, 104 56 19E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08314',
		'name'=>'Hưng Long',
		'type'=>'Xã',
		'location'=>'21 21 58N, 105 01 39E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08317',
		'name'=>'Nga Hoàng',
		'type'=>'Xã',
		'location'=>'21 21 22N, 105 00 36E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08320',
		'name'=>'Đồng Lạc',
		'type'=>'Xã',
		'location'=>'21 19 00N, 105 06 18E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08323',
		'name'=>'Thượng Long',
		'type'=>'Xã',
		'location'=>'21 19 06N, 105 00 41E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08326',
		'name'=>'Đồng Thịnh',
		'type'=>'Xã',
		'location'=>'12 19 27N, 105 03 35E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08329',
		'name'=>'Phúc Khánh',
		'type'=>'Xã',
		'location'=>'21 17 38N, 105 03 34E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08332',
		'name'=>'Minh Hòa',
		'type'=>'Xã',
		'location'=>'21 17 25N, 105 07 27E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08335',
		'name'=>'Ngọc Lập',
		'type'=>'Xã',
		'location'=>'21 14 21N, 105 06 33E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08338',
		'name'=>'Ngọc Đồng',
		'type'=>'Xã',
		'location'=>'21 14 10N, 105 08 24E',
		'district_id'=>'234'
		] );
		
		Ward::create( [
		'ward_id'=>'08341',
		'name'=>'Sông Thao',
		'type'=>'Thị Trấn',
		'location'=>'21 25 22N, 105 08 21E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08344',
		'name'=>'Tiên Lương',
		'type'=>'Xã',
		'location'=>'21 28 52N, 105 00 42E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08347',
		'name'=>'Tuy Lộc',
		'type'=>'Xã',
		'location'=>'21 28 48N, 105 03 37E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08350',
		'name'=>'Ngô Xá',
		'type'=>'Xã',
		'location'=>'21 27 56N, 105 02 08E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08353',
		'name'=>'Phương Xá',
		'type'=>'Xã',
		'location'=>'21 28 00N, 105 04 41E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08356',
		'name'=>'Phượng Vĩ',
		'type'=>'Xã',
		'location'=>'21 26 48N, 105 00 51E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08359',
		'name'=>'Đồng Cam',
		'type'=>'Xã',
		'location'=>'21 27 18N, 105 03 52E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08362',
		'name'=>'Thụy Liễu',
		'type'=>'Xã',
		'location'=>'21 27 09N, 105 02 51E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08365',
		'name'=>'Phùng Xá',
		'type'=>'Xã',
		'location'=>'21 27 21N, 105 05 06E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08368',
		'name'=>'Sơn Nga',
		'type'=>'Xã',
		'location'=>'21 26 40N, 105 05 42E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08371',
		'name'=>'Sai Nga',
		'type'=>'Xã',
		'location'=>'21 26 28N, 105 07 08E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08374',
		'name'=>'Tùng Khê',
		'type'=>'Xã',
		'location'=>'21 25 45N, 105 04 03E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08377',
		'name'=>'Tam Sơn',
		'type'=>'Xã',
		'location'=>'21 25 28N, 105 02 08E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08380',
		'name'=>'Văn Bán',
		'type'=>'Xã',
		'location'=>'21 25 06N, 105 02 52E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08383',
		'name'=>'Cấp Dẫn',
		'type'=>'Xã',
		'location'=>'21 25 01N, 105 04 26E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08386',
		'name'=>'Thanh Nga',
		'type'=>'Xã',
		'location'=>'21 25 34N, 105 06 46E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08389',
		'name'=>'Xương Thịnh',
		'type'=>'Xã',
		'location'=>'21 25 05N, 105 05 43E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08392',
		'name'=>'Phú Khê',
		'type'=>'Xã',
		'location'=>'21 24 16N, 105 07 55E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08395',
		'name'=>'Sơn Tình',
		'type'=>'Xã',
		'location'=>'21 24 06N, 105 05 26E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08398',
		'name'=>'Yên Tập',
		'type'=>'Xã',
		'location'=>'21 23 28N, 105 08 33E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08401',
		'name'=>'Hương Lung',
		'type'=>'Xã',
		'location'=>'21 22 39N, 105 04 43E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08404',
		'name'=>'Tạ Xá',
		'type'=>'Xã',
		'location'=>'21 22 36N, 105 07 03E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08407',
		'name'=>'Phú Lạc',
		'type'=>'Xã',
		'location'=>'21 22 17N, 105 08 33E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08410',
		'name'=>'Tình Cương',
		'type'=>'Xã',
		'location'=>'21 22 30N, 105 09 46E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08413',
		'name'=>'Chương Xá',
		'type'=>'Xã',
		'location'=>'21 21 33N, 105 07 30E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08416',
		'name'=>'Hiền Đa',
		'type'=>'Xã',
		'location'=>'21 21 29N, 105 09 55E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08419',
		'name'=>'Văn Khúc',
		'type'=>'Xã',
		'location'=>'21 20 28N, 105 08 01E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08422',
		'name'=>'Yên Dưỡng',
		'type'=>'Xã',
		'location'=>'21 19 26N, 105 09 02E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08425',
		'name'=>'Cát Trù',
		'type'=>'Xã',
		'location'=>'21 20 51N, 105 10 34E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08428',
		'name'=>'Điêu Lương',
		'type'=>'Xã',
		'location'=>'21 19 35N, 105 10 14E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08431',
		'name'=>'Đồng Lương',
		'type'=>'Xã',
		'location'=>'21 17 55N, 105 10 11E',
		'district_id'=>'235'
		] );
		
		Ward::create( [
		'ward_id'=>'08434',
		'name'=>'Hưng Hoá',
		'type'=>'Thị Trấn',
		'location'=>'21 15 05N, 105 17 32E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08437',
		'name'=>'Vực Trường',
		'type'=>'Xã',
		'location'=>'21 22 50N, 105 13 36E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08440',
		'name'=>'Hiền Quan',
		'type'=>'Xã',
		'location'=>'21 22 32N, 105 14 20E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08443',
		'name'=>'Hương Nha',
		'type'=>'Xã',
		'location'=>'21 21 28N, 105 13 34E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08446',
		'name'=>'Thanh Uyên',
		'type'=>'Xã',
		'location'=>'21 21 04N, 105 15 13E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08449',
		'name'=>'Xuân Quang',
		'type'=>'Xã',
		'location'=>'21 20 11N, 105 13 26E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08452',
		'name'=>'Tứ Mỹ',
		'type'=>'Xã',
		'location'=>'21 18 46N, 105 13 00E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08455',
		'name'=>'Văn Lương',
		'type'=>'Xã',
		'location'=>'21 19 15N, 105 14 51E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08458',
		'name'=>'Hùng Đô',
		'type'=>'Xã',
		'location'=>'21 18 25N, 105 11 42E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08461',
		'name'=>'Phương Thịnh',
		'type'=>'Xã',
		'location'=>'21 17 35N, 105 13 08E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08464',
		'name'=>'Tam Cường',
		'type'=>'Xã',
		'location'=>'21 19 00N, 105 15 52E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08467',
		'name'=>'Cổ Tiết',
		'type'=>'Xã',
		'location'=>'21 17 23N, 105 14 42E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08470',
		'name'=>'Quang Húc',
		'type'=>'Xã',
		'location'=>'21 17 09N, 105 11 18E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08473',
		'name'=>'Hương Nộn',
		'type'=>'Xã',
		'location'=>'21 16 11N, 105 15 56E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08476',
		'name'=>'Tề Lễ',
		'type'=>'Xã',
		'location'=>'21 16 04N, 105 10 53E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08479',
		'name'=>'Thọ Văn',
		'type'=>'Xã',
		'location'=>'21 15 00N, 105 13 55E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08482',
		'name'=>'Dị Nậu',
		'type'=>'Xã',
		'location'=>'21 14 26N, 105 15 09E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08485',
		'name'=>'Hồng Đà',
		'type'=>'Xã',
		'location'=>'21 14 34N, 105 20 37E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08488',
		'name'=>'Dậu Dương',
		'type'=>'Xã',
		'location'=>'21 14 35N, 105 18 13E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08491',
		'name'=>'Thượng Nông',
		'type'=>'Xã',
		'location'=>'21 14 06N, 105 19 15E',
		'district_id'=>'236'
		] );
		
		Ward::create( [
		'ward_id'=>'08494',
		'name'=>'Lâm Thao',
		'type'=>'Thị Trấn',
		'location'=>'21 19 17N, 105 17 17E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08497',
		'name'=>'Tiên Kiên',
		'type'=>'Xã',
		'location'=>'21 23 01N, 105 17 43E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08498',
		'name'=>'Sơn Hùng',
		'type'=>'Thị Trấn',
		'location'=>'21 21 27N, 105 18 01E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08500',
		'name'=>'Xuân Lũng',
		'type'=>'Xã',
		'location'=>'21 22 29N, 105 16 40E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08503',
		'name'=>'Hy Cương',
		'type'=>'Xã',
		'location'=>'21 22 07N, 105 19 00E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'08506',
		'name'=>'Chu Hóa',
		'type'=>'Xã',
		'location'=>'21 20 36N, 105 18 54E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'08509',
		'name'=>'Xuân Huy',
		'type'=>'Xã',
		'location'=>'21 22 06N, 105 15 50E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08512',
		'name'=>'Thạch Sơn',
		'type'=>'Xã',
		'location'=>'21 20 51N, 105 16 50E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08515',
		'name'=>'Thanh Đình',
		'type'=>'Xã',
		'location'=>'21 19 51N, 105 19 16E',
		'district_id'=>'227'
		] );
		
		Ward::create( [
		'ward_id'=>'08518',
		'name'=>'Sơn Vi',
		'type'=>'Xã',
		'location'=>'21 18 43N, 105 18 23E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08521',
		'name'=>'Hợp Hải',
		'type'=>'Xã',
		'location'=>'21 18 08N, 105 16 18E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08524',
		'name'=>'Sơn Dương',
		'type'=>'Xã',
		'location'=>'21 17 37N, 105 17 35E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08527',
		'name'=>'Cao Xá',
		'type'=>'Xã',
		'location'=>'21 17 50N, 105 20 15E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08530',
		'name'=>'Kinh Kệ',
		'type'=>'Xã',
		'location'=>'21 16 57N, 105 16 38E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08533',
		'name'=>'Vĩnh Lại',
		'type'=>'Xã',
		'location'=>'21 16 03N, 105 20 13E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08536',
		'name'=>'Tứ Xã',
		'type'=>'Xã',
		'location'=>'21 17 07N, 105 18 37E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08539',
		'name'=>'Bản Nguyên',
		'type'=>'Xã',
		'location'=>'21 15 35N, 105 18 48E',
		'district_id'=>'237'
		] );
		
		Ward::create( [
		'ward_id'=>'08542',
		'name'=>'Thanh Sơn',
		'type'=>'Thị Trấn',
		'location'=>'21 12 37N, 105 11 25E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08545',
		'name'=>'Thu Cúc',
		'type'=>'Xã',
		'location'=>'21 18 26N, 104 52 29E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08548',
		'name'=>'Thạch Kiệt',
		'type'=>'Xã',
		'location'=>'21 15 23N, 104 58 25E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08551',
		'name'=>'Thu Ngạc',
		'type'=>'Xã',
		'location'=>'21 15 24N, 105 02 45E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08554',
		'name'=>'Kiệt Sơn',
		'type'=>'Xã',
		'location'=>'21 13 41N, 104 56 08E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08557',
		'name'=>'Đồng Sơn',
		'type'=>'Xã',
		'location'=>'21 12 46N, 104 52 22E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08560',
		'name'=>'Lai Đồng',
		'type'=>'Xã',
		'location'=>'21 12 54N, 104 54 55E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08563',
		'name'=>'Sơn Hùng',
		'type'=>'Xã',
		'location'=>'21 13 50N, 105 11 32E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08566',
		'name'=>'Tân Phú',
		'type'=>'Xã',
		'location'=>'21 12 35N, 105 00 03E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08569',
		'name'=>'Mỹ Thuận',
		'type'=>'Xã',
		'location'=>'21 12 13N, 105 03 57E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08572',
		'name'=>'Địch Quả',
		'type'=>'Xã',
		'location'=>'21 12 05N, 105 07 32E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08575',
		'name'=>'Giáp Lai',
		'type'=>'Xã',
		'location'=>'21 12 16N, 105 13 07E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08578',
		'name'=>'Tân Sơn',
		'type'=>'Xã',
		'location'=>'21 11 18N, 104 56 12E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08581',
		'name'=>'Thục Luyện',
		'type'=>'Xã',
		'location'=>'21 10 36N, 105 11 14E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08584',
		'name'=>'Võ Miếu',
		'type'=>'Xã',
		'location'=>'21 08 41N, 105 08 56E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08587',
		'name'=>'Thạch Khoán',
		'type'=>'Xã',
		'location'=>'21 11 01N, 105 14 46E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08590',
		'name'=>'Xuân Đài',
		'type'=>'Xã',
		'location'=>'21 08 34N, 105 00 09E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08593',
		'name'=>'Minh Đài',
		'type'=>'Xã',
		'location'=>'21 10 12N, 105 02 45E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08596',
		'name'=>'Văn Luông',
		'type'=>'Xã',
		'location'=>'21 09 35N, 105 04 41E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08599',
		'name'=>'Xuân Sơn',
		'type'=>'Xã',
		'location'=>'21 07 55N, 104 54 35E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08602',
		'name'=>'Cự Thắng',
		'type'=>'Xã',
		'location'=>'21 07 59N, 105 11 47E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08605',
		'name'=>'Tất Thắng',
		'type'=>'Xã',
		'location'=>'21 08 21N, 105 14 17E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08608',
		'name'=>'Long Cốc',
		'type'=>'Xã',
		'location'=>'21 07 11N, 105 03 38E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08611',
		'name'=>'Văn Miếu',
		'type'=>'Xã',
		'location'=>'21 06 19N, 105 08 20E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08614',
		'name'=>'Cự Đồng',
		'type'=>'Xã',
		'location'=>'21 05 58N, 105 13 41E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08617',
		'name'=>'Kim Thượng',
		'type'=>'Xã',
		'location'=>'21 03 56N, 104 58 37E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08620',
		'name'=>'Tam Thanh',
		'type'=>'Xã',
		'location'=>'21 04 49N, 105 06 21E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08623',
		'name'=>'Thắng Sơn',
		'type'=>'Xã',
		'location'=>'21 05 19N, 105 15 15E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08626',
		'name'=>'Vinh Tiền',
		'type'=>'Xã',
		'location'=>'21 04 06N, 105 04 04E',
		'district_id'=>'240'
		] );
		
		Ward::create( [
		'ward_id'=>'08629',
		'name'=>'Tân Minh',
		'type'=>'Xã',
		'location'=>'21 03 52N, 105 10 33E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08632',
		'name'=>'Hương Cần',
		'type'=>'Xã',
		'location'=>'21 02 33N, 105 14 08E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08635',
		'name'=>'Khả Cửu',
		'type'=>'Xã',
		'location'=>'21 02 25N, 105 08 29E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08638',
		'name'=>'Đông Cửu',
		'type'=>'Xã',
		'location'=>'21 01 31N, 105 04 40E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08641',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'21 00 52N, 105 11 55E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08644',
		'name'=>'Yên Lãng',
		'type'=>'Xã',
		'location'=>'20 59 52N, 105 16 13E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08647',
		'name'=>'Yên Lương',
		'type'=>'Xã',
		'location'=>'20 58 50N, 105 13 39E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08650',
		'name'=>'Thượng Cửu',
		'type'=>'Xã',
		'location'=>'20 58 36N, 105 07 50E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08653',
		'name'=>'Lương Nha',
		'type'=>'Xã',
		'location'=>'20 59 29N, 105 18 27E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08656',
		'name'=>'Yên Sơn',
		'type'=>'Xã',
		'location'=>'20 57 38N, 105 15 15E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08659',
		'name'=>'Tinh Nhuệ',
		'type'=>'Xã',
		'location'=>'20 57 41N, 105 19 26E',
		'district_id'=>'238'
		] );
		
		Ward::create( [
		'ward_id'=>'08662',
		'name'=>'Đào Xá',
		'type'=>'Xã',
		'location'=>'21 13 09N, 105 16 12E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08665',
		'name'=>'Thạch Đồng',
		'type'=>'Xã',
		'location'=>'21 12 16N, 105 18 22E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08668',
		'name'=>'Xuân Lộc',
		'type'=>'Xã',
		'location'=>'21 13 09N, 105 19 33E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08671',
		'name'=>'Tân Phương',
		'type'=>'Xã',
		'location'=>'21 11 24N, 105 16 51E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08674',
		'name'=>'La Phù',
		'type'=>'Xã',
		'location'=>'21 10 09N, 105 15 16E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08677',
		'name'=>'Sơn Thủy',
		'type'=>'Xã',
		'location'=>'21 08 04N, 105 15 35E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08680',
		'name'=>'Bảo Yên',
		'type'=>'Xã',
		'location'=>'21 08 41N, 105 16 58E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08683',
		'name'=>'Đoan Hạ',
		'type'=>'Xã',
		'location'=>'21 08 04N, 105 16 47E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08686',
		'name'=>'Đồng Luận',
		'type'=>'Xã',
		'location'=>'21 06 30N, 105 18 26E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08689',
		'name'=>'Hoàng Xá',
		'type'=>'Xã',
		'location'=>'21 06 42N, 105 16 49E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08692',
		'name'=>'Trung Thịnh',
		'type'=>'Xã',
		'location'=>'21 06 39N, 105 17 39E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08695',
		'name'=>'Trung Nghĩa',
		'type'=>'Xã',
		'location'=>'21 05 05N, 105 17 40E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08698',
		'name'=>'Phượng Mao',
		'type'=>'Xã',
		'location'=>'21 04 15N, 105 16 28E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08701',
		'name'=>'Yến Mao',
		'type'=>'Xã',
		'location'=>'21 02 28N, 105 16 42E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08704',
		'name'=>'Tu Vũ',
		'type'=>'Xã',
		'location'=>'21 00 56N, 105 18 04E',
		'district_id'=>'239'
		] );
		
		Ward::create( [
		'ward_id'=>'08707',
		'name'=>'Tích Sơn',
		'type'=>'Phường',
		'location'=>'21 18 27N, 105 35 00E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08710',
		'name'=>'Liên Bảo',
		'type'=>'Phường',
		'location'=>'21 19 17N, 105 36 08E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08713',
		'name'=>'Hội Hợp',
		'type'=>'Phường',
		'location'=>'21 17 34N, 105 33 54E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08716',
		'name'=>'Đống Đa',
		'type'=>'Phường',
		'location'=>'21 18 22N, 105 35 51E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08719',
		'name'=>'Ngô Quyền',
		'type'=>'Phường',
		'location'=>'21 18 31N, 105 35 33E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08722',
		'name'=>'Đồng Tâm',
		'type'=>'Phường',
		'location'=>'21 18 17N, 105 34 37E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08725',
		'name'=>'Định Trung',
		'type'=>'Xã',
		'location'=>'21 19 43N, 105 35 32E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08728',
		'name'=>'Khai Quang',
		'type'=>'Phường',
		'location'=>'21 18 58N, 105 37 21E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08731',
		'name'=>'Thanh Trù',
		'type'=>'Xã',
		'location'=>'21 16 32N, 105 36 22E',
		'district_id'=>'243'
		] );
		
		Ward::create( [
		'ward_id'=>'08734',
		'name'=>'Trưng Trắc',
		'type'=>'Phường',
		'location'=>'21 14 20N, 105 42 18E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08737',
		'name'=>'Hùng Vương',
		'type'=>'Phường',
		'location'=>'21 13 39N, 105 42 24E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08740',
		'name'=>'Trưng Nhị',
		'type'=>'Phường',
		'location'=>'21 14 26N, 105 42 12E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08743',
		'name'=>'Phúc Thắng',
		'type'=>'Phường',
		'location'=>'21 14 18N, 105 43 01E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08746',
		'name'=>'Xuân Hoà',
		'type'=>'Phường',
		'location'=>'21 17 18N, 105 43 35E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08747',
		'name'=>'Đồng Xuân',
		'type'=>'Phường',
		'location'=>'',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08749',
		'name'=>'Ngọc Thanh',
		'type'=>'Xã',
		'location'=>'21 21 21N, 105 44 35E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08752',
		'name'=>'Cao Minh',
		'type'=>'Xã',
		'location'=>'21 17 48N, 105 42 00E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08755',
		'name'=>'Nam Viêm',
		'type'=>'Xã',
		'location'=>'21 15 59N, 105 42 14E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08758',
		'name'=>'Tiền Châu',
		'type'=>'Xã',
		'location'=>'21 14 20N, 105 41 29E',
		'district_id'=>'244'
		] );
		
		Ward::create( [
		'ward_id'=>'08761',
		'name'=>'Lập Thạch',
		'type'=>'Thị Trấn',
		'location'=>'21 24 39N, 105 27 23E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08764',
		'name'=>'Quang Sơn',
		'type'=>'Xã',
		'location'=>'21 30 43N, 105 28 05E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08767',
		'name'=>'Ngọc Mỹ',
		'type'=>'Xã',
		'location'=>'21 29 05N, 105 26 58E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08770',
		'name'=>'Hợp Lý',
		'type'=>'Xã',
		'location'=>'21 29 40N, 105 28 37E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08773',
		'name'=>'Lãng Công',
		'type'=>'Xã',
		'location'=>'21 29 18N, 105 23 45E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08776',
		'name'=>'Quang Yên',
		'type'=>'Xã',
		'location'=>'21 30 19N, 105 21 54E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08779',
		'name'=>'Bạch Lưu',
		'type'=>'Xã',
		'location'=>'21 29 23N, 105 20 08E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08782',
		'name'=>'Hải Lựu',
		'type'=>'Xã',
		'location'=>'21 28 18N, 105 21 07E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08785',
		'name'=>'Bắc Bình',
		'type'=>'Xã',
		'location'=>'21 28 31N, 105 29 32E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08788',
		'name'=>'Thái Hòa',
		'type'=>'Xã',
		'location'=>'21 27 12N, 105 30 56E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08789',
		'name'=>'Hoa Sơn',
		'type'=>'Thị Trấn',
		'location'=>'',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08791',
		'name'=>'Liễn Sơn',
		'type'=>'Xã',
		'location'=>'21 16 41N, 105 29 58E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08794',
		'name'=>'Xuân Hòa',
		'type'=>'Xã',
		'location'=>'21 26 16N, 105 27 59E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08797',
		'name'=>'Vân Trục',
		'type'=>'Xã',
		'location'=>'21 27 01N, 105 26 31E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08800',
		'name'=>'Đồng Quế',
		'type'=>'Xã',
		'location'=>'21 27 24N, 105 24 43E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08803',
		'name'=>'Nhân Đạo',
		'type'=>'Xã',
		'location'=>'21 27 24N, 105 22 16E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08806',
		'name'=>'Đôn Nhân',
		'type'=>'Xã',
		'location'=>'21 26 10N, 105 21 13E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08809',
		'name'=>'Phương Khoan',
		'type'=>'Xã',
		'location'=>'21 26 31N, 105 23 01E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08812',
		'name'=>'Liên Hòa',
		'type'=>'Xã',
		'location'=>'21 24 27N, 105 30 42E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08815',
		'name'=>'Tử Du',
		'type'=>'Xã',
		'location'=>'21 24 03N, 105 28 49E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08818',
		'name'=>'Tân Lập',
		'type'=>'Xã',
		'location'=>'21 26 00N, 105 25 49E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08821',
		'name'=>'Nhạo Sơn',
		'type'=>'Xã',
		'location'=>'21 25 48N, 105 25 02E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08824',
		'name'=>'Tam Sơn',
		'type'=>'Thị Trấn',
		'location'=>'21 25 19N, 105 24 09E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08827',
		'name'=>'Như Thụy',
		'type'=>'Xã',
		'location'=>'21 24 22N, 105 24 51E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08830',
		'name'=>'Yên Thạch',
		'type'=>'Xã',
		'location'=>'21 24 03N, 105 25 18E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08833',
		'name'=>'Bàn Giản',
		'type'=>'Xã',
		'location'=>'21 23 54N, 105 30 00E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08836',
		'name'=>'Xuân Lôi',
		'type'=>'Xã',
		'location'=>'21 23 08N, 105 27 30E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08839',
		'name'=>'Đồng Ích',
		'type'=>'Xã',
		'location'=>'21 21 51N, 105 29 56E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08842',
		'name'=>'Tiên Lữ',
		'type'=>'Xã',
		'location'=>'21 22 07N, 105 28 53E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08845',
		'name'=>'Văn Quán',
		'type'=>'Xã',
		'location'=>'21 21 28N, 105 27 28E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08848',
		'name'=>'Đồng Thịnh',
		'type'=>'Xã',
		'location'=>'21 22 37N, 105 25 49E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08851',
		'name'=>'Tứ Yên',
		'type'=>'Xã',
		'location'=>'21 22 38N, 105 24 08E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08854',
		'name'=>'Đức Bác',
		'type'=>'Xã',
		'location'=>'21 21 23N, 105 24 41E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08857',
		'name'=>'Đình Chu',
		'type'=>'Xã',
		'location'=>'21 21 02N, 105 28 20E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08860',
		'name'=>'Cao Phong',
		'type'=>'Xã',
		'location'=>'21 20 43N, 105 26 17E',
		'district_id'=>'253'
		] );
		
		Ward::create( [
		'ward_id'=>'08863',
		'name'=>'Triệu Đề',
		'type'=>'Xã',
		'location'=>'21 19 53N, 105 28 20E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08866',
		'name'=>'Sơn Đông',
		'type'=>'Xã',
		'location'=>'21 19 06N, 105 27 43E',
		'district_id'=>'246'
		] );
		
		Ward::create( [
		'ward_id'=>'08869',
		'name'=>'Hợp Hòa',
		'type'=>'Thị Trấn',
		'location'=>'21 22 59N, 105 32 28E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08872',
		'name'=>'Hoàng Hoa',
		'type'=>'Xã',
		'location'=>'21 24 55N, 105 33 07E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08875',
		'name'=>'Đồng Tĩnh',
		'type'=>'Xã',
		'location'=>'21 25 28N, 105 32 05E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08878',
		'name'=>'Kim Long',
		'type'=>'Xã',
		'location'=>'21 22 24N, 105 35 45E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08881',
		'name'=>'Hướng Đạo',
		'type'=>'Xã',
		'location'=>'21 22 40N, 105 33 57E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08884',
		'name'=>'Đạo Tú',
		'type'=>'Xã',
		'location'=>'21 21 18N, 105 33 42E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08887',
		'name'=>'An Hòa',
		'type'=>'Xã',
		'location'=>'21 22 48N, 105 31 23E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08890',
		'name'=>'Thanh Vân',
		'type'=>'Xã',
		'location'=>'21 20 15N, 105 34 22E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08893',
		'name'=>'Duy Phiên',
		'type'=>'Xã',
		'location'=>'21 20 15N, 105 32 38E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08896',
		'name'=>'Hoàng Đan',
		'type'=>'Xã',
		'location'=>'21 20 59N, 105 30 57E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08899',
		'name'=>'Hoàng Lâu',
		'type'=>'Xã',
		'location'=>'21 19 54N, 105 31 17E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08902',
		'name'=>'Vân Hội',
		'type'=>'Xã',
		'location'=>'21 18 37N, 105 32 52E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08905',
		'name'=>'Hợp Thịnh',
		'type'=>'Xã',
		'location'=>'21 17 25N, 105 32 29E',
		'district_id'=>'247'
		] );
		
		Ward::create( [
		'ward_id'=>'08908',
		'name'=>'Tam Đảo',
		'type'=>'Thị Trấn',
		'location'=>'21 27 21N, 105 38 27E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08911',
		'name'=>'Hợp Châu',
		'type'=>'Xã',
		'location'=>'21 23 37N, 105 37 00E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08914',
		'name'=>'Đạo Trù',
		'type'=>'Xã',
		'location'=>'21 31 17N, 105 33 21E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08917',
		'name'=>'Yên Dương',
		'type'=>'Xã',
		'location'=>'21 30 09N, 105 30 22E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08920',
		'name'=>'Bồ Lý',
		'type'=>'Xã',
		'location'=>'21 28 22N, 105 32 12E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08923',
		'name'=>'Đại Đình',
		'type'=>'Xã',
		'location'=>'21 27 56N, 105 34 57E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08926',
		'name'=>'Tam Quan',
		'type'=>'Xã',
		'location'=>'21 26 20N, 105 36 03E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08929',
		'name'=>'Hồ Sơn',
		'type'=>'Xã',
		'location'=>'21 25 24N, 105 37 11E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08932',
		'name'=>'Minh Quang',
		'type'=>'Xã',
		'location'=>'21 24 09N, 105 39 12E',
		'district_id'=>'248'
		] );
		
		Ward::create( [
		'ward_id'=>'08935',
		'name'=>'Hương Canh',
		'type'=>'Thị Trấn',
		'location'=>'21 16 12N, 105 38 51E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08936',
		'name'=>'Gia Khánh',
		'type'=>'Thị Trấn',
		'location'=>'',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08938',
		'name'=>'Trung Mỹ',
		'type'=>'Xã',
		'location'=>'21 23 14N, 105 41 25E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08944',
		'name'=>'Bá Hiến',
		'type'=>'Xã',
		'location'=>'21 18 58N, 105 40 59E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08947',
		'name'=>'Thiện Kế',
		'type'=>'Xã',
		'location'=>'21 19 45N, 105 39 46E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08950',
		'name'=>'Hương Sơn',
		'type'=>'Xã',
		'location'=>'21 19 40N, 105 37 55E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08953',
		'name'=>'Tam Hợp',
		'type'=>'Xã',
		'location'=>'21 17 41N, 105 39 17E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08956',
		'name'=>'Quất Lưu',
		'type'=>'Xã',
		'location'=>'21 17 08N, 105 38 06E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08959',
		'name'=>'Sơn Lôi',
		'type'=>'Xã',
		'location'=>'21 16 43N, 105 40 54E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08962',
		'name'=>'Đạo Đức',
		'type'=>'Xã',
		'location'=>'21 14 35N, 105 39 53E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08965',
		'name'=>'Tân Phong',
		'type'=>'Xã',
		'location'=>'21 15 39N, 105 37 53E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08968',
		'name'=>'Thanh Lãng',
		'type'=>'Thị Trấn',
		'location'=>'21 14 56N, 105 36 57E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08971',
		'name'=>'Phú Xuân',
		'type'=>'Xã',
		'location'=>'21 13 59N, 105 38 07E',
		'district_id'=>'249'
		] );
		
		Ward::create( [
		'ward_id'=>'08973',
		'name'=>'Chi Đông',
		'type'=>'Thị Trấn',
		'location'=>'',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08974',
		'name'=>'Đại Thịnh',
		'type'=>'Xã',
		'location'=>'21 11 14N, 105 42 55E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08977',
		'name'=>'Kim Hoa',
		'type'=>'Xã',
		'location'=>'21 12 56N, 105 44 14E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08980',
		'name'=>'Thạch Đà',
		'type'=>'Xã',
		'location'=>'21 10 13N, 105 40 18E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08983',
		'name'=>'Tiến Thắng',
		'type'=>'Xã',
		'location'=>'21 13 28N, 105 04 09E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08986',
		'name'=>'Tự Lập',
		'type'=>'Xã',
		'location'=>'21 12 40N, 105 39 29E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08989',
		'name'=>'Quang Minh',
		'type'=>'Thị Trấn',
		'location'=>'21 12 00N, 105 45 58E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08992',
		'name'=>'Thanh Lâm',
		'type'=>'Xã',
		'location'=>'21 12 22N, 105 43 22E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08995',
		'name'=>'Tam Đồng',
		'type'=>'Xã',
		'location'=>'21 11 52N, 105 41 13E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'08998',
		'name'=>'Liên Mạc',
		'type'=>'Xã',
		'location'=>'21 11 29N, 105 39 10E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09001',
		'name'=>'Vạn Yên',
		'type'=>'Xã',
		'location'=>'21 12 08N, 106 37 31E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09004',
		'name'=>'Chu Phan',
		'type'=>'Xã',
		'location'=>'21 10 08N, 105 39 21E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09007',
		'name'=>'Tiến Thịnh',
		'type'=>'Xã',
		'location'=>'21 10 33N, 105 38 05E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09010',
		'name'=>'Mê Linh',
		'type'=>'Xã',
		'location'=>'21 09 50N, 105 44 11E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09013',
		'name'=>'Văn Khê',
		'type'=>'Xã',
		'location'=>'21 09 41N, 105 42 31E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09016',
		'name'=>'Hoàng Kim',
		'type'=>'Xã',
		'location'=>'21 09 46N, 105 41 10E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09019',
		'name'=>'Tiền Phong',
		'type'=>'Xã',
		'location'=>'21 09 23N, 105 45 24E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09022',
		'name'=>'Tráng Việt',
		'type'=>'Xã',
		'location'=>'21 08 29N, 105 43 58E',
		'district_id'=>'250'
		] );
		
		Ward::create( [
		'ward_id'=>'09025',
		'name'=>'Yên Lạc',
		'type'=>'Thị Trấn',
		'location'=>'21 14 24N, 105 34 54E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09028',
		'name'=>'Đồng Cương',
		'type'=>'Xã',
		'location'=>'21 16 19N, 105 35 09E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09031',
		'name'=>'Đồng Văn',
		'type'=>'Xã',
		'location'=>'21 16 14N, 105 32 16E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09034',
		'name'=>'Bình Định',
		'type'=>'Xã',
		'location'=>'21 15 30N, 105 35 32E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09037',
		'name'=>'Trung Nguyên',
		'type'=>'Xã',
		'location'=>'21 15 26N, 105 33 48E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09040',
		'name'=>'Tề Lỗ',
		'type'=>'Xã',
		'location'=>'21 15 05N, 105 32 52E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09043',
		'name'=>'Tam Hồng',
		'type'=>'Xã',
		'location'=>'21 13 10N, 105 34 08E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09046',
		'name'=>'Yên Đồng',
		'type'=>'Xã',
		'location'=>'21 12 55N, 105 32 57E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09049',
		'name'=>'Văn Tiến',
		'type'=>'Xã',
		'location'=>'21 13 17N, 105 37 23E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09052',
		'name'=>'Nguyệt Đức',
		'type'=>'Xã',
		'location'=>'21 12 41N, 105 36 24E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09055',
		'name'=>'Yên Phương',
		'type'=>'Xã',
		'location'=>'21 12 51N, 105 35 17E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09058',
		'name'=>'Hồng Phương',
		'type'=>'Xã',
		'location'=>'21 11 37N, 105 35 36E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09061',
		'name'=>'Trung Kiên',
		'type'=>'Xã',
		'location'=>'21 11 16N, 105 35 26E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09064',
		'name'=>'Liên Châu',
		'type'=>'Xã',
		'location'=>'21 10 54N, 105 34 04E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09067',
		'name'=>'Đại Tự',
		'type'=>'Xã',
		'location'=>'21 10 36N, 105 32 26E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09070',
		'name'=>'Hồng Châu',
		'type'=>'Xã',
		'location'=>'21 10 35N, 105 35 06E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09073',
		'name'=>'Trung Hà',
		'type'=>'Xã',
		'location'=>'21 10 45N, 105 36 45E',
		'district_id'=>'251'
		] );
		
		Ward::create( [
		'ward_id'=>'09076',
		'name'=>'Vĩnh Tường',
		'type'=>'Thị Trấn',
		'location'=>'21 13 19N, 105 30 19E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09079',
		'name'=>'Kim Xá',
		'type'=>'Xã',
		'location'=>'21 19 19N, 105 29 49E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09082',
		'name'=>'Yên Bình',
		'type'=>'Xã',
		'location'=>'21 18 18N, 105 31 15E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09085',
		'name'=>'Chấn Hưng',
		'type'=>'Xã',
		'location'=>'21 17 17N, 105 30 51E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09088',
		'name'=>'Nghĩa Hưng',
		'type'=>'Xã',
		'location'=>'21 17 38N, 105 29 37E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09091',
		'name'=>'Yên Lập',
		'type'=>'Xã',
		'location'=>'21 17 38N, 105 28 47E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09094',
		'name'=>'Việt Xuân',
		'type'=>'Xã',
		'location'=>'21 17 37N, 105 27 37E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09097',
		'name'=>'Bồ Sao',
		'type'=>'Xã',
		'location'=>'21 46 42N, 105 27 13E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09100',
		'name'=>'Đại Đồng',
		'type'=>'Xã',
		'location'=>'21 16 13N, 105 30 33E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09103',
		'name'=>'Tân Tiến',
		'type'=>'Xã',
		'location'=>'21 16 34N, 105 29 21E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09106',
		'name'=>'Lũng Hoà',
		'type'=>'Xã',
		'location'=>'21 16 14N, 105 28 10E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09109',
		'name'=>'Cao Đại',
		'type'=>'Xã',
		'location'=>'21 15 15N, 105 27 14E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09112',
		'name'=>'Thổ Tang',
		'type'=>'Thị Trấn',
		'location'=>'21 15 18N, 105 29 10E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09115',
		'name'=>'Vĩnh Sơn',
		'type'=>'Xã',
		'location'=>'21 14 50N, 105 30 05E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09118',
		'name'=>'Bình Dương',
		'type'=>'Xã',
		'location'=>'21 14 47N, 105 31 24E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09121',
		'name'=>'Tân Cương',
		'type'=>'Xã',
		'location'=>'21 14 44N, 105 28 00E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09124',
		'name'=>'Phú Thịnh',
		'type'=>'Xã',
		'location'=>'21 14 02N, 105 27 33E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09127',
		'name'=>'Thượng Trưng',
		'type'=>'Xã',
		'location'=>'21 13 53N, 105 28 57E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09130',
		'name'=>'Vũ Di',
		'type'=>'Xã',
		'location'=>'21 13 57N, 105 30 44E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09133',
		'name'=>'Lý Nhân',
		'type'=>'Xã',
		'location'=>'21 13 10N, 105 27 56E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09136',
		'name'=>'Tuân Chính',
		'type'=>'Xã',
		'location'=>'21 12 39N, 105 29 07E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09139',
		'name'=>'Vân Xuân',
		'type'=>'Xã',
		'location'=>'21 13 49N, 105 32 02E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09142',
		'name'=>'Tam Phúc',
		'type'=>'Xã',
		'location'=>'21 12 27N, 105 30 13E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09145',
		'name'=>'Tứ Trưng',
		'type'=>'Thị Trấn',
		'location'=>'21 12 34N, 105 31 16E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09148',
		'name'=>'Ngũ Kiên',
		'type'=>'Xã',
		'location'=>'21 11 48N, 105 31 34E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09151',
		'name'=>'An Tường',
		'type'=>'Xã',
		'location'=>'21 11 31N, 105 28 14E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09154',
		'name'=>'Vĩnh Thịnh',
		'type'=>'Xã',
		'location'=>'21 10 41N, 105 29 30E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09157',
		'name'=>'Phú Đa',
		'type'=>'Xã',
		'location'=>'21 10 56N, 105 30 48E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09160',
		'name'=>'Vĩnh Ninh',
		'type'=>'Xã',
		'location'=>'21 10 03N, 105 30 20E',
		'district_id'=>'252'
		] );
		
		Ward::create( [
		'ward_id'=>'09163',
		'name'=>'Vũ Ninh',
		'type'=>'Phường',
		'location'=>'21 11 34N, 106 04 12E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09166',
		'name'=>'Đáp Cầu',
		'type'=>'Phường',
		'location'=>'21 12 05N, 106 05 39E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09169',
		'name'=>'Thị Cầu',
		'type'=>'Phường',
		'location'=>'21 11 40N, 106 05 15E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09172',
		'name'=>'Kinh Bắc',
		'type'=>'Phường',
		'location'=>'21 11 09N, 106 03 13E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09175',
		'name'=>'Vệ An',
		'type'=>'Phường',
		'location'=>'21 11 07N, 106 03 28E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09178',
		'name'=>'Tiền An',
		'type'=>'Phường',
		'location'=>'21 11 00N, 106 03 52E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09181',
		'name'=>'Đại Phúc',
		'type'=>'Phường',
		'location'=>'21 10 21N, 106 04 47E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09184',
		'name'=>'Ninh Xá',
		'type'=>'Phường',
		'location'=>'21 10 41N, 106 03 37E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09187',
		'name'=>'Suối Hoa',
		'type'=>'Phường',
		'location'=>'21 11 08N, 106 04 23E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09190',
		'name'=>'Võ Cường',
		'type'=>'Phường',
		'location'=>'21 09 47N, 106 03 07E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09193',
		'name'=>'Chờ',
		'type'=>'Thị Trấn',
		'location'=>'21 11 53N, 105 56 50E',
		'district_id'=>'258'
		] );
		
		Ward::create( [
		'ward_id'=>'09196',
		'name'=>'Dũng Liệt',
		'type'=>'Xã',
		'location'=>'21 14 49N, 106 00 20E',
		'district_id'=>'258'
		] );
		
		Ward::create( [
		'ward_id'=>'09199',
		'name'=>'Tam Đa',
		'type'=>'Xã',
		'location'=>'21 13 37N, 106 01 22E',
		'district_id'=>'258'
		] );
		
		Ward::create( [
		'ward_id'=>'09202',
		'name'=>'Tam Giang',
		'type'=>'Xã',
		'location'=>'21 13 45N, 105 56 24E',
		'district_id'=>'258'
		] );
		
		Ward::create( [
		'ward_id'=>'09205',
		'name'=>'Yên Trung',
		'type'=>'Xã',
		'location'=>'21 13 05N, 105 59 35E',
		'district_id'=>'258'
		] );
		
		Ward::create( [
		'ward_id'=>'09208',
		'name'=>'Thụy Hòa',
		'type'=>'Xã',
		'location'=>'21 13 06N, 106 00 54E',
		'district_id'=>'258'
		] );
		
		Ward::create( [
		'ward_id'=>'09211',
		'name'=>'Hòa Tiến',
		'type'=>'Xã',
		'location'=>'21 12 46N, 105 55 08E',
		'district_id'=>'258'
		] );
		
		Ward::create( [
		'ward_id'=>'09214',
		'name'=>'Hòa Long',
		'type'=>'Xã',
		'location'=>'21 12 50N, 106 03 45E',
		'district_id'=>'256'
		] );
		
		Ward::create( [
		'ward_id'=>'09217',
		'name'=>'Đông Tiến',
		'type'=>'Xã',
		'location'=>'21 12 48N, 105 58 11E',
		'district_id'=>'258'
		] );
		
		Ward::create( [
		'ward_id'=>'09220',
		'name'=>'Yên Phụ',
		'type'=>'Xã',
		'location'=>'21 11 54N, 105 55 31E',
		'district_id'=>'258'
		] );

		//----------------
		Ward::create( ['ward_id'=>'09223','name'=>'Trung Nghĩa','type'=>'Xã','location'=>'21 11 10N, 105 58 06E','district_id'=>'258'] );
		Ward::create( ['ward_id'=>'09226','name'=>'Vạn An','type'=>'Xã','location'=>'21 11 49N, 106 02 50E','district_id'=>'256'] );
		Ward::create( ['ward_id'=>'09229','name'=>'Đông Phong','type'=>'Xã','location'=>'21 11 26N, 106 01 04E','district_id'=>'258'] );
		Ward::create( ['ward_id'=>'09232','name'=>'Long Châu','type'=>'Xã','location'=>'21 11 30N, 105 59 13E','district_id'=>'258'] );
		Ward::create( ['ward_id'=>'09235','name'=>'Khúc Xuyên','type'=>'Xã','location'=>'21 11 05N, 106 02 39E','district_id'=>'256'] );
		Ward::create( ['ward_id'=>'09238','name'=>'Văn Môn','type'=>'Xã','location'=>'21 10 35N, 105 55 36E','district_id'=>'258'] );
		Ward::create( ['ward_id'=>'09241','name'=>'Đông Thọ','type'=>'Xã','location'=>'21 10 22N, 105 56 56E','district_id'=>'258'] );
		Ward::create( ['ward_id'=>'09244','name'=>'Phong Khê','type'=>'Xã','location'=>'21 10 23N, 106 01 50E','district_id'=>'256'] );
		Ward::create( ['ward_id'=>'09247','name'=>'Phố Mới','type'=>'Thị Trấn','location'=>'21 09 17N, 106 09 10E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09250','name'=>'Việt Thống','type'=>'Xã','location'=>'21 12 20N, 106 07 39E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09253','name'=>'Đại Xuân','type'=>'Xã','location'=>'21 11 19N, 106 07 35E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09256','name'=>'Kim Chân','type'=>'Xã','location'=>'21 11 27N, 106 06 22E','district_id'=>'256'] );
		Ward::create( ['ward_id'=>'09259','name'=>'Nhân Hòa','type'=>'Xã','location'=>'21 11 02N, 106 08 50E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09262','name'=>'Bằng An','type'=>'Xã','location'=>'21 10 25N, 106 09 38E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09265','name'=>'Phương Liễu','type'=>'Xã','location'=>'21 10 01N, 106 07 16E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09268','name'=>'Quế Tân','type'=>'Xã','location'=>'21 10 01N, 106 11 39E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09271','name'=>'Vân Dương','type'=>'Xã','location'=>'21 09 38N, 106 05 30E','district_id'=>'256'] );
		Ward::create( ['ward_id'=>'09274','name'=>'Phù Lương','type'=>'Xã','location'=>'21 09 12N, 106 12 03E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09277','name'=>'Phù Lãng','type'=>'Xã','location'=>'21 09 22N, 106 14 14E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09280','name'=>'Phượng Mao','type'=>'Xã','location'=>'21 08 59N, 106 08 22E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09283','name'=>'Việt Hùng','type'=>'Xã','location'=>'21 08 50N, 106 10 25E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09286','name'=>'Nam Sơn','type'=>'Xã','location'=>'21 08 41N, 106 06 10E','district_id'=>'256'] );
		Ward::create( ['ward_id'=>'09289','name'=>'Ngọc Xá','type'=>'Xã','location'=>'21 07 52N, 106 13 25E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09292','name'=>'Châu Phong','type'=>'Xã','location'=>'21 07 50N, 106 15 03E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09295','name'=>'Bồng Lai','type'=>'Xã','location'=>'21 07 39N, 106 09 42E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09298','name'=>'Cách Bi','type'=>'Xã','location'=>'21 07 08N, 106 10 53E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09301','name'=>'Đào Viên','type'=>'Xã','location'=>'21 07 05N, 106 12 27E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09304','name'=>'Yên Giả','type'=>'Xã','location'=>'21 07 28N, 106 07 27E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09307','name'=>'Mộ Đạo','type'=>'Xã','location'=>'21 07 22N, 106 08 31E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09310','name'=>'Đức Long','type'=>'Xã','location'=>'21 07 09N, 106 16 39E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09313','name'=>'Chi Lăng','type'=>'Xã','location'=>'21 05 48N, 106 07 48E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09316','name'=>'Hán Quảng','type'=>'Xã','location'=>'21 05 29N, 106 06 05E','district_id'=>'259'] );
		Ward::create( ['ward_id'=>'09319','name'=>'Lim','type'=>'Thị Trấn','location'=>'21 08 46N, 106 01 24E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09322','name'=>'Phú Lâm','type'=>'Xã','location'=>'21 10 04N, 105 59 47E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09325','name'=>'Khắc Niệm','type'=>'Xã','location'=>'21 08 44N, 106 03 23E','district_id'=>'256'] );
		Ward::create( ['ward_id'=>'09328','name'=>'Nội Duệ','type'=>'Xã','location'=>'21 08 30N, 106 00 15E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09331','name'=>'Hạp Lĩnh','type'=>'Xã','location'=>'21 08 20N, 106 04 26E','district_id'=>'256'] );
		Ward::create( ['ward_id'=>'09334','name'=>'Liên Bão','type'=>'Xã','location'=>'21 07 48N, 106 01 31E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09337','name'=>'Hiên Vân','type'=>'Xã','location'=>'21 07 25N, 106 02 38E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09340','name'=>'Hoàn Sơn','type'=>'Xã','location'=>'21 06 50N, 106 00 04E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09343','name'=>'Lạc Vệ','type'=>'Xã','location'=>'21 07 07N, 106 04 57E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09346','name'=>'Việt Đoàn','type'=>'Xã','location'=>'21 06 41N, 106 02 27E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09349','name'=>'Phật Tích','type'=>'Xã','location'=>'21 06 06N, 106 01 37E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09352','name'=>'Tân Chi','type'=>'Xã','location'=>'21 05 28N, 106 04 54E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09355','name'=>'Đại Đồng','type'=>'Xã','location'=>'21 05 18N, 105 59 17E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09358','name'=>'Tri Phương','type'=>'Xã','location'=>'21 05 11N, 106 00 29E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09361','name'=>'Minh Đạo','type'=>'Xã','location'=>'21 05 19N, 106 03 28E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09364','name'=>'Cảnh Hưng','type'=>'Xã','location'=>'21 05 02N, 106 01 54E','district_id'=>'260'] );
		Ward::create( ['ward_id'=>'09367','name'=>'Đông Ngàn','type'=>'Phường','location'=>'21 07 16N, 105 57 36E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09370','name'=>'Tam Sơn','type'=>'Xã','location'=>'21 09 17N, 105 58 12E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09373','name'=>'Hương Mạc','type'=>'Xã','location'=>'21 09 14N, 105 56 05E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09376','name'=>'Tương Giang','type'=>'Xã','location'=>'21 08 37N, 105 59 25E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09379','name'=>'Phù Khê','type'=>'Xã','location'=>'21 08 28N, 105 55 50E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09382','name'=>'Đồng Kỵ','type'=>'Phường','location'=>'','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09383','name'=>'Trang Hạ','type'=>'Phường','location'=>'21 08 05N, 105 56 49E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09385','name'=>'Đồng Nguyên','type'=>'Phường','location'=>'21 07 47N, 105 58 25E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09388','name'=>'Châu Khê','type'=>'Phường','location'=>'21 07 17N, 105 55 31E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09391','name'=>'Tân Hồng','type'=>'Phường','location'=>'21 06 38N, 105 58 18E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09394','name'=>'Đình Bảng','type'=>'Phường','location'=>'21 06 09N, 105 56 54E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09397','name'=>'Phù Chẩn','type'=>'Xã','location'=>'21 05 17N, 105 58 11E','district_id'=>'261'] );
		Ward::create( ['ward_id'=>'09400','name'=>'Hồ','type'=>'Thị Trấn','location'=>'21 03 31N, 106 05 05E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09403','name'=>'Hoài Thượng','type'=>'Xã','location'=>'21 03 51N, 106 05 58E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09406','name'=>'Đại Đồng Thành','type'=>'Xã','location'=>'21 04 06N, 106 03 33E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09409','name'=>'Mão Điền','type'=>'Xã','location'=>'21 03 52N, 106 07 12E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09412','name'=>'Song Hồ','type'=>'Xã','location'=>'21 03 42N, 106 04 36E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09415','name'=>'Đình Tổ','type'=>'Xã','location'=>'21 03 37N, 106 02 01E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09418','name'=>'An Bình','type'=>'Xã','location'=>'21 02 54N, 106 07 01E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09421','name'=>'Trí Quả','type'=>'Xã','location'=>'21 02 45N, 106 01 44E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09424','name'=>'Gia Đông','type'=>'Xã','location'=>'21 02 14N, 106 04 33E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09427','name'=>'Thanh Khương','type'=>'Xã','location'=>'21 02 14N, 106 03 00E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09430','name'=>'Trạm Lộ','type'=>'Xã','location'=>'21 01 47N, 106 07 00E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09433','name'=>'Xuân Lâm','type'=>'Xã','location'=>'21 01 32N, 106 00 50E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09436','name'=>'Hà Mãn','type'=>'Xã','location'=>'21 01 40N, 106 02 15E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09439','name'=>'Ngũ Thái','type'=>'Xã','location'=>'21 00 45N, 106 02 01E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09442','name'=>'Nguyệt Đức','type'=>'Xã','location'=>'21 00 44N, 106 03 40E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09445','name'=>'Ninh Xá','type'=>'Xã','location'=>'21 00 43N, 106 05 28E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09448','name'=>'Nghĩa Đạo','type'=>'Xã','location'=>'21 00 12N, 106 07 23E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09451','name'=>'Song Liễu','type'=>'Xã','location'=>'21 00 13N, 106 00 21E','district_id'=>'262'] );
		Ward::create( ['ward_id'=>'09454','name'=>'Gia Bình','type'=>'Thị Trấn','location'=>'21 03 21N, 106 10 33E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09457','name'=>'Vạn Ninh','type'=>'Xã','location'=>'21 06 00N, 106 15 39E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09460','name'=>'Thái Bảo','type'=>'Xã','location'=>'21 05 52N, 106 14 02E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09463','name'=>'Giang Sơn','type'=>'Xã','location'=>'21 05 57N, 106 09 08E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09466','name'=>'Cao Đức','type'=>'Xã','location'=>'21 05 18N, 106 17 05E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09469','name'=>'Đại Lai','type'=>'Xã','location'=>'21 05 33N, 106 12 43E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09472','name'=>'Song Giang','type'=>'Xã','location'=>'21 05 12N, 106 10 34E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09475','name'=>'Bình Dương','type'=>'Xã','location'=>'21 04 44N, 106 15 19E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09478','name'=>'Lãng Ngâm','type'=>'Xã','location'=>'21 01 20N, 106 08 35E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09481','name'=>'Nhân Thắng','type'=>'Xã','location'=>'21 04 22N, 106 13 37E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09484','name'=>'Xuân Lai','type'=>'Xã','location'=>'21 03 46N, 106 11 38E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09487','name'=>'Đông Cứu','type'=>'Xã','location'=>'20 03 55N, 106 09 41E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09490','name'=>'Đại Bái','type'=>'Xã','location'=>'21 02 29N, 106 09 07E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09493','name'=>'Quỳnh Phú','type'=>'Xã','location'=>'21 02 00N, 106 10 43E','district_id'=>'263'] );
		Ward::create( ['ward_id'=>'09496','name'=>'Thứa','type'=>'Thị Trấn','location'=>'21 01 11N, 106 12 27E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09499','name'=>'An Thịnh','type'=>'Xã','location'=>'21 03 40N, 106 16 48E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09502','name'=>'Trung Kênh','type'=>'Xã','location'=>'21 02 38N, 106 17 15E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09505','name'=>'Phú Hòa','type'=>'Xã','location'=>'21 02 49N, 106 14 20E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09508','name'=>'Mỹ Hương','type'=>'Xã','location'=>'21 02 01N, 106 15 51E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09511','name'=>'Tân Lãng','type'=>'Xã','location'=>'21 01 47N, 106 11 27E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09514','name'=>'Quảng Phú','type'=>'Xã','location'=>'21 01 29N, 106 09 24E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09517','name'=>'Trừng Xá','type'=>'Xã','location'=>'21 01 06N, 106 14 51E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09520','name'=>'Lai Hạ','type'=>'Xã','location'=>'21 01 20N, 106 16 30E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09523','name'=>'Trung Chính','type'=>'Xã','location'=>'21 00 42N, 106 16 36E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09526','name'=>'Minh Tân','type'=>'Xã','location'=>'21 00 15N, 106 15 49E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09529','name'=>'Bình Định','type'=>'Xã','location'=>'21 00 05N, 106 09 43E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09532','name'=>'Phú Lương','type'=>'Xã','location'=>'20 59 47N, 106 12 11E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09535','name'=>'Lâm Thao','type'=>'Xã','location'=>'20 59 05N, 106 10 52E','district_id'=>'264'] );
		Ward::create( ['ward_id'=>'09538','name'=>'Nguyễn Trãi','type'=>'Phường','location'=>'20 58 14N, 105 46 42E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09541','name'=>'Mộ Lao','type'=>'Phường','location'=>'20 58 51N, 105 47 10E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09542','name'=>'Văn Quán','type'=>'Phường','location'=>'','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09544','name'=>'Vạn Phúc','type'=>'Phường','location'=>'20 58 52N, 106 46 12E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09547','name'=>'Yết Kiêu','type'=>'Phường','location'=>'20 58 31N, 105 46 30E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09550','name'=>'Quang Trung','type'=>'Phường','location'=>'20 58 01N, 105 45 33E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09551','name'=>'La Khê','type'=>'Phường','location'=>'','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09552','name'=>'Phú La','type'=>'Phường','location'=>'','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09553','name'=>'Phúc La','type'=>'Phường','location'=>'20 58 06N, 105 47 15E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09556','name'=>'Hà Cầu','type'=>'Phường','location'=>'20 57 55N, 105 46 34E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09562','name'=>'Yên Nghĩa','type'=>'Phường','location'=>'20 57 03N, 106 43 58E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09565','name'=>'Kiến Hưng','type'=>'Phường','location'=>'20 57 06N, 105 47 05E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09568','name'=>'Phú Lãm','type'=>'Phường','location'=>'20 56 35N, 105 45 06E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09571','name'=>'Phú Lương','type'=>'Phường','location'=>'20 56 24N, 105 46 10E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09574','name'=>'Lê Lợi','type'=>'Phường','location'=>'21 08 53N, 105 30 13E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09577','name'=>'Phú Thịnh','type'=>'Phường','location'=>'21 09 17N, 105 29 32E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09580','name'=>'Ngô Quyền','type'=>'Phường','location'=>'21 08 36N, 105 29 56E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09583','name'=>'Quang Trung','type'=>'Phường','location'=>'21 08 05N, 105 30 01E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09586','name'=>'Sơn Lộc','type'=>'Phường','location'=>'21 07 18N, 105 29 56E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09589','name'=>'Xuân Khanh','type'=>'Phường','location'=>'21 06 53N, 105 26 37E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09592','name'=>'Đường Lâm','type'=>'Xã','location'=>'21 09 19N, 105 28 09E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09595','name'=>'Viên Sơn','type'=>'Phường','location'=>'21 08 37N, 105 30 48E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09598','name'=>'Xuân Sơn','type'=>'Xã','location'=>'21 07 54N, 105 26 11E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09601','name'=>'Trung Hưng','type'=>'Phường','location'=>'21 07 57N, 105 29 25E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09604','name'=>'Thanh Mỹ','type'=>'Xã','location'=>'21 07 23N, 105 28 19E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09607','name'=>'Trung Sơn Trầm','type'=>'Phường','location'=>'21 06 23N, 105 29 32E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09610','name'=>'Kim Sơn','type'=>'Xã','location'=>'21 04 59N, 105 27 41E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09613','name'=>'Sơn Đông','type'=>'Xã','location'=>'21 04 11N, 105 29 13E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09616','name'=>'Cổ Đông','type'=>'Xã','location'=>'21 03 26N, 105 29 45E','district_id'=>'269'] );
		Ward::create( ['ward_id'=>'09619','name'=>'Tây Đằng','type'=>'Thị Trấn','location'=>'21 12 23N, 105 25 29E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09622','name'=>'Tân Đức','type'=>'Xã','location'=>'21 18 02N, 105 21 42E','district_id'=>'227'] );
		Ward::create( ['ward_id'=>'09625','name'=>'Phú Cường','type'=>'Xã','location'=>'21 17 18N, 105 24 22E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09628','name'=>'Cổ Đô','type'=>'Xã','location'=>'21 17 06N, 105 22 02E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09631','name'=>'Tản Hồng','type'=>'Xã','location'=>'21 16 26N, 105 25 02E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09634','name'=>'Vạn Thắng','type'=>'Xã','location'=>'21 15 23N, 105 23 35E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09637','name'=>'Châu Sơn','type'=>'Xã','location'=>'21 15 48N, 105 25 30E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09640','name'=>'Phong Vân','type'=>'Xã','location'=>'21 15 29N, 105 21 40E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09643','name'=>'Phú Đông','type'=>'Xã','location'=>'21 15 22N, 105 22 32E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09646','name'=>'Phú Phương','type'=>'Xã','location'=>'21 14 55N, 105 25 28E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09649','name'=>'Phú Châu','type'=>'Xã','location'=>'21 14 02N, 105 24 41E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09652','name'=>'Thái Hòa','type'=>'Xã','location'=>'21 14 00N, 105 21 01E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09655','name'=>'Đồng Thái','type'=>'Xã','location'=>'21 13 44N, 105 23 53E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09658','name'=>'Phú Sơn','type'=>'Xã','location'=>'21 12 49N, 105 21 41E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09661','name'=>'Minh Châu','type'=>'Xã','location'=>'21 12 05N, 105 27 07E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09664','name'=>'Vật Lại','type'=>'Xã','location'=>'21 11 47N, 105 23 39E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09667','name'=>'Chu Minh','type'=>'Xã','location'=>'21 11 55N, 105 26 23E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09670','name'=>'Tòng Bạt','type'=>'Xã','location'=>'21 11 37N, 105 19 50E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09673','name'=>'Cẩm Lĩnh','type'=>'Xã','location'=>'21 10 21N, 105 21 20E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09676','name'=>'Sơn Đà','type'=>'Xã','location'=>'21 10 26N, 105 18 52E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09679','name'=>'Đông Quang','type'=>'Xã','location'=>'21 10 57N, 105 27 05E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09682','name'=>'Tiên Phong','type'=>'Xã','location'=>'21 10 27N, 105 25 25E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09685','name'=>'Thụy An','type'=>'Xã','location'=>'21 09 34N, 105 24 15E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09688','name'=>'Cam Thượng','type'=>'Xã','location'=>'21 09 44N, 105 27 09E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09691','name'=>'Thuần Mỹ','type'=>'Xã','location'=>'21 08 38N, 105 18 21E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09694','name'=>'Tản Lĩnh','type'=>'Xã','location'=>'21 07 14N, 105 23 56E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09697','name'=>'Ba Trại','type'=>'Xã','location'=>'21 07 25N, 105 20 48E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09700','name'=>'Minh Quang','type'=>'Xã','location'=>'21 04 44N, 105 19 26E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09703','name'=>'Ba Vì','type'=>'Xã','location'=>'21 04 29N, 105 21 07E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09706','name'=>'Vân Hòa','type'=>'Xã','location'=>'20 03 57N, 105 24 33E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09709','name'=>'Yên Bài','type'=>'Xã','location'=>'21 02 38N, 105 25 36E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09712','name'=>'Khánh Thượng','type'=>'Xã','location'=>'21 01 45N, 105 20 21E','district_id'=>'271'] );
		Ward::create( ['ward_id'=>'09715','name'=>'Phúc Thọ','type'=>'Thị Trấn','location'=>'21 06 31N, 105 32 13E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09718','name'=>'Vân Hà','type'=>'Xã','location'=>'21 09 40N, 105 37 11E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09721','name'=>'Vân Phúc','type'=>'Xã','location'=>'21 09 15N, 105 35 17E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09724','name'=>'Vân Nam','type'=>'Xã','location'=>'21 09 00N, 105 36 29E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09727','name'=>'Xuân Phú','type'=>'Xã','location'=>'21 08 42N, 105 35 05E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09730','name'=>'Phương Độ','type'=>'Xã','location'=>'21 08 54N, 105 32 09E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09733','name'=>'Sen Chiểu','type'=>'Xã','location'=>'21 08 37N, 105 31 48E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09736','name'=>'Cẩm Đình','type'=>'Xã','location'=>'21 09 02N, 105 33 23E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09739','name'=>'Võng Xuyên','type'=>'Xã','location'=>'21 08 00N, 105 33 15E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09742','name'=>'Thọ Lộc','type'=>'Xã','location'=>'21 07 20N, 105 31 44E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09745','name'=>'Long Xuyên','type'=>'Xã','location'=>'21 07 26N, 105 34 37E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09748','name'=>'Thượng Cốc','type'=>'Xã','location'=>'21 07 38N, 105 35 52E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09751','name'=>'Hát Môn','type'=>'Xã','location'=>'21 07 35N, 105 36 57E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09754','name'=>'Tích Giang','type'=>'Xã','location'=>'21 06 48N, 105 30 46E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09757','name'=>'Thanh Đa','type'=>'Xã','location'=>'21 06 36N, 105 37 12E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09760','name'=>'Trạch Mỹ Lộc','type'=>'Xã','location'=>'21 06 11N, 105 31 28E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09763','name'=>'Phúc Hòa','type'=>'Xã','location'=>'21 06 37N, 105 33 27E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09766','name'=>'Ngọc Tảo','type'=>'Xã','location'=>'21 06 01N, 105 36 06E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09769','name'=>'Phụng Thượng','type'=>'Xã','location'=>'21 05 36N, 105 34 53E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09772','name'=>'Tam Thuấn','type'=>'Xã','location'=>'21 05 51N, 105 37 18E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09775','name'=>'Tam Hiệp','type'=>'Xã','location'=>'21 04 53N, 105 36 36E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09778','name'=>'Hiệp Thuận','type'=>'Xã','location'=>'21 04 28N, 105 38 21E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09781','name'=>'Liên Hiệp','type'=>'Xã','location'=>'20 03 17N, 105 38 18E','district_id'=>'272'] );
		Ward::create( ['ward_id'=>'09784','name'=>'Phùng','type'=>'Thị Trấn','location'=>'21 05 16N, 105 39 59E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09787','name'=>'Trung Châu','type'=>'Xã','location'=>'20 09 09N, 105 37 52E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09790','name'=>'Thọ An','type'=>'Xã','location'=>'21 08 08N, 105 38 11E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09793','name'=>'Thọ Xuân','type'=>'Xã','location'=>'21 07 59N, 105 38 58E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09796','name'=>'Hồng Hà','type'=>'Xã','location'=>'21 07 55N, 105 40 50E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09799','name'=>'Liên Hồng','type'=>'Xã','location'=>'21 07 34N, 105 42 19E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09802','name'=>'Liên Hà','type'=>'Xã','location'=>'21 07 07N, 105 42 56E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09805','name'=>'Hạ Mỗ','type'=>'Xã','location'=>'21 06 48N, 105 41 12E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09808','name'=>'Liên Trung','type'=>'Xã','location'=>'21 06 41N, 105 43 31E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09811','name'=>'Phương Đình','type'=>'Xã','location'=>'21 06 32N, 105 38 50E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09814','name'=>'Thượng Mỗ','type'=>'Xã','location'=>'21 06 34N, 105 40 26E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09817','name'=>'Tân Hội','type'=>'Xã','location'=>'21 05 50N, 105 42 10E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09820','name'=>'Tân Lập','type'=>'Xã','location'=>'21 05 10N, 105 42 37E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09823','name'=>'Đan Phượng','type'=>'Xã','location'=>'21 05 55N, 105 39 57E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09826','name'=>'Đồng Tháp','type'=>'Xã','location'=>'21 05 04N, 105 39 04E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09829','name'=>'Song Phượng','type'=>'Xã','location'=>'21 04 35N, 105 40 00E','district_id'=>'273'] );
		Ward::create( ['ward_id'=>'09832','name'=>'Trạm Trôi','type'=>'Thị Trấn','location'=>'21 04 07N, 105 42 26E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09835','name'=>'Đức Thượng','type'=>'Xã','location'=>'21 04 33N, 105 41 11E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09838','name'=>'Minh Khai','type'=>'Xã','location'=>'21 04 04N, 105 40 15E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09841','name'=>'Dương Liễu','type'=>'Xã','location'=>'21 03 39N, 105 39 57E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09844','name'=>'Di Trạch','type'=>'Xã','location'=>'21 02 46N, 105 43 06E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09847','name'=>'Đức Giang','type'=>'Xã','location'=>'21 03 46N, 105 41 57E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09850','name'=>'Cát Quế','type'=>'Xã','location'=>'21 02 55N, 105 40 08E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09853','name'=>'Kim Chung','type'=>'Xã','location'=>'21 03 13N, 105 42 26E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09856','name'=>'Yên Sở','type'=>'Xã','location'=>'21 02 29N, 105 40 14E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09859','name'=>'Sơn Đồng','type'=>'Xã','location'=>'21 02 28N, 105 41 57E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09862','name'=>'Vân Canh','type'=>'Xã','location'=>'21 01 49N, 105 43 34E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09865','name'=>'Đắc Sở','type'=>'Xã','location'=>'21 01 53N, 105 40 39E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09868','name'=>'Lại Yên','type'=>'Xã','location'=>'21 01 34N, 105 42 34E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09871','name'=>'Tiền Yên','type'=>'Xã','location'=>'21 01 18N, 105 40 56E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09874','name'=>'Song Phương','type'=>'Xã','location'=>'21 00 54N, 105 41 27E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09877','name'=>'An Khánh','type'=>'Xã','location'=>'21 00 02N, 105 43 07E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09880','name'=>'An Thượng','type'=>'Xã','location'=>'20 59 29N, 105 41 40E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09883','name'=>'Vân Côn','type'=>'Xã','location'=>'20 59 25N, 105 40 39E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09886','name'=>'Dương Nội','type'=>'Phường','location'=>'20 58 50N, 105 44 34E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'09889','name'=>'La Phù','type'=>'Xã','location'=>'20 58 48N, 105 43 46E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09892','name'=>'Đông La','type'=>'Xã','location'=>'20 58 07N, 105 43 25E','district_id'=>'274'] );
		Ward::create( ['ward_id'=>'09895','name'=>'Quốc Oai','type'=>'Thị Trấn','location'=>'20 59 49N, 105 38 38E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09898','name'=>'Sài Sơn','type'=>'Xã','location'=>'20 01 42N, 105 38 49E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09901','name'=>'Phượng Cách','type'=>'Xã','location'=>'20 00 59N, 105 39 16E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09904','name'=>'Yên Sơn','type'=>'Xã','location'=>'20 59 50N, 105 39 38E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09907','name'=>'Ngọc Liệp','type'=>'Xã','location'=>'20 59 59N, 105 35 48E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09910','name'=>'Ngọc Mỹ','type'=>'Xã','location'=>'20 59 19N, 105 37 14E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09913','name'=>'Liệp Tuyết','type'=>'Xã','location'=>'20 58 47N, 105 35 48E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09916','name'=>'Thạch Thán','type'=>'Xã','location'=>'20 58 59N, 105 38 03E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09919','name'=>'Đồng Quang','type'=>'Xã','location'=>'20 58 17N, 105 39 08E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09922','name'=>'Phú Cát','type'=>'Xã','location'=>'20 58 25N, 105 33 14E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09925','name'=>'Tuyết Nghĩa','type'=>'Xã','location'=>'20 58 19N, 105 35 04E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09928','name'=>'Nghĩa Hương','type'=>'Xã','location'=>'20 58 28N, 105 36 44E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09931','name'=>'Cộng Hòa','type'=>'Xã','location'=>'20 58 03N, 105 39 56E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09934','name'=>'Tân Phú','type'=>'Xã','location'=>'20 58 03N, 105 41 37E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09937','name'=>'Đại Thành','type'=>'Xã','location'=>'20 57 50N, 105 42 42E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09940','name'=>'Phú Mãn','type'=>'Xã','location'=>'20 56 57N, 105 31 09E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09943','name'=>'Cấn Hữu','type'=>'Xã','location'=>'20 57 17N, 105 36 41E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09946','name'=>'Tân Hòa','type'=>'Xã','location'=>'20 57 53N, 105 40 28E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09949','name'=>'Hòa Thạch','type'=>'Xã','location'=>'20 56 39N, 105 33 38E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09952','name'=>'Đông Yên','type'=>'Xã','location'=>'20 55 46N, 105 35 06E','district_id'=>'275'] );
		Ward::create( ['ward_id'=>'09955','name'=>'Liên Quan','type'=>'Thị Trấn','location'=>'21 03 20N, 105 34 32E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09958','name'=>'Đại Đồng','type'=>'Xã','location'=>'21 05 24N, 105 33 43E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09961','name'=>'Cẩm Yên','type'=>'Xã','location'=>'21 05 14N, 105 32 15E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09964','name'=>'Lại Thượng','type'=>'Xã','location'=>'21 04 08N, 105 32 53E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09967','name'=>'Phú Kim','type'=>'Xã','location'=>'21 04 12N, 105 34 31E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09970','name'=>'Hương Ngải','type'=>'Xã','location'=>'21 30 40N, 105 34 44E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09973','name'=>'Canh Nậu','type'=>'Xã','location'=>'21 03 21N, 105 36 51E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09976','name'=>'Kim Quan','type'=>'Xã','location'=>'21 02 38N, 105 34 27E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09979','name'=>'Dị Nậu','type'=>'Xã','location'=>'21 02 56N, 105 37 26E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09982','name'=>'Bình Yên','type'=>'Xã','location'=>'21 02 33N, 105 32 17E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09985','name'=>'Chàng Sơn','type'=>'Xã','location'=>'21 02 24N, 105 35 47E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09988','name'=>'Thạch Hoà','type'=>'Xã','location'=>'21 00 23N, 105 30 22E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09991','name'=>'Cần Kiệm','type'=>'Xã','location'=>'21 01 16N, 105 34 32E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09994','name'=>'Hữu Bằng','type'=>'Xã','location'=>'21 01 48N, 105 36 58E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'09997','name'=>'Phùng Xá','type'=>'Xã','location'=>'21 01 15N, 105 37 25E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'10000','name'=>'Tân Xã','type'=>'Xã','location'=>'21 01 06N, 105 32 35E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'10003','name'=>'Thạch Xá','type'=>'Xã','location'=>'21 02 00N, 105 35 53E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'10006','name'=>'Bình Phú','type'=>'Xã','location'=>'21 01 02N, 105 36 16E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'10009','name'=>'Hạ Bằng','type'=>'Xã','location'=>'21 00 24N, 105 33 14E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'10012','name'=>'Đồng Trúc','type'=>'Xã','location'=>'20 59 37N, 105 33 59E','district_id'=>'276'] );
		Ward::create( ['ward_id'=>'10015','name'=>'Chúc Sơn','type'=>'Thị Trấn','location'=>'20 55 13N, 105 42 38E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10018','name'=>'Xuân Mai','type'=>'Thị Trấn','location'=>'20 53 51N, 105 34 07E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10021','name'=>'Phụng Châu','type'=>'Xã','location'=>'20 56 43N, 105 42 19E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10024','name'=>'Tiên Phương','type'=>'Xã','location'=>'20 56 30N, 105 40 48E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10027','name'=>'Đông Sơn','type'=>'Xã','location'=>'20 55 56N, 105 37 10E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10030','name'=>'Đông Phương Yên','type'=>'Xã','location'=>'20 55 49N, 105 38 08E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10033','name'=>'Phú Nghĩa','type'=>'Xã','location'=>'20 56 00N, 105 39 29E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10039','name'=>'Trường Yên','type'=>'Xã','location'=>'20 54 50N, 105 39 26E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10042','name'=>'Ngọc Hòa','type'=>'Xã','location'=>'20 54 56N, 105 41 08E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10045','name'=>'Thủy Xuân Tiên','type'=>'Xã','location'=>'20 53 10N, 105 35 04E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10048','name'=>'Thanh Bình','type'=>'Xã','location'=>'20 54 08N, 105 37 26E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10051','name'=>'Trung Hòa','type'=>'Xã','location'=>'20 53 51N, 105 38 58E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10054','name'=>'Đại Yên','type'=>'Xã','location'=>'20 53 57N, 105 41 12E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10057','name'=>'Thụy Hương','type'=>'Xã','location'=>'20 54 30N, 105 42 57E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10060','name'=>'Tốt Động','type'=>'Xã','location'=>'20 52 54N, 105 40 01E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10063','name'=>'Lam Điền','type'=>'Xã','location'=>'20 53 12N, 105 43 05E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10066','name'=>'Tân Tiến','type'=>'Xã','location'=>'21 51 59N, 105 36 22E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10069','name'=>'Nam Phương Tiến','type'=>'Xã','location'=>'20 49 47N, 105 34 50E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10072','name'=>'Hợp Đồng','type'=>'Xã','location'=>'20 52 43N, 105 41 43E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10075','name'=>'Hoàng Văn Thụ','type'=>'Xã','location'=>'21 51 24N, 105 38 10E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10078','name'=>'Hoàng Diệu','type'=>'Xã','location'=>'20 51 43N, 105 43 52E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10081','name'=>'Hữu Văn','type'=>'Xã','location'=>'20 51 27N, 105 39 17E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10084','name'=>'Quảng Bị','type'=>'Xã','location'=>'20 51 31N, 105 41 41E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10087','name'=>'Mỹ Lương','type'=>'Xã','location'=>'20 50 39N, 105 39 05E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10090','name'=>'Thượng Vực','type'=>'Xã','location'=>'20 50 36N, 105 43 06E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10093','name'=>'Hồng Phong','type'=>'Xã','location'=>'20 50 17N, 105 41 45E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10096','name'=>'Đồng Phú','type'=>'Xã','location'=>'20 50 22N, 105 42 33E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10099','name'=>'Trần Phú','type'=>'Xã','location'=>'20 49 13N, 105 39 31E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10102','name'=>'Văn Võ','type'=>'Xã','location'=>'20 50 00N, 105 44 32E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10105','name'=>'Đồng Lạc','type'=>'Xã','location'=>'20 49 21N, 105 40 35E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10108','name'=>'Hòa Chính','type'=>'Xã','location'=>'20 49 09N, 105 43 18E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10111','name'=>'Phú Nam An','type'=>'Xã','location'=>'20 49 02N, 105 44 34E','district_id'=>'277'] );
		Ward::create( ['ward_id'=>'10114','name'=>'Kim Bài','type'=>'Thị Trấn','location'=>'20 51 20N, 105 45 54E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10117','name'=>'Đồng Mai','type'=>'Phường','location'=>'20 55 39N, 105 44 10E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'10120','name'=>'Cự Khê','type'=>'Xã','location'=>'20 55 14N, 105 47 00E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10123','name'=>'Biên Giang','type'=>'Phường','location'=>'20 55 32N, 105 43 32E','district_id'=>'268'] );
		Ward::create( ['ward_id'=>'10126','name'=>'Bích Hòa','type'=>'Xã','location'=>'20 55 07N, 105 45 40E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10129','name'=>'Mỹ Hưng','type'=>'Xã','location'=>'20 54 08N, 105 47 56E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10132','name'=>'Cao Viên','type'=>'Xã','location'=>'20 54 18N, 105 44 32E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10135','name'=>'Bình Minh','type'=>'Xã','location'=>'20 53 29N, 105 46 11E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10138','name'=>'Tam Hưng','type'=>'Xã','location'=>'20 52 49N, 105 47 01E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10141','name'=>'Thanh Cao','type'=>'Xã','location'=>'20 53 07N, 105 44 50E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10144','name'=>'Thanh Thùy','type'=>'Xã','location'=>'20 52 32N, 105 48 35E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10147','name'=>'Thanh Mai','type'=>'Xã','location'=>'20 52 02N, 105 44 50E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10150','name'=>'Thanh Văn','type'=>'Xã','location'=>'20 51 15N, 105 48 13E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10153','name'=>'Đỗ Động','type'=>'Xã','location'=>'20 50 35N, 105 47 06E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10156','name'=>'Kim An','type'=>'Xã','location'=>'20 50 46N, 105 44 51E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10159','name'=>'Kim Thư','type'=>'Xã','location'=>'20 50 28N, 105 45 54E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10162','name'=>'Phương Trung','type'=>'Xã','location'=>'20 29 29N, 105 46 01E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10165','name'=>'Tân Ước','type'=>'Xã','location'=>'20 49 40N, 105 48 33E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10168','name'=>'Dân Hòa','type'=>'Xã','location'=>'20 49 03N, 105 47 12E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10171','name'=>'Liên Châu','type'=>'Xã','location'=>'20 48 38N, 105 49 13E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10174','name'=>'Cao Dương','type'=>'Xã','location'=>'20 48 28N, 105 45 31E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10177','name'=>'Xuân Dương','type'=>'Xã','location'=>'20 47 59N, 105 44 45E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10180','name'=>'Hồng Dương','type'=>'Xã','location'=>'20 47 47N, 105 47 00E','district_id'=>'278'] );
		Ward::create( ['ward_id'=>'10183','name'=>'Thường Tín','type'=>'Thị Trấn','location'=>'20 52 20N, 105 51 38E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10186','name'=>'Ninh Sở','type'=>'Xã','location'=>'20 53 56N, 105 53 06E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10189','name'=>'Nhị Khê','type'=>'Xã','location'=>'20 53 58N, 105 50 38E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10192','name'=>'Duyên Thái','type'=>'Xã','location'=>'20 53 59N, 105 51 53E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10195','name'=>'Khánh Hà','type'=>'Xã','location'=>'20 53 38N, 105 49 22E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10198','name'=>'Hòa Bình','type'=>'Xã','location'=>'20 52 41N, 105 50 03E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10201','name'=>'Văn Bình','type'=>'Xã','location'=>'20 52 57N, 105 51 33E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10204','name'=>'Hiền Giang','type'=>'Xã','location'=>'20 52 35N, 105 49 08E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10207','name'=>'Hồng Vân','type'=>'Xã','location'=>'20 52 46N, 105 54 31E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10210','name'=>'Vân Tảo','type'=>'Xã','location'=>'20 52 14N, 105 53 29E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10213','name'=>'Liên Phương','type'=>'Xã','location'=>'20 52 48N, 105 52 45E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10216','name'=>'Văn Phú','type'=>'Xã','location'=>'20 52 09N, 105 51 07E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10219','name'=>'Tự Nhiên','type'=>'Xã','location'=>'20 51 39N, 105 55 20E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10222','name'=>'Tiền Phong','type'=>'Xã','location'=>'20 51 07N, 105 49 53E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10225','name'=>'Hà Hồi','type'=>'Xã','location'=>'20 51 38N, 105 52 30E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10228','name'=>'Thư Phú','type'=>'Xã','location'=>'20 51 42N, 105 54 10E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10231','name'=>'Nguyễn Trãi','type'=>'Xã','location'=>'20 50 39N, 105 51 16E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10234','name'=>'Quất Động','type'=>'Xã','location'=>'20 50 43N, 105 52 33E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10237','name'=>'Chương Dương','type'=>'Xã','location'=>'20 50 46N, 105 54 06E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10240','name'=>'Tân Minh','type'=>'Xã','location'=>'20 50 23N, 105 50 18E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10243','name'=>'Lê Lợi','type'=>'Xã','location'=>'20 49 46N, 105 53 53E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10246','name'=>'Thắng Lợi','type'=>'Xã','location'=>'20 49 31N, 105 52 47E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10249','name'=>'Dũng Tiến','type'=>'Xã','location'=>'20 49 16N, 105 51 11E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10252','name'=>'Thống Nhất','type'=>'Xã','location'=>'20 48 24N, 105 54 30E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10255','name'=>'Nghiêm Xuyên','type'=>'Xã','location'=>'20 48 23N, 105 51 06E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10258','name'=>'Tô Hiệu','type'=>'Xã','location'=>'20 48 16N, 105 53 06E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10261','name'=>'Văn Tự','type'=>'Xã','location'=>'20 47 10N, 105 53 05E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10264','name'=>'Vạn Điểm','type'=>'Xã','location'=>'20 46 58N, 105 54 31E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10267','name'=>'Minh Cường','type'=>'Xã','location'=>'20 45 51N, 105 54 04E','district_id'=>'279'] );
		Ward::create( ['ward_id'=>'10270','name'=>'Phú Minh','type'=>'Thị Trấn','location'=>'20 46 59N, 105 54 59E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10273','name'=>'Phú Xuyên','type'=>'Thị Trấn','location'=>'20 44 24N, 105 54 28E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10276','name'=>'Hồng Minh','type'=>'Xã','location'=>'20 47 38N, 105 49 19E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10279','name'=>'Phượng Dực','type'=>'Xã','location'=>'20 47 28N, 105 51 11E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10282','name'=>'Văn Nhân','type'=>'Xã','location'=>'20 46 35N, 105 55 18E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10285','name'=>'Thụy Phú','type'=>'Xã','location'=>'20 46 43N, 105 56 18E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10288','name'=>'Tri Trung','type'=>'Xã','location'=>'20 46 39N, 105 49 36E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10291','name'=>'Đại Thắng','type'=>'Xã','location'=>'20 46 25N, 105 52 26E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10294','name'=>'Phú Túc','type'=>'Xã','location'=>'20 45 58N, 105 48 18E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10297','name'=>'Văn Hoàng','type'=>'Xã','location'=>'20 46 22N, 105 51 05E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10300','name'=>'Hồng Thái','type'=>'Xã','location'=>'20 45 39N, 105 57 05E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10303','name'=>'Hoàng Long','type'=>'Xã','location'=>'20 45 24N, 105 49 47E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10306','name'=>'Quang Trung','type'=>'Xã','location'=>'20 45 31N, 105 52 59E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10309','name'=>'Nam Phong','type'=>'Xã','location'=>'20 45 27N, 105 55 21E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10312','name'=>'Nam Triều','type'=>'Xã','location'=>'20 44 59N, 105 55 51E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10315','name'=>'Tân Dân','type'=>'Xã','location'=>'20 44 47N, 105 52 01E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10318','name'=>'Sơn Hà','type'=>'Xã','location'=>'20 44 33N, 105 53 32E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10321','name'=>'Chuyên Mỹ','type'=>'Xã','location'=>'20 43 47N, 105 51 35E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10324','name'=>'Khai Thái','type'=>'Xã','location'=>'20 43 15N, 105 57 16E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10327','name'=>'Phúc Tiến','type'=>'Xã','location'=>'20 43 08N, 105 55 14E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10330','name'=>'Vân Từ','type'=>'Xã','location'=>'20 43 03N, 105 53 12E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10333','name'=>'Tri Thủy','type'=>'Xã','location'=>'20 42 12N, 105 57 03E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10336','name'=>'Đại Xuyên','type'=>'Xã','location'=>'20 41 52N, 105 55 21E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10339','name'=>'Phú Yên','type'=>'Xã','location'=>'20 42 10N, 105 53 28E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10342','name'=>'Bạch Hạ','type'=>'Xã','location'=>'20 41 18N, 105 56 39E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10345','name'=>'Quang Lãng','type'=>'Xã','location'=>'20 41 29N, 105 58 55E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10348','name'=>'Châu Can','type'=>'Xã','location'=>'20 40 59N, 105 54 03E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10351','name'=>'Minh Tân','type'=>'Xã','location'=>'20 40 10N, 105 57 49E','district_id'=>'280'] );
		Ward::create( ['ward_id'=>'10354','name'=>'Vân Đình','type'=>'Thị Trấn','location'=>'20 43 58N, 105 45 49E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10357','name'=>'Viên An','type'=>'Xã','location'=>'20 47 58N, 105 43 24E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10360','name'=>'Viên Nội','type'=>'Xã','location'=>'20 47 17N, 105 43 27E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10363','name'=>'Hoa Sơn','type'=>'Xã','location'=>'20 46 38N, 105 44 52E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10366','name'=>'Quảng Phú Cầu','type'=>'Xã','location'=>'20 46 40N, 105 47 02E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10369','name'=>'Trường Thịnh','type'=>'Xã','location'=>'20 46 01N, 105 45 53E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10372','name'=>'Cao Thành','type'=>'Xã','location'=>'20 45 46N, 105 44 03E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10375','name'=>'Liên Bạt','type'=>'Xã','location'=>'20 44 59N, 105 46 20E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10378','name'=>'Sơn Công','type'=>'Xã','location'=>'20 45 01N, 105 42 51E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10381','name'=>'Đồng Tiến','type'=>'Xã','location'=>'20 44 19N, 105 44 23E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10384','name'=>'Phương Tú','type'=>'Xã','location'=>'20 43 48N, 105 47 49E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10387','name'=>'Trung Tú','type'=>'Xã','location'=>'20 43 26N, 105 49 51E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10390','name'=>'Đồng Tân','type'=>'Xã','location'=>'20 42 50N, 105 50 20E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10393','name'=>'Tảo Dương Văn','type'=>'Xã','location'=>'20 42 41N, 105 47 29E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10396','name'=>'Vạn Thái','type'=>'Xã','location'=>'20 42 23N, 105 46 31E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10399','name'=>'Minh Đức','type'=>'Xã','location'=>'20 42 12N, 105 52 02E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10402','name'=>'Hòa Lâm','type'=>'Xã','location'=>'20 41 33N, 105 48 22E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10405','name'=>'Hòa Xá','type'=>'Xã','location'=>'20 41 49N, 105 45 15E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10408','name'=>'Trầm Lộng','type'=>'Xã','location'=>'20 41 21N, 105 50 12E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10411','name'=>'Kim Đường','type'=>'Xã','location'=>'20 40 36N, 105 52 02E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10414','name'=>'Hòa Nam','type'=>'Xã','location'=>'20 41 10N, 105 46 05E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10417','name'=>'Hòa Phú','type'=>'Xã','location'=>'20 40 35N, 105 46 45E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10420','name'=>'Đội Bình','type'=>'Xã','location'=>'20 39 19N, 105 49 01E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10423','name'=>'Đại Hùng','type'=>'Xã','location'=>'20 40 06N, 105 50 03E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10426','name'=>'Đông Lỗ','type'=>'Xã','location'=>'20 39 43N, 105 53 12E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10429','name'=>'Phù Lưu','type'=>'Xã','location'=>'20 39 43N, 105 47 33E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10432','name'=>'Đại Cường','type'=>'Xã','location'=>'20 39 31N, 105 51 28E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10435','name'=>'Lưu Hoàng','type'=>'Xã','location'=>'20 38 54N, 105 48 10E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10438','name'=>'Hồng Quang','type'=>'Xã','location'=>'20 37 25N, 105 47 38E','district_id'=>'281'] );
		Ward::create( ['ward_id'=>'10441','name'=>'Đại Nghĩa','type'=>'Thị Trấn','location'=>'20 40 48N, 105 44 14E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10444','name'=>'Đồng Tâm','type'=>'Xã','location'=>'20 48 15N, 105 40 21E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10447','name'=>'Thượng Lâm','type'=>'Xã','location'=>'20 47 34N, 105 40 07E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10450','name'=>'Tuy Lai','type'=>'Xã','location'=>'20 45 27N, 105 39 59E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10453','name'=>'Phúc Lâm','type'=>'Xã','location'=>'20 48 51N, 105 41 40E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10456','name'=>'Mỹ Thành','type'=>'Xã','location'=>'20 46 51N, 105 41 54E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10459','name'=>'Bột Xuyên','type'=>'Xã','location'=>'20 46 45N, 105 42 47E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10462','name'=>'An Mỹ','type'=>'Xã','location'=>'20 45 05N, 105 41 19E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10465','name'=>'Hồng Sơn','type'=>'Xã','location'=>'20 43 20N, 104 41 12E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10468','name'=>'Lê Thanh','type'=>'Xã','location'=>'20 43 22N, 105 42 51E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10471','name'=>'Xuy Xá','type'=>'Xã','location'=>'20 42 47N, 105 44 01E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10474','name'=>'Phùng Xá','type'=>'Xã','location'=>'20 43 09N, 105 45 22E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10477','name'=>'Phù Lưu Tế','type'=>'Xã','location'=>'20 41 54N, 105 44 14E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10480','name'=>'Đại Hưng','type'=>'Xã','location'=>'20 39 45N, 105 45 28E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10483','name'=>'Vạn Kim','type'=>'Xã','location'=>'20 38 54N, 105 47 00E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10486','name'=>'Đốc Tín','type'=>'Xã','location'=>'20 38 10N, 105 46 50E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10489','name'=>'Hương Sơn','type'=>'Xã','location'=>'20 36 09N, 105 45 48E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10492','name'=>'Hùng Tiến','type'=>'Xã','location'=>'20 38 06N, 105 45 19E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10495','name'=>'An Tiến','type'=>'Xã','location'=>'20 39 23N, 105 43 50E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10498','name'=>'Hợp Tiến','type'=>'Xã','location'=>'20 41 10N, 105 41 36E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10501','name'=>'Hợp Thanh','type'=>'Xã','location'=>'20 40 13N, 105 42 04E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10504','name'=>'An Phú','type'=>'Xã','location'=>'20 37 41N, 105 41 36E','district_id'=>'282'] );
		Ward::create( ['ward_id'=>'10507','name'=>'Cẩm Thượng','type'=>'Phường','location'=>'20 57 02N, 106 18 50E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10510','name'=>'Bình Hàn','type'=>'Phường','location'=>'20 56 58N, 106 19 31E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10513','name'=>'Ngọc Châu','type'=>'Phường','location'=>'20 56 18N, 106 20 36E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10514','name'=>'Nhị Châu','type'=>'Phường','location'=>'','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10516','name'=>'Quang Trung','type'=>'Phường','location'=>'20 56 43N, 106 20 01E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10519','name'=>'Nguyễn Trãi','type'=>'Phường','location'=>'20 56 35N, 106 19 31E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10522','name'=>'Phạm Ngũ Lão','type'=>'Phường','location'=>'20 56 12N, 106 19 05E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10525','name'=>'Trần Hưng Đạo','type'=>'Phường','location'=>'20 56 10N, 106 20 24E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10528','name'=>'Trần Phú','type'=>'Phường','location'=>'20 56 07N, 106 19 31E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10531','name'=>'Thanh Bình','type'=>'Phường','location'=>'20 55 50N, 106 18 25E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10532','name'=>'Tân Bình','type'=>'Phường','location'=>'','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10534','name'=>'Lê Thanh Nghị','type'=>'Phường','location'=>'20 55 49N, 106 19 28E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10537','name'=>'Hải Tân','type'=>'Phường','location'=>'20 55 29N, 106 19 49E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10540','name'=>'Tứ Minh','type'=>'Phường','location'=>'20 55 40N, 106 16 43E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10543','name'=>'Việt Hòa','type'=>'Phường','location'=>'20 56 57N, 106 17 27E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10546','name'=>'Phả Lại','type'=>'Thị Trấn','location'=>'20 07 16N, 106 19 17E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10549','name'=>'Sao Đỏ','type'=>'Thị Trấn','location'=>'21 06 30N, 106 23 07E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10552','name'=>'Bến Tắm','type'=>'Thị Trấn','location'=>'21 09 41N, 106 26 21E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10555','name'=>'Hoàng Hoa Thám','type'=>'Xã','location'=>'21 12 28N, 106 27 57E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10558','name'=>'Bắc An','type'=>'Xã','location'=>'21 11 18N, 106 24 40E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10561','name'=>'Hưng Đạo','type'=>'Xã','location'=>'21 09 42N, 106 19 32E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10564','name'=>'Lê Lợi','type'=>'Xã','location'=>'21 09 51N, 106 22 03E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10567','name'=>'Hoàng Tiến','type'=>'Xã','location'=>'21 08 55N, 106 27 46E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10570','name'=>'Cộng Hòa','type'=>'Xã','location'=>'21 08 13N, 106 23 22E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10573','name'=>'Hoàng Tân','type'=>'Xã','location'=>'21 07 58N, 106 25 50E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10576','name'=>'Cổ Thành','type'=>'Xã','location'=>'21 05 46N, 106 18 48E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10579','name'=>'Văn An','type'=>'Xã','location'=>'21 05 59N, 106 21 04E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10582','name'=>'Chí Minh','type'=>'Xã','location'=>'21 05 59N, 106 22 04E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10585','name'=>'Văn Đức','type'=>'Xã','location'=>'21 05 39N, 106 25 38E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10588','name'=>'Thái Học','type'=>'Xã','location'=>'21 05 18N, 106 23 50E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10591','name'=>'Nhân Huệ','type'=>'Xã','location'=>'21 04 25N, 106 18 41E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10594','name'=>'An Lạc','type'=>'Xã','location'=>'21 04 07N, 106 24 43E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10597','name'=>'Kênh Giang','type'=>'Xã','location'=>'21 03 59N, 106 26 24E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10600','name'=>'Đồng Lạc','type'=>'Xã','location'=>'21 02 21N, 106 23 06E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10603','name'=>'Tân Dân','type'=>'Xã','location'=>'21 03 14N, 106 23 25E','district_id'=>'290'] );
		Ward::create( ['ward_id'=>'10606','name'=>'Nam Sách','type'=>'Thị Trấn','location'=>'20 59 43N, 106 19 58E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10609','name'=>'Nam Hưng','type'=>'Xã','location'=>'21 04 17N, 106 19 38E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10612','name'=>'Nam Tân','type'=>'Xã','location'=>'21 04 12N, 106 20 52E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10615','name'=>'Hợp Tiến','type'=>'Xã','location'=>'21 03 07N, 106 19 58E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10618','name'=>'Hiệp Cát','type'=>'Xã','location'=>'21 02 34N, 106 18 19E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10621','name'=>'Thanh Quang','type'=>'Xã','location'=>'21 02 45N, 106 21 06E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10624','name'=>'Quốc Tuấn','type'=>'Xã','location'=>'21 01 40N, 106 20 19E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10627','name'=>'Nam Chính','type'=>'Xã','location'=>'21 01 37N, 106 18 51E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10630','name'=>'An Bình','type'=>'Xã','location'=>'21 01 17N, 106 21 42E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10633','name'=>'Nam Trung','type'=>'Xã','location'=>'21 00 58N, 106 18 38E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10636','name'=>'An Sơn','type'=>'Xã','location'=>'21 00 52N, 106 18 14E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10639','name'=>'Cộng Hòa','type'=>'Xã','location'=>'21 00 19N, 106 23 35E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10642','name'=>'Thái Tân','type'=>'Xã','location'=>'20 59 50N, 106 17 07E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10645','name'=>'An Lâm','type'=>'Xã','location'=>'21 00 05N, 106 21 08E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10648','name'=>'Phú Điền','type'=>'Xã','location'=>'20 59 40N, 106 22 16E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10651','name'=>'Nam Hồng','type'=>'Xã','location'=>'20 59 47N, 106 18 56E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10654','name'=>'Hồng Phong','type'=>'Xã','location'=>'20 59 05N, 106 18 41E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10657','name'=>'Đồng Lạc','type'=>'Xã','location'=>'20 58 44N, 106 21 44E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10660','name'=>'Ái Quốc','type'=>'Xã','location'=>'20 58 01N, 106 22 30E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10663','name'=>'An Châu','type'=>'Xã','location'=>'20 58 20N, 106 19 56E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10666','name'=>'Minh Tân','type'=>'Xã','location'=>'20 58 22N, 106 17 48E','district_id'=>'291'] );
		Ward::create( ['ward_id'=>'10669','name'=>'Thượng Đạt','type'=>'Xã','location'=>'20 57 56N, 106 18 59E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10672','name'=>'Nam Đồng','type'=>'Xã','location'=>'20 56 48N, 106 21 25E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'10675','name'=>'An Lưu','type'=>'Thị Trấn','location'=>'20 59 27N, 106 33 00E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10678','name'=>'Bạch Đằng','type'=>'Xã','location'=>'21 02 51N, 106 28 08E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10681','name'=>'Thất Hùng','type'=>'Xã','location'=>'21 03 26N, 106 28 56E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10684','name'=>'Lê Ninh','type'=>'Xã','location'=>'21 02 59N, 106 26 12E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10687','name'=>'Hoành Sơn','type'=>'Xã','location'=>'21 02 52N, 106 30 26E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10690','name'=>'Phúc Thành B','type'=>'Xã','location'=>'21 02 06N, 106 25 36E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10693','name'=>'Thái Sơn','type'=>'Xã','location'=>'21 01 50N, 106 29 15E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10696','name'=>'Duy Tân','type'=>'Xã','location'=>'21 02 10N, 106 31 46E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10699','name'=>'Tân Dân','type'=>'Xã','location'=>'21 02 45N, 106 32 52E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10702','name'=>'Minh Tân','type'=>'Thị Trấn','location'=>'21 02 13N, 106 35 08E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10705','name'=>'Quang Trung','type'=>'Xã','location'=>'21 01 29N, 106 25 27E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10708','name'=>'Hiệp Hòa','type'=>'Xã','location'=>'21 00 59N, 106 28 04E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10711','name'=>'Phạm Mệnh','type'=>'Xã','location'=>'21 01 42N, 106 30 39E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10714','name'=>'Phú Thứ','type'=>'Thị Trấn','location'=>'21 01 21N, 106 33 19E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10717','name'=>'Thăng Long','type'=>'Xã','location'=>'21 00 23N, 106 25 32E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10720','name'=>'Lạc Long','type'=>'Xã','location'=>'21 00 21N, 106 27 16E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10723','name'=>'An Sinh','type'=>'Xã','location'=>'21 00 44N, 106 30 19E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10726','name'=>'Hiệp Sơn','type'=>'Xã','location'=>'21 00 27N, 106 31 59E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10729','name'=>'Thượng Quận','type'=>'Xã','location'=>'20 59 31N, 106 29 18E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10732','name'=>'An Phụ','type'=>'Xã','location'=>'20 59 20N, 106 30 54E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10735','name'=>'Hiệp An','type'=>'Xã','location'=>'20 59 08N, 106 32 30E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10738','name'=>'Long Xuyên','type'=>'Xã','location'=>'20 58 03N, 106 31 50E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10741','name'=>'Thái Thịnh','type'=>'Xã','location'=>'20 58 27N, 106 34 00E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10744','name'=>'Hiến Thành','type'=>'Xã','location'=>'20 57 07N, 106 33 09E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10747','name'=>'Minh Hòa','type'=>'Xã','location'=>'20 57 05N, 106 34 31E','district_id'=>'292'] );
		Ward::create( ['ward_id'=>'10750','name'=>'Phú Thái','type'=>'Thị Trấn','location'=>'20 57 50N, 106 30 48E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10753','name'=>'Lai Vu','type'=>'Xã','location'=>'20 58 56N, 106 23 54E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10756','name'=>'Cộng Hòa','type'=>'Xã','location'=>'20 58 36N, 106 24 51E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10759','name'=>'Thượng Vũ','type'=>'Xã','location'=>'20 59 26N, 106 25 45E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10762','name'=>'Cổ Dũng','type'=>'Xã','location'=>'20 58 16N, 106 25 47E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10765','name'=>'Việt Hưng','type'=>'Xã','location'=>'20 59 24N, 106 27 49E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10768','name'=>'Tuấn Hưng','type'=>'Xã','location'=>'20 58 15N, 106 26 57E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10771','name'=>'Kim Xuyên','type'=>'Xã','location'=>'20 58 09N, 106 28 40E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10774','name'=>'Phúc Thành A','type'=>'Xã','location'=>'20 58 25N, 106 30 09E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10777','name'=>'Ngũ Phúc','type'=>'Xã','location'=>'20 56 44N, 106 29 34E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10780','name'=>'Kim Anh','type'=>'Xã','location'=>'20 57 05N, 106 30 30E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10783','name'=>'Kim Lương','type'=>'Xã','location'=>'20 57 09N, 106 31 52E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10786','name'=>'Kim Tân','type'=>'Xã','location'=>'20 55 44N, 106 31 17E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10789','name'=>'Kim Khê','type'=>'Xã','location'=>'20 56 16N, 106 31 28E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10792','name'=>'Kim Đính','type'=>'Xã','location'=>'20 54 58N, 106 29 12E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10795','name'=>'Cẩm La','type'=>'Xã','location'=>'20 54 34N, 106 31 11E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10798','name'=>'Bình Dân','type'=>'Xã','location'=>'20 54 05N, 106 29 45E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10801','name'=>'Tam Kỳ','type'=>'Xã','location'=>'20 52 45N, 106 32 14E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10804','name'=>'Đồng Gia','type'=>'Xã','location'=>'20 53 41N, 106 30 51E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10807','name'=>'Liên Hòa','type'=>'Xã','location'=>'20 53 00N, 106 29 29E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10810','name'=>'Đại Đức','type'=>'Xã','location'=>'20 52 14N, 106 30 37E','district_id'=>'293'] );
		Ward::create( ['ward_id'=>'10813','name'=>'Thanh Hà','type'=>'Thị Trấn','location'=>'20 54 18N, 106 25 33E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10816','name'=>'Hồng Lạc','type'=>'Xã','location'=>'20 57 21N, 106 23 58E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10819','name'=>'Việt Hồng','type'=>'Xã','location'=>'20 57 05N, 106 25 34E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10822','name'=>'Quyết Thắng','type'=>'Xã','location'=>'20 55 52N, 106 22 59E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10825','name'=>'Tân Việt','type'=>'Xã','location'=>'20 56 09N, 106 24 30E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10828','name'=>'Cẩm Chế','type'=>'Xã','location'=>'20 55 35N, 106 25 37E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10831','name'=>'Thanh An','type'=>'Xã','location'=>'20 56 29N, 106 26 52E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10834','name'=>'Thanh Lang','type'=>'Xã','location'=>'20 56 00N, 106 28 10E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10837','name'=>'Tiền Tiến','type'=>'Xã','location'=>'20 54 39N, 106 21 50E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10840','name'=>'Tân An','type'=>'Xã','location'=>'20 54 23N, 106 24 01E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10843','name'=>'Liên Mạc','type'=>'Xã','location'=>'20 55 13N, 106 27 07E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10846','name'=>'Thanh Hải','type'=>'Xã','location'=>'20 53 04N, 106 23 38E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10849','name'=>'Thanh Khê','type'=>'Xã','location'=>'20 53 18N, 106 25 34E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10852','name'=>'Thanh Xá','type'=>'Xã','location'=>'20 54 00N, 106 26 51E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10855','name'=>'Thanh Xuân','type'=>'Xã','location'=>'20 53 36N, 106 28 10E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10858','name'=>'An Lương','type'=>'Xã','location'=>'20 52 43N, 106 24 47E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10861','name'=>'Thanh Thủy','type'=>'Xã','location'=>'20 53 01N, 106 26 45E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10864','name'=>'Phượng Hoàng','type'=>'Xã','location'=>'20 51 30N, 106 24 44E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10867','name'=>'Thanh Sơn','type'=>'Xã','location'=>'20 51 42N, 106 26 17E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10870','name'=>'Hợp Đức','type'=>'Xã','location'=>'20 52 06N, 106 27 50E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10873','name'=>'Trường Thành','type'=>'Xã','location'=>'20 50 56N, 106 27 07E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10876','name'=>'Thanh Bính','type'=>'Xã','location'=>'20 51 17N, 106 28 19E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10879','name'=>'Thanh Hồng','type'=>'Xã','location'=>'20 49 52N, 106 27 23E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10882','name'=>'Thanh Cường','type'=>'Xã','location'=>'20 49 52N, 106 28 47E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10885','name'=>'Vĩnh Lập','type'=>'Xã','location'=>'20 48 43N, 106 29 32E','district_id'=>'294'] );
		Ward::create( ['ward_id'=>'10888','name'=>'Cẩm Giàng','type'=>'Thị Trấn','location'=>'20 58 06N, 106 10 28E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10891','name'=>'Lai Cách','type'=>'Thị Trấn','location'=>'20 56 07N, 106 15 24E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10894','name'=>'Cẩm Hưng','type'=>'Xã','location'=>'20 59 18N, 106 08 47E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10897','name'=>'Cẩm Hoàng','type'=>'Xã','location'=>'20 58 57N, 106 13 18E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10900','name'=>'Cẩm Văn','type'=>'Xã','location'=>'20 59 10N, 106 15 21E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10903','name'=>'Ngọc Liên','type'=>'Xã','location'=>'20 58 15N, 106 08 58E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10906','name'=>'Thạch Lỗi','type'=>'Xã','location'=>'20 58 22N, 106 11 21E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10909','name'=>'Cẩm Vũ','type'=>'Xã','location'=>'20 58 11N, 106 14 50E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10912','name'=>'Đức Chính','type'=>'Xã','location'=>'20 58 02N, 106 16 29E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10915','name'=>'Cẩm Sơn','type'=>'Xã','location'=>'20 57 44N, 106 12 30E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10918','name'=>'Cẩm Định','type'=>'Xã','location'=>'20 57 31N, 106 13 32E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10921','name'=>'Kim Giang','type'=>'Xã','location'=>'20 57 31N, 106 11 04E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10924','name'=>'Lương Điền','type'=>'Xã','location'=>'20 56 43N, 106 10 10E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10927','name'=>'Cao An','type'=>'Xã','location'=>'20 57 03N, 106 15 25E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10930','name'=>'Tân Trường','type'=>'Xã','location'=>'20 56 29N, 106 13 01E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10933','name'=>'Cẩm Phúc','type'=>'Xã','location'=>'20 56 07N, 106 11 58E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10936','name'=>'Cẩm Điền','type'=>'Xã','location'=>'20 56 01N, 106 10 32E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10939','name'=>'Cẩm Đông','type'=>'Xã','location'=>'20 55 01N, 106 13 36E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10942','name'=>'Cẩm Đoài','type'=>'Xã','location'=>'20 54 54N, 106 15 04E','district_id'=>'295'] );
		Ward::create( ['ward_id'=>'10945','name'=>'Kẻ Sặt','type'=>'Thị Trấn','location'=>'20 54 41N, 106 08 45E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10948','name'=>'Hưng Thịnh','type'=>'Xã','location'=>'20 55 34N, 106 09 25E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10951','name'=>'Vĩnh Tuy','type'=>'Xã','location'=>'20 54 54N, 106 10 13E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10954','name'=>'Hùng Thắng','type'=>'Xã','location'=>'20 54 43N, 106 12 16E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10957','name'=>'Tráng Liệt','type'=>'Xã','location'=>'20 54 08N, 106 08 50E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10960','name'=>'Vĩnh Hồng','type'=>'Xã','location'=>'20 54 12N, 106 10 34E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10963','name'=>'Long Xuyên','type'=>'Xã','location'=>'20 53 31N, 106 13 47E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10966','name'=>'Tân Việt','type'=>'Xã','location'=>'20 53 22N, 106 12 02E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10969','name'=>'Thúc Kháng','type'=>'Xã','location'=>'20 52 43N, 106 08 56E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10972','name'=>'Tân Hồng','type'=>'Xã','location'=>'20 52 37N, 106 10 00E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10975','name'=>'Bình Minh','type'=>'Xã','location'=>'20 52 21N, 106 10 58E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10978','name'=>'Hồng Khê','type'=>'Xã','location'=>'20 52 36N, 106 13 06E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10981','name'=>'Thái Học','type'=>'Xã','location'=>'20 51 50N, 106 11 56E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10984','name'=>'Cổ Bi','type'=>'Xã','location'=>'20 51 32N, 106 14 33E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10987','name'=>'Nhân Quyền','type'=>'Xã','location'=>'20 51 12N, 106 12 55E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10990','name'=>'Thái Dương','type'=>'Xã','location'=>'20 50 26N, 106 08 22E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10993','name'=>'Thái Hòa','type'=>'Xã','location'=>'20 50 38N, 106 09 42E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10996','name'=>'Bình Xuyên','type'=>'Xã','location'=>'20 50 09N, 106 11 28E','district_id'=>'296'] );
		Ward::create( ['ward_id'=>'10999','name'=>'Gia Lộc','type'=>'Thị Trấn','location'=>'20 52 07N, 106 17 40E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11002','name'=>'Thạch Khôi','type'=>'Xã','location'=>'20 54 36N, 106 18 25E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'11005','name'=>'Liên Hồng','type'=>'Xã','location'=>'20 54 02N, 106 16 49E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11008','name'=>'Thống Nhất','type'=>'Xã','location'=>'20 53 53N, 106 15 57E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11011','name'=>'Tân Hưng','type'=>'Xã','location'=>'20 54 24N, 106 19 29E','district_id'=>'288'] );
		Ward::create( ['ward_id'=>'11014','name'=>'Trùng Khánh','type'=>'Xã','location'=>'20 53 30N, 106 14 40E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11017','name'=>'Gia Xuyên','type'=>'Xã','location'=>'20 53 29N, 106 18 40E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11020','name'=>'Yết Kiêu','type'=>'Xã','location'=>'20 52 20N, 106 15 14E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11023','name'=>'Gia Hòa','type'=>'Xã','location'=>'20 52 29N, 106 16 16E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11026','name'=>'Phương Hưng','type'=>'Xã','location'=>'20 51 50N, 106 17 03E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11029','name'=>'Gia Tân','type'=>'Xã','location'=>'20 52 37N, 106 18 15E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11032','name'=>'Tân Tiến','type'=>'Xã','location'=>'20 52 46N, 106 20 03E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11035','name'=>'Gia Khánh','type'=>'Xã','location'=>'20 52 04N, 106 19 02E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11038','name'=>'Gia Lương','type'=>'Xã','location'=>'20 52 10N, 106 20 13E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11041','name'=>'Lê Lợi','type'=>'Xã','location'=>'20 50 55N, 106 16 11E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11044','name'=>'Toàn Thắng','type'=>'Xã','location'=>'20 50 39N, 106 17 09E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11047','name'=>'Hoàng Diệu','type'=>'Xã','location'=>'20 50 57N, 106 19 33E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11050','name'=>'Hồng Hưng','type'=>'Xã','location'=>'20 49 58N, 106 17 57E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11053','name'=>'Phạm Trấn','type'=>'Xã','location'=>'20 49 37N, 106 15 22E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11056','name'=>'Đoàn Thượng','type'=>'Xã','location'=>'20 49 21N, 106 16 48E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11059','name'=>'Thống Kênh','type'=>'Xã','location'=>'20 48 39N, 106 18 20E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11062','name'=>'Quang Minh','type'=>'Xã','location'=>'20 47 30N, 106 15 58E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11065','name'=>'Đồng Quang','type'=>'Xã','location'=>'20 48 36N, 106 16 01E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11068','name'=>'Nhật Tân','type'=>'Xã','location'=>'20 48 26N, 106 14 49E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11071','name'=>'Đức Xương','type'=>'Xã','location'=>'20 47 24N, 106 17 12E','district_id'=>'297'] );
		Ward::create( ['ward_id'=>'11074','name'=>'Tứ Kỳ','type'=>'Thị Trấn','location'=>'20 49 15N, 106 24 03E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11077','name'=>'Ngọc Sơn','type'=>'Xã','location'=>'20 53 58N, 106 20 34E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11080','name'=>'Kỳ Sơn','type'=>'Xã','location'=>'20 52 55N, 106 21 13E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11083','name'=>'Đại Đồng','type'=>'Xã','location'=>'20 52 47N, 106 22 29E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11086','name'=>'Hưng Đạo','type'=>'Xã','location'=>'20 51 45N, 106 22 09E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11089','name'=>'Ngọc Kỳ','type'=>'Xã','location'=>'20 50 54N, 106 20 53E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11092','name'=>'Bình Lăng','type'=>'Xã','location'=>'20 50 59N, 106 23 35E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11095','name'=>'Tứ Xuyên','type'=>'Xã','location'=>'20 50 09N, 106 26 10E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11098','name'=>'Tái Sơn','type'=>'Xã','location'=>'20 50 40N, 106 22 04E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11101','name'=>'Quang Phục','type'=>'Xã','location'=>'20 49 56N, 106 22 44E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11104','name'=>'Đông Kỳ','type'=>'Xã','location'=>'20 50 14N, 106 24 19E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11107','name'=>'Tây Kỳ','type'=>'Xã','location'=>'20 49 44N, 106 25 15E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11110','name'=>'Dân Chủ','type'=>'Xã','location'=>'20 49 42N, 106 19 14E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11113','name'=>'Tân Kỳ','type'=>'Xã','location'=>'20 49 44N, 106 20 53E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11116','name'=>'Quang Khải','type'=>'Xã','location'=>'20 48 29N, 106 22 23E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11119','name'=>'Đại Hợp','type'=>'Xã','location'=>'20 48 32N, 106 20 24E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11122','name'=>'Quảng Nghiệp','type'=>'Xã','location'=>'20 48 20N, 106 19 19E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11125','name'=>'An Thanh','type'=>'Xã','location'=>'20 48 29N, 106 27 36E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11128','name'=>'Minh Đức','type'=>'Xã','location'=>'20 47 36N, 106 23 47E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11131','name'=>'Văn Tố','type'=>'Xã','location'=>'20 47 51N, 106 25 41E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11134','name'=>'Quang Trung','type'=>'Xã','location'=>'20 47 08N, 106 25 41E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11137','name'=>'Phượng Kỳ','type'=>'Xã','location'=>'20 46 54N, 106 25 04E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11140','name'=>'Cộng Lạc','type'=>'Xã','location'=>'20 46 59N, 106 26 53E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11143','name'=>'Tiên Động','type'=>'Xã','location'=>'20 45 50N, 106 26 43E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11146','name'=>'Nguyên Giáp','type'=>'Xã','location'=>'20 45 31N, 106 28 24E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11149','name'=>'Hà Kỳ','type'=>'Xã','location'=>'20 45 02N, 106 24 53E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11152','name'=>'Hà Thanh','type'=>'Xã','location'=>'20 44 27N, 106 26 39E','district_id'=>'298'] );
		Ward::create( ['ward_id'=>'11155','name'=>'Ninh Giang','type'=>'Thị Trấn','location'=>'20 44 13N, 106 24 04E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11158','name'=>'Quyết Thắng','type'=>'Xã','location'=>'20 48 20N, 106 21 08E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11161','name'=>'Ứng Hoè','type'=>'Xã','location'=>'20 47 28N, 106 20 45E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11164','name'=>'Nghĩa An','type'=>'Xã','location'=>'20 47 18N, 106 22 01E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11167','name'=>'Hồng Đức','type'=>'Xã','location'=>'20 47 04N, 106 18 29E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11170','name'=>'Ninh Hòa','type'=>'Xã','location'=>'20 47 01N, 106 19 42E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11173','name'=>'An Đức','type'=>'Xã','location'=>'20 46 02N, 106 17 49E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11176','name'=>'Vạn Phúc','type'=>'Xã','location'=>'20 46 12N, 106 19 35E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11179','name'=>'Tân Hương','type'=>'Xã','location'=>'20 46 00N, 106 21 47E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11182','name'=>'Ninh Thành','type'=>'Xã','location'=>'20 46 10N, 106 22 36E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11185','name'=>'Vĩnh Hòa','type'=>'Xã','location'=>'20 45 32N, 106 23 17E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11188','name'=>'Đông Xuyên','type'=>'Xã','location'=>'20 45 35N, 106 20 32E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11191','name'=>'Hoàng Hanh','type'=>'Xã','location'=>'20 45 40N, 106 16 33E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11194','name'=>'Quang Hưng','type'=>'Xã','location'=>'20 44 53N, 106 17 25E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11197','name'=>'Tân Phong','type'=>'Xã','location'=>'20 44 24N, 106 18 38E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11200','name'=>'Ninh Hải','type'=>'Xã','location'=>'20 44 40N, 106 21 00E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11203','name'=>'Đồng Tâm','type'=>'Xã','location'=>'20 44 35N, 106 22 37E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11206','name'=>'Tân Quang','type'=>'Xã','location'=>'20 44 28N, 106 16 42E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11209','name'=>'Kiến Quốc','type'=>'Xã','location'=>'20 43 39N, 106 19 38E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11212','name'=>'Hồng Thái','type'=>'Xã','location'=>'20 43 56N, 106 21 19E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11215','name'=>'Hồng Dụ','type'=>'Xã','location'=>'20 43 55N, 106 22 19E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11218','name'=>'Văn Hội','type'=>'Xã','location'=>'20 43 34N, 106 16 20E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11221','name'=>'Hưng Thái','type'=>'Xã','location'=>'20 43 32N, 106 17 24E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11224','name'=>'Hồng Phong','type'=>'Xã','location'=>'20 43 03N, 106 20 55E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11227','name'=>'Hiệp Lực','type'=>'Xã','location'=>'20 43 22N, 106 22 43E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11230','name'=>'Hồng Phúc','type'=>'Xã','location'=>'20 42 39N, 106 18 45E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11233','name'=>'Hưng Long','type'=>'Xã','location'=>'20 42 22N, 106 17 51E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11236','name'=>'Văn Giang','type'=>'Xã','location'=>'20 42 24N, 106 16 28E','district_id'=>'299'] );
		Ward::create( ['ward_id'=>'11239','name'=>'Thanh Miện','type'=>'Thị Trấn','location'=>'20 47 16N, 106 14 12E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11242','name'=>'Thanh Tùng','type'=>'Xã','location'=>'20 50 08N, 106 13 08E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11245','name'=>'Phạm Kha','type'=>'Xã','location'=>'20 49 44N, 106 14 30E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11248','name'=>'Ngô Quyền','type'=>'Xã','location'=>'20 49 22N, 106 09 16E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11251','name'=>'Đoàn Tùng','type'=>'Xã','location'=>'20 49 21N, 106 12 51E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11254','name'=>'Hồng Quang','type'=>'Xã','location'=>'20 48 31N, 106 11 25E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11257','name'=>'Tân Trào','type'=>'Xã','location'=>'20 47 56N, 106 09 15E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11260','name'=>'Lam Sơn','type'=>'Xã','location'=>'20 48 07N, 106 13 24E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11263','name'=>'Đoàn Kết','type'=>'Xã','location'=>'20 47 02N, 106 10 15E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11266','name'=>'Lê Hồng','type'=>'Xã','location'=>'20 47 00N, 106 12 03E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11269','name'=>'Tứ Cường','type'=>'Xã','location'=>'20 46 06N, 106 13 56E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11272','name'=>'Hùng Sơn','type'=>'Xã','location'=>'20 46 45N, 106 16 15E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11275','name'=>'Ngũ Hùng','type'=>'Xã','location'=>'20 45 35N, 106 15 13E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11278','name'=>'Cao Thắng','type'=>'Xã','location'=>'20 45 48N, 106 12 33E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11281','name'=>'Chi Lăng Bắc','type'=>'Xã','location'=>'20 44 40N, 106 13 47E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11284','name'=>'Chi Lăng Nam','type'=>'Xã','location'=>'20 43 27N, 106 13 37E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11287','name'=>'Thanh Giang','type'=>'Xã','location'=>'20 43 26N, 106 14 59E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11290','name'=>'Diên Hồng','type'=>'Xã','location'=>'20 42 38N, 106 14 10E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11293','name'=>'Tiền Phong','type'=>'Xã','location'=>'20 41 57N, 106 14 37E','district_id'=>'300'] );
		Ward::create( ['ward_id'=>'11296','name'=>'Quán Toan','type'=>'Phường','location'=>'20 53 26N, 106 36 34E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11299','name'=>'Hùng Vương','type'=>'Phường','location'=>'20 52 22N, 106 38 05E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11302','name'=>'Sở Dầu','type'=>'Phường','location'=>'20 52 15N, 106 39 18E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11305','name'=>'Thượng Lý','type'=>'Phường','location'=>'20 51 55N, 106 39 51E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11308','name'=>'Hạ Lý','type'=>'Phường','location'=>'20 51 53N, 106 40 21E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11311','name'=>'Minh Khai','type'=>'Phường','location'=>'20 51 55N, 106 40 50E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11314','name'=>'Trại Chuối','type'=>'Phường','location'=>'20 51 32N, 106 39 39E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11317','name'=>'Quang Trung','type'=>'Phường','location'=>'20 51 34N, 106 40 40E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11320','name'=>'Hoàng Văn Thụ','type'=>'Phường','location'=>'20 51 34N, 106 40 58E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11323','name'=>'Phan Bội Châu','type'=>'Phường','location'=>'20 51 27N, 106 40 29E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11326','name'=>'Phạm Hồng Thái','type'=>'Phường','location'=>'20 51 24N, 106 40 12E','district_id'=>'303'] );
		Ward::create( ['ward_id'=>'11329','name'=>'Máy Chai','type'=>'Phường','location'=>'20 52 17N, 106 12 18E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11332','name'=>'Máy Tơ','type'=>'Phường','location'=>'20 51 59N, 106 41 14E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11335','name'=>'Vạn Mỹ','type'=>'Phường','location'=>'20 51 50N, 106 42 30E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11338','name'=>'Cầu Tre','type'=>'Phường','location'=>'20 51 42N, 106 42 09E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11341','name'=>'Lạc Viên','type'=>'Phường','location'=>'20 51 45N, 106 41 49E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11344','name'=>'Lương Khánh Thiện','type'=>'Phường','location'=>'20 51 59N, 106 41 10E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11347','name'=>'Gia Viên','type'=>'Phường','location'=>'20 51 27N, 106 41 30E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11350','name'=>'Đông Khê','type'=>'Phường','location'=>'20 51 12N, 106 42 03E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11353','name'=>'Cầu Đất','type'=>'Phường','location'=>'20 51 19N, 106 40 54E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11356','name'=>'Lê Lợi','type'=>'Phường','location'=>'20 51 18N, 106 41 13E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11359','name'=>'Đằng Giang','type'=>'Phường','location'=>'20 50 31N, 106 41 59E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11362','name'=>'Lạch Tray','type'=>'Phường','location'=>'20 50 50N, 106 41 22E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11365','name'=>'Đổng Quốc Bình','type'=>'Phường','location'=>'20 50 23N, 106 41 39E','district_id'=>'304'] );
		Ward::create( ['ward_id'=>'11368','name'=>'Cát Dài','type'=>'Phường','location'=>'20 51 14N, 106 40 09E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11371','name'=>'An Biên','type'=>'Phường','location'=>'20 51 18N, 106 40 38E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11374','name'=>'Lam Sơn','type'=>'Phường','location'=>'20 50 56N, 106 39 38E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11377','name'=>'An Dương','type'=>'Phường','location'=>'20 50 57N, 106 39 57E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11380','name'=>'Trần Nguyên Hãn','type'=>'Phường','location'=>'20 50 56N, 106 40 06E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11383','name'=>'Hồ Nam','type'=>'Phường','location'=>'20 50 55N, 106 40 22E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11386','name'=>'Trại Cau','type'=>'Phường','location'=>'20 51 03N, 106 40 46E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11389','name'=>'Dư Hàng','type'=>'Phường','location'=>'20 50 52N, 106 40 38E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11392','name'=>'Hàng Kênh','type'=>'Phường','location'=>'20 50 51N, 106 41 00E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11395','name'=>'Đông Hải','type'=>'Phường','location'=>'20 50 37N, 106 41 10E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11398','name'=>'Niệm Nghĩa','type'=>'Phường','location'=>'20 50 36N, 106 39 50E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11401','name'=>'Nghĩa Xá','type'=>'Phường','location'=>'20 50 31N, 106 40 10E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11404','name'=>'Dư Hàng Kênh','type'=>'Phường','location'=>'20 50 13N, 106 40 59E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11405','name'=>'Kênh Dương','type'=>'Phường','location'=>'','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11407','name'=>'Vĩnh Niệm','type'=>'Phường','location'=>'20 49 43N, 106 40 46E','district_id'=>'305'] );
		Ward::create( ['ward_id'=>'11410','name'=>'Đông Hải 1','type'=>'Phường','location'=>'20 50 25N, 106 46 07E','district_id'=>'306'] );
		Ward::create( ['ward_id'=>'11411','name'=>'Đông Hải 2','type'=>'Phường','location'=>'','district_id'=>'306'] );
		Ward::create( ['ward_id'=>'11413','name'=>'Đằng Lâm','type'=>'Phường','location'=>'20 49 53N, 106 42 56E','district_id'=>'306'] );
		Ward::create( ['ward_id'=>'11414','name'=>'Thành Tô','type'=>'Phường','location'=>'','district_id'=>'306'] );
		Ward::create( ['ward_id'=>'11416','name'=>'Đằng Hải','type'=>'Phường','location'=>'20 50 20N, 106 43 13E','district_id'=>'306'] );
		Ward::create( ['ward_id'=>'11419','name'=>'Nam Hải','type'=>'Phường','location'=>'20 49 55N, 106 44 22E','district_id'=>'306'] );
		Ward::create( ['ward_id'=>'11422','name'=>'Cát Bi','type'=>'Phường','location'=>'20 49 30N, 106 42 18E','district_id'=>'306'] );
		Ward::create( ['ward_id'=>'11425','name'=>'Tràng Cát','type'=>'Phường','location'=>'20 48 00N, 106 44 05E','district_id'=>'306'] );
		Ward::create( ['ward_id'=>'11428','name'=>'Quán Trữ','type'=>'Phường','location'=>'20 49 43N, 106 38 37E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11429','name'=>'Lãm Hà','type'=>'Phường','location'=>'','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11431','name'=>'Đồng Hoà','type'=>'Phường','location'=>'20 49 26N, 106 39 44E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11434','name'=>'Bắc Sơn','type'=>'Phường','location'=>'20 49 20N, 106 37 56E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11437','name'=>'Nam Sơn','type'=>'Phường','location'=>'20 48 26N, 106 38 37E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11440','name'=>'Ngọc Sơn','type'=>'Phường','location'=>'20 48 24N, 106 36 27E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11443','name'=>'Trần Thành Ngọ','type'=>'Phường','location'=>'20 48 33N, 106 37 29E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11446','name'=>'Văn Đẩu','type'=>'Phường','location'=>'20 47 23N, 106 38 28E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11449','name'=>'Phù Liễn','type'=>'Phường','location'=>'20 47 13N, 106 38 06E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11452','name'=>'Tràng Minh','type'=>'Phường','location'=>'20 47 14N, 106 37 07E','district_id'=>'307'] );
		Ward::create( ['ward_id'=>'11455','name'=>'Ngọc Xuyên','type'=>'Phường','location'=>'20 43 33N, 106 46 23E','district_id'=>'308'] );
		Ward::create( ['ward_id'=>'11458','name'=>'Ngọc Hải','type'=>'Phường','location'=>'20 43 28N, 106 47 25E','district_id'=>'308'] );
		Ward::create( ['ward_id'=>'11461','name'=>'Vạn Hương','type'=>'Phường','location'=>'20 41 56N, 106 47 03E','district_id'=>'308'] );
		Ward::create( ['ward_id'=>'11464','name'=>'Vạn Sơn','type'=>'Phường','location'=>'20 42 35N, 106 47 14E','district_id'=>'308'] );
		Ward::create( ['ward_id'=>'11465','name'=>'Minh Đức','type'=>'Phường','location'=>'','district_id'=>'308'] );
		Ward::create( ['ward_id'=>'11467','name'=>'Bàng La','type'=>'Phường','location'=>'20 42 42N, 106 44 43E','district_id'=>'308'] );
		Ward::create( ['ward_id'=>'11470','name'=>'Núi Đèo','type'=>'Thị Trấn','location'=>'20 55 03N, 106 40 23E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11473','name'=>'Minh Đức','type'=>'Thị Trấn','location'=>'20 57 46N, 106 44 25E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11476','name'=>'Lại Xuân','type'=>'Xã','location'=>'21 00 19N, 106 35 25E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11479','name'=>'An Sơn','type'=>'Xã','location'=>'20 59 36N, 106 34 00E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11482','name'=>'Kỳ Sơn','type'=>'Xã','location'=>'20 59 30N, 106 36 27E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11485','name'=>'Liên Khê','type'=>'Xã','location'=>'20 59 46N, 106 38 46E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11488','name'=>'Lưu Kiếm','type'=>'Xã','location'=>'20 59 02N, 106 39 53E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11491','name'=>'Lưu Kỳ','type'=>'Xã','location'=>'21 00 00N, 106 40 10E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11494','name'=>'Gia Minh','type'=>'Xã','location'=>'20 59 29N, 106 41 52E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11497','name'=>'Gia Đức','type'=>'Xã','location'=>'20 59 10N, 106 44 35E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11500','name'=>'Minh Tân','type'=>'Xã','location'=>'20 58 15N, 106 41 50E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11503','name'=>'Phù Ninh','type'=>'Xã','location'=>'20 58 35N, 106 35 18E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11506','name'=>'Quảng Thanh','type'=>'Xã','location'=>'20 57 49N, 106 35 57E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11509','name'=>'Chính Mỹ','type'=>'Xã','location'=>'20 58 07N, 106 37 41E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11512','name'=>'Kênh Giang','type'=>'Xã','location'=>'20 57 30N, 106 39 09E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11515','name'=>'Hợp Thành','type'=>'Xã','location'=>'20 56 55N, 106 35 59E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11518','name'=>'Cao Nhân','type'=>'Xã','location'=>'20 56 18N, 106 36 58E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11521','name'=>'Mỹ Đồng','type'=>'Xã','location'=>'20 56 26N, 106 37 47E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11524','name'=>'Đông Sơn','type'=>'Xã','location'=>'20 56 29N, 106 39 15E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11527','name'=>'Hoà Bình','type'=>'Xã','location'=>'20 56 37N, 106 40 43E','district_id'=>'311'] );
		Ward::create( ['ward_id'=>'11530','name'=>'Trung Hà','type'=>'Xã','location'=>'20 55 26N, 106 42 17E','district_id'=>'311'] );

		
    }
}

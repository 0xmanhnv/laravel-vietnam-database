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
    }
}

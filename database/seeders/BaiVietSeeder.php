<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class BaiVietSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('bai_viets')->delete();

        DB::table('bai_viets')->truncate();

        DB::table('bai_viets')->insert([
            [
                'tieu_de'           => '10 Phong Cách Thời Trang Nam Trẻ Trung, Năng Động Bậc Nhất',
                'slug_tieu_de'      => Str::slug('10 Phong Cách Thời Trang Nam Trẻ Trung, Năng Động Bậc Nhất'),
                'hinh_anh'          => 'https://media-fmplus.cdn.vccloud.vn/uploads/news/c54bad46-db0d-4bc1-ba60-21a1dcee84ad.png',
                'mo_ta_ngan'        => 'Phong cách thời trang nam luôn biến hóa đa dạng và thay đổi liên tục theo thời gian để bắt kịp xu hướng và tạo nên các phong cách riêng biệt.',
                'mo_ta_chi_tiet'    => 'Họa tiết, màu sắc trang phục
                Trong các phong cách thời trang nam họa tiết và màu sắc cũng là yếu tố quan trọng để nhận dạng giữa các phong cách thời trang nam.

                Mà nó còn thể hiện tinh thần của phong cách ăn mặc của người mặc. Chỉ cần bạn nhìn qua đã biết phong cách thời trang nam nào hiện diện trong màu sắc và họa tiết đấy.

                Cách phối đồ nam
                Mỗi phong cách thời trang nam mang trong mình một cách phối đồ khác nhau, tạo ra sự đa dạng và cá nhân hóa cho mỗi người.

                Tuy nhiên, giữa các phong cách này có thể có sự chồng chéo và sự sáng tạo không giới hạn. Quan trọng nhất là bạn cảm thấy tự tin và thoải mái khi mặc trang phục, và thể hiện cái tôi của mình thông qua phong cách riêng.',
                'loai_bai_viet'     => 2,
                'trang_thai'        => 1,
            ],

            [
                'tieu_de'           => '15+ Cách Phối Màu Quần Áo Nam Như Stylist Chuyên Nghiệp',
                'slug_tieu_de'      => Str::slug('15+ Cách Phối Màu Quần Áo Nam Như Stylist Chuyên Nghiệp'),
                'hinh_anh'          => 'https://media-fmplus.cdn.vccloud.vn/uploads/news/ed56c5fa-ed68-4440-b821-4ab4a3c578fb.jpg',
                'mo_ta_ngan'        => 'Những món đồ bình dân, giá rẻ cũng sẽ trở nên cao cấp và thời thượng hơn nếu bạn nắm được các cách phối màu quần áo nam đúng điệu.',
                'mo_ta_chi_tiet'    => 'Isaac Newton đã phát triển bánh xe màu sắc vào năm 1666 với 12 gam màu cơ bản và ba màu chủ đạo là đỏ, vàng và xanh biển. Từ 3 gam màu này khi được kết hợp theo các tỷ lệ phù hợp sẽ tạo nên các màu sắc mới.

                Từ nguyên lý này, ta sẽ có các cách phối màu quần áo nam cơ bản bao gồm:

                Sơ mi trắng phù hợp với mọi tone màu
                Kết hợp màu xám với các gam màu sáng
                Phối quần áo có cùng sắc độ
                Lưu ý chọn quần áo có gam màu sặc sỡ
                Cách phối màu quần áo theo các gam màu bổ sung nhau.',
                'loai_bai_viet'     => 1,
                'trang_thai'        => 1,
            ],

            [
                'tieu_de'           => 'Bảng Size Quần Nam & Cách Chọn Size Theo Thông Số Chuẩn Nhất 2023',
                'slug_tieu_de'      => Str::slug('Bảng Size Quần Nam & Cách Chọn Size Theo Thông Số Chuẩn Nhất 2023'),
                'hinh_anh'          => 'https://media-fmplus.cdn.vccloud.vn/uploads/news/74816d01-ccb6-40d8-a613-0c0678c359af.jpg',
                'mo_ta_ngan'        => 'Size quần nam là thông tin cần thiết bạn cần nắm để có thể dễ dàng chọn mua những sản phẩm vừa vặn tại các cửa hàng hoặc thông qua hình thức online mà không cần phải thử trực tiếp.',
                'mo_ta_chi_tiet'    => 'Size quần nam là thông tin cần thiết bạn cần nắm để có thể dễ dàng chọn mua những sản phẩm vừa vặn tại các cửa hàng hoặc thông qua hình thức online mà không cần phải thử trực tiếp. Cập nhật nhanh thông số size quần nam chuẩn nhất được FM Style tổng hợp ngay sau đây.
                Chi tiết bảng size quần nam theo từng loại quần
                Size quần tây nam
                Quần tây nam là một loại trang phục phổ biến trong thời trang cho nam giới, được thiết kế với kiểu dáng dễ mặc và chất liệu sang trọng.
                Quần tây thường được sử dụng trong môi trường công sở, sự kiện đòi hỏi tính chuyên nghiệp hoặc các buổi tiếp khách quan trọng.
                ',
                'loai_bai_viet'     => 2,
                'trang_thai'        => 1,
            ],

            [
                'tieu_de'           => 'Phối Đồ Với Giày Chelsea Boot Nam: 13 Cách Mix & Match Sành Điệu',
                'slug_tieu_de'      => Str::slug('Phối Đồ Với Giày Chelsea Boot Nam: 13 Cách Mix & Match Sành Điệu'),
                'hinh_anh'          => 'https://media-fmplus.cdn.vccloud.vn/uploads/news/58fa1baf-09fd-44be-be59-5d158161ac05.png',
                'mo_ta_ngan'        => 'Cách phối đồ với chelsea boot nam giúp các anh chàng có nhiều lựa chọn trong cách phối đồ để có nhiều phong cách khác nhau.',
                'mo_ta_chi_tiet'    => 'Cách phối đồ với chelsea boot nam giúp các anh chàng có nhiều lựa chọn trong cách phối đồ để có nhiều phong cách khác nhau. Để có set đồ hoàn hảo các anh chàng cần nắm bắt được phối đồ với chelsea boot sao cho hợp lý và đúng yêu cầu. Trong bài viết sau đây FM STYLE chia sẻ cách phối đồ với chelsea boot nam chuẩn và thời trang nhé!!
                Giày chelsea boot nam là gì?
Giày chelsea boot là loại giày nam có thiết kế theo xu hướng cổ điển và đẳng cấp. Từ xưa đã xuất hiện từ nước Anh chủ yếu được làm chất liệu từ da hoặc chất liệu da tổng hợp. Đa số kiểu dáng được thiết kế cổ điển, mũi giày tròn và không có dây buộc. Đặc trưng nhất của giày Chelsea boot là hai miếng đàn hồi hai bên giúp bạn dễ dàng trong lúc mang và tháo giày. ',
                'loai_bai_viet'     => 2,
                'trang_thai'        => 1,
            ],

            [
                'tieu_de'           => 'Thời Trang Nam Phong Cách Trẻ Trung, Cao Cấp, Giá Tốt Bậc Nhất',
                'slug_tieu_de'      => Str::slug('Thời Trang Nam Phong Cách Trẻ Trung, Cao Cấp, Giá Tốt Bậc Nhất'),
                'hinh_anh'          => 'https://media-fmplus.cdn.vccloud.vn/uploads/news/13382d6d-362d-46dc-a1cd-28430eef0abe.png',
                'mo_ta_ngan'        => 'Thời trang nam là lĩnh vực khá đa dạng về phong cách và kiểu dáng. Cánh mày râu hoàn toàn có thể chọn cho mình những bộ trang phục phù hợp với sở thích của mình.',
                'mo_ta_chi_tiet'    => 'Thời trang nam phong cách trẻ trung, cao cấp, giá tốt bậc nhất
                Thời trang nam là lĩnh vực khá đa dạng về phong cách và kiểu dáng. Cánh mày râu hoàn toàn có thể chọn cho mình những bộ trang phục phù hợp với sở thích của mình. Nhờ đó, bạn sẽ trở nên thu hút và khẳng định được gu thời trang riêng. Ngay bây giờ, bạn hãy cùng FM Style khám phá ngay những phong cách đang được ưa chuộng bởi nam giới hiện nay nhé!

                1. Phân loại loại hình thời trang nam theo xu hướng hiện nay
                Đâu là xu hướng thời trang nam phổ biến được nhiều người đón nhận hiện nay? Nếu bạn vẫn đang trên hành trình định hình phong cách cho riêng mình, hãy cùng FM Style tìm hiểu ngay 5 xu hướng thời trang hot nhất nhé.

                1.1 Thời trang nam cao cấp
                Thời trang nam cao cấp hướng tới những mẫu quần áo được sản xuất và thiết kế từ các thương hiệu nổi tiếng trong và ngoài nước. Những mẫu sản phẩm của các brand này đều nhanh chóng bắt kịp xu hướng giới trẻ. Đặc biệt hơn, thời trang nam cao cấp hoàn toàn được làm từ những chất liệu dày dặn và có độ bền cao để nam giới luôn tự tin khi ra đường.

                ',
                'loai_bai_viet'     => 2,
                'trang_thai'        => 1,
            ],

            [
                'tieu_de'           => 'Set Đồ Đi Đám Cưới Cho Nam: Chi Tiết Cách Phối Tạo Outfit Điểm 10',
                'slug_tieu_de'      => Str::slug('Set Đồ Đi Đám Cưới Cho Nam: Chi Tiết Cách Phối Tạo Outfit Điểm 10'),
                'hinh_anh'          => 'https://media-fmplus.cdn.vccloud.vn/uploads/news/7b3da640-434c-49da-98d2-62b6ba07923a.jpeg',
                'mo_ta_ngan'        => 'Việc lựa chọn trang phục phù hợp khi tham dự đám cưới là điều rất quan trọng.',
                'mo_ta_chi_tiet'    => 'Việc lựa chọn trang phục phù hợp khi tham dự đám cưới là điều rất quan trọng. Nếu bạn là một chàng trai và đang loay hoay không biết nên mặc gì khi dự đám cưới, hãy yên tâm vì bài viết này sẽ giúp bạn giải quyết vấn đề đó. Cùng FM Style điểm qua những set đồ đi đám cưới cực đẹp cho nam ngay sau đây và lựa chọn cho mình outfit phù hợp để trở thành một người đàn ông thật sự trưởng thành và tinh tế trong buổi tiệc nhé.
                Cách phối đồ đi đám cưới cho nam
Áo sơ mi phối quần âu kèm giày loafers
Set đồ đi đám cưới cho nam đẹp không thể bỏ qua outfit áo sơ mi phối quần âu (quần tây) kèm giày loafers sang trọng.

set đồ đi đám cưới cho nam đẹp khi phối áo sơ mi với quần tây và giày loafers

Bạn có thể chọn áo sơ mi trắng kết hợp với quần âu đen hoặc xám. Đồng thời giày loafers cũng mang đến sự thoải mái và góp phần tạo nên sự tinh tế, trẻ trung và hiện đại cho bộ trang phục đi đám cưới cho nam.

Cuối cùng, để bộ đồ thêm phần phong cách, bạn có thể kết hợp với một chiếc cà vạt nơ hay cà vạt đen và một chiếc đồng hồ đeo tay để tạo nên điểm nhấn cho bộ đồ của mình. Với cách phối đồ này, bạn sẽ trở nên lịch lãm và tinh tế hơn bao giờ hết khi tham dự một đám cưới. ',
                'loai_bai_viet'     => 2,
                'trang_thai'        => 1,
            ],
        ]);
    }
}

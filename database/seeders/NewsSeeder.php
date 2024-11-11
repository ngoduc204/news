<?php

namespace Database\Seeders;

use App\Models\News;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class NewsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        $newsItems = [
            [
                'title' => 'Ronaldo sẽ trở lại Châu Âu',
                'img' => 'img/cr7.webp',
                'content' => 'Cristiano Ronaldo, siêu sao bóng đá người Bồ Đào Nha, đang rục rịch trở lại châu Âu sau một mùa giải đầy ấn tượng tại Al Nassr ở Saudi Arabia. Tin tức này đã thu hút sự chú ý của người hâm mộ và giới truyền thông, khi họ đặt câu hỏi liệu Ronaldo có thể quay lại sân chơi mà anh đã làm mưa làm gió trong suốt hai thập kỷ qua.

Ronaldo, 39 tuổi, đã có những màn trình diễn xuất sắc tại giải Saudi Pro League, giúp Al Nassr giành được nhiều danh hiệu và ghi được nhiều bàn thắng. Tuy nhiên, những thông tin gần đây cho thấy anh đang tìm kiếm một thử thách mới, có thể là tại một trong những câu lạc bộ lớn của châu Âu.

Theo các nguồn tin, nhiều đội bóng tại châu Âu, bao gồm những cái tên quen thuộc như Manchester United và Juventus, đã bày tỏ sự quan tâm đến việc ký hợp đồng với Ronaldo. Dù đã có những thành công lớn ở cả hai câu lạc bộ này, người hâm mộ vẫn không thể không mơ về một cuộc tái hợp.

Trở lại châu Âu, Ronaldo không chỉ mong muốn chinh phục những danh hiệu mới mà còn muốn khẳng định mình là một trong những cầu thủ vĩ đại nhất lịch sử bóng đá. Anh đã từng giành nhiều danh hiệu cao quý, bao gồm Champions League và Quả bóng vàng, và việc trở lại có thể mở ra cơ hội để anh tiếp tục nâng cao di sản của mình.

Với kinh nghiệm và khao khát không ngừng nghỉ, Ronaldo chắc chắn sẽ là một nhân tố quan trọng trong bất kỳ đội bóng nào mà anh gia nhập. Người hâm mộ đang chờ đợi từng thông tin và hy vọng sẽ thấy anh tỏa sáng trên các sân cỏ châu Âu một lần nữa.',
                'id_categories' => 1,
            ],
            [
                'title' => 'Ai sẽ thay thế con người trong tương lai',
                'img' => 'img/ai.jpg',
                'content' => 'Sự phát triển của trí tuệ nhân tạo (AI) đang đặt ra câu hỏi về tương lai của nghề lập trình viên. Các công cụ như GitHub Copilot có khả năng hỗ trợ viết mã và kiểm tra lỗi, giúp lập trình viên tiết kiệm thời gian. Tuy nhiên, AI khó có thể thay thế những khía cạnh quan trọng sau:

Phân Tích và Thiết Kế Hệ Thống: Lập trình viên cần phân tích yêu cầu và thiết kế kiến trúc hệ thống, điều mà AI không thể làm một cách hiệu quả.

Giải Quyết Vấn Đề Sáng Tạo: Sự sáng tạo và tư duy phản biện vẫn là những yếu tố mà AI chưa thể thay thế.

Giao Tiếp và Hợp Tác: Kỹ năng giao tiếp và làm việc nhóm vẫn rất quan trọng trong môi trường làm việc.

Thay vì lo lắng về việc bị thay thế, lập trình viên nên tận dụng AI như một công cụ hỗ trợ và cập nhật kỹ năng để thích ứng với công nghệ mới. Tương lai của lập trình viên sẽ phụ thuộc vào khả năng sáng tạo và thích ứng với những thay đổi này.',
                'id_categories' => 2,
            ],
            [
                'title' => 'Âm nhạc chữa lành những vết thương',
                'img' => 'img/music.jpg',
                'content' => 'Âm nhạc từ lâu đã được biết đến như một phương tiện giao tiếp cảm xúc mạnh mẽ, có khả năng chữa lành những vết thương tâm hồn. Khi chúng ta nghe một bản nhạc yêu thích, nó có thể mang lại cảm giác thoải mái và giúp xoa dịu nỗi đau.

1. Tác Động Tâm Lý
Âm nhạc có khả năng kích thích các cảm xúc mạnh mẽ, từ niềm vui đến nỗi buồn. Nghiên cứu cho thấy rằng âm nhạc có thể làm giảm cảm giác lo âu, trầm cảm và tăng cường sự hạnh phúc. Những giai điệu nhẹ nhàng có thể giúp cơ thể sản sinh ra endorphin, hormone tạo cảm giác vui vẻ.

2. Gợi Nhớ Ký Ức
Nhiều khi, một bản nhạc có thể gợi nhớ những kỷ niệm đẹp, giúp ta đối diện với quá khứ một cách nhẹ nhàng hơn. Âm nhạc có thể trở thành cầu nối giúp ta tìm lại chính mình và chấp nhận những điều đã qua.

3. Phương Pháp Trị Liệu
Âm nhạc trị liệu là một lĩnh vực đang phát triển, nơi các nhà trị liệu sử dụng âm nhạc để giúp bệnh nhân xử lý cảm xúc và cải thiện tâm trạng. Các buổi trị liệu thường bao gồm việc nghe, sáng tác hoặc chơi nhạc, tạo ra không gian an toàn để người bệnh thể hiện bản thân.',
                'id_categories' => 3,
            ],

        ];

        foreach ($newsItems as $news) {
            News::create($news);
        }
    }
}

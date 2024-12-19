
-- --------------------------------------------------------
CREATE DATABASE IF NOT EXISTS `shopquanao` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `shopquanao`;
--
-- Cấu trúc bảng cho bảng `sanpham`
--

CREATE TABLE `sanpham` (
  `tensanpham` varchar(10000) NOT NULL,
  `motasanpham` varchar(1000) NOT NULL,
  `soluong` int(11) NOT NULL,
  `gia` int(11) NOT NULL,
  `id` int(11) NOT NULL,
  `hinhanh` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `sanpham`
--

INSERT INTO `sanpham` (`tensanpham`, `motasanpham`, `soluong`, `gia`, `id`, `hinhanh`) VALUES
('Thức ăn cho chó sp01', 'Công thức độc đáo của Pedigree® Pouch được phát triển bởi các chuyên gia dinh dưỡng WALTHAM ™, Cơ quan hàng đầu thế giới về Chăm sóc và Dinh dưỡng Vật nuôi từ Anh Quốc.  Pedigree® Pouch cho cún một chế độ dinh dưỡng đầy đủ và cân bằng chứa chất chống oxy hóa hỗ trợ hệ miễn dịch khỏe mạnh để cún luôn vui khỏe!  Pedigree® Pouch thơm ngon mê ly cùng hương vị đa dạng cho cún tha hồ đổi món mà không bao giờ cảm thấy nhàm chán!  Pedigree® Pouch với công thức phù hợp cho cả cún con và cún trưởng thành, giúp cún cưng luôn nhận được dưỡng chất đầy đủ và cân bằng trong từng giai đoạn cuộc đời.', 10, 900, 16, 'anh1.jpg'),
('thức ăn cho mèo ', 'thức ăn với công thức dinh dưỡng dành cho mèo trưởng thành, với hương vị thơm ngon thuyết phục được cả những chú mèo khó tính nhất. Thức ăn cho mèo với công thức dinh dưỡng dồi dào khoáng chất và vitamin giúp tăng cường sức khoẻ hệ miễn dịch. Bên cạnh đó, lượng protein dồi dào sẽ giúp mèo yêu phát triển cân nặng tối đa. Sản phẩm bổ sung dưỡng chất giúp da và lông của thú cưng luôn óng ả và mượt mà. Thức ăn cho mèo  nên được bảo quản ở nơi khô ráo và thoáng mát.', 10, 100, 17, 'anh2.jpg'),
('thức ăn cho chó con', 'ổi tiếng được làm từ sữa nguyên chất giúp bổ sung lượng canxi dồi dào cho thú cưng nhà bạn phát triển khoẻ mạnh Xương gặm cho chó  được làm từ công thức tuyệt vời giàu Canxi, ít calo, ít protein và chất béo. Đảm bảo sản mang đến sức khoẻ cân bằng cho thú cưng, duy trì trọng lượng hoàn hảo. Bên cạnh đó, xương gặm còn làm giảm mảng bám và mùi hôi miệng cho cún, giúp răng miệng của chúng luôn sạch sẽ và thơm tho. Xương gặm cho chó có 2 loại, đảm bảo phù hợp cho cún ở mọi lứa tuổi. - Màu đỏ: dành cho chó nhỏ  - Màu xanh: dành cho chó lớn.', 10, 200, 18, 'anh3.jpg'),
('thức ăn cho mèo con ', 'là hỗn hợp hoàn chỉnh và cân bằng dinh dưỡng vị thịt gà giúp kiểm soát búi lông dành cho mèo. Thức ăn khô cho mèo đặc biệt dành riêng cho những chú mèo nuôi trong nhà. Với đặc tính lười vận động, khả năng tiêu hoá của những chú mèo này bị hạn chế đáng kể. Nhưng hàm lượng chất xơ dồi dào có trong ProPlan sẽ thúc đẩy chức năng tiêu hóa và làm giảm mùi của phân đáng kể. Đặc biệt còn giúp đào thải búi lông một cách tự nhiên, giúp đường ruột mèo luôn khoẻ mạnh. Thức ăn khô cho mèo có hàm lượng protein dồi dào giúp mèo phát triển toàn diện về thể trạng, đồng thời vitamin và khoáng chất cũng bảo vệ hệ miễn dịch tối đa. Đảm bảo mèo sẽ luôn duy trì sức khoẻ tuyệt vời. Hướng dẫn bảo quản: Bảo quản ở nơi khô ráo và thoáng mát, tránh ánh nắng mặt trời.  Nhà sản xuất: Nestle Purina Petcare - Blayney Factory  Xuất xứ: Australia. ', 55, 300, 19, 'anh4.jpg'),
('Phụ kiện cho chó', 'à đồ chơi có màu sắc sặc sỡ, bắt mắt, rất được ưa chuộng trên thị trường hiện nay.. Bóng đồ chơi chút chít hình bàn chân, mặt chó được làm từ chất liệu nhựa dẻo an toàn. Khi cún nhà bạn chơi đùa sẽ tạo ra tiếng kêu chút chít rất vui tai. Thiết kế hình quả bóng sẽ giúp Boss dễ ngậm và gặm mà không gây đau đớn hay bất tiện. Bóng đồ chơi chút chít hình bàn chân, mặt chó sẽ giúp kích thích khả năng vận động cho chó, giúp chúng thư giản và luôn thoải mái. Bạn cũng có thể chơi đùa với chúng bằng cách ném bóng để tăng tình cảm và có thêm thời gian vui đùa cùng chúng.  Sản phẩm sẽ giúp hạn chế việc cắn đồ đạc trong nhà như dép, gối,... của chó nhà bạn. Vậy thì còn chần chờ gì nữa mà không thêm ngay Bóng đồ chơi chút chít hình bàn chân, mặt chó  vào giỏ hàng nào? Sản phẩm có đường kính 7cm.', 44, 400, 20, 'anh5.jpg'),
('Quần áo cho chó sp02', 'được làm từ chất liệu mềm mại, êm ái, không kích ứng da, phù hợp cho chó  yêu nhà bạn. Áo gió cho chó nhiều size cho mọi dòng chó', 33, 500, 21, 'anh6.jpg'),
('Phụ kiện cho mèo', 'à đồ chơi phù hợp với những chú mèo nghịch ngợm, thích tò mò. Mèo sẽ rất thích những vật nhỏ xinh, nhất là những vật chuyển động giúp mèo rất thích thú..  cho mèo giúp thú cưng của bạn trở nên linh hoạt. Sản phẩm được thiết kế với chất liệu nhựa bền để những chú mèo đùa nghịch, vận động nhiều hơn. cho mèo chạy pin giúp dễ dàng thay thế.', 23, 600, 22, 'anh7.jpg'),
('Quần áo cho mèo', 'được làm từ chất liệu mềm mại, êm ái, không kích ứng da, phù hợp cho  mèo yêu nhà bạn. Áo gió cho mèo nhiều size cho mọi dòng mèo', 2, 700, 23, 'anh8.jpg'),
('Pate cho chó', ' là sản phẩm của Ý, nổi tiếng tại Châu Âu với hương vị thơm ngon được kết hợp đặc biệt với các loại hoa quả và thịt gà tây, cá ngừ,... Pate cho chó 100g được làm từ các loại thịt thơm ngon cùng xoài, dứa, raspberry - đây là sự kết hợp có một không hai giúp kích thích khả năng ăn uống của chó để phát triển sức khoẻ toàn diện. Những loại quả sẽ cung cấp vitamin và khoáng chất tối đa để chó yêu có sức đề kháng toàn diện. Bên cạnh đó, da lông của cún sẽ được nuôi dưỡng tối đa nhờ những loại quả này. Ngoài ra,không chứa đường, gluten giúp hạn chế các ảnh hưởng tiêu cực đến sức khoẻ của chó như dị ứng, mẩn ngứa, khó tiêu, bệnh tiểu đường,...  Pate cho chó  100g phù hợp tất cả các giống chó ở mọi lứa tuổi từ chó con đến chó trưởng thành hay chó mẹ đang mang thai và cho con bú. Đặc biệt cung cấp dinh dưỡng cho chó đang bệnh, sau phẫu thuật hoặc trong gian đoạn phục hồi sức khoẻ.  Sản phẩm có tới 12 hương vị thơm ngon để bạn có thể lựa chọn cho các Boss.  Hướng dẫn sử dụng và bảo quản:  - Có th', 1, 800, 24, 'anh9.jpg'),
('Pate cho mèo ', 'à thức ăn mềm hoàn chỉnh, thơm ngon dành cho mèo từ 6 tháng tuổi với tới 10 hương vị đa dạng. Pate cho mèo  Lon 400g nổi tiếng với chất lượng vượt trội, nguyên liệu tươi ngon hảo hạng như cá hồi, cá ngừ, thịt cừu,... Loại pate này bổ sung lượng protein dồi dào để mèo trưởng thành khoẻ mạnh. Lượng taurine, vitamin và khoáng chất giúp mèo phát triển toàn diện về trí não và hệ miễn dịch để chống lại bệnh tật.', 10, 10, 25, 'anh10.jpg');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `taikhoan1`
--

CREATE TABLE `taikhoan1` (
  `id` int(11) NOT NULL,
  `taikhoan` varchar(100) NOT NULL,
  `matkhau` varchar(100) NOT NULL,
  `chucvu` varchar(11111) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `taikhoan1`
--

INSERT INTO `taikhoan1` (`id`, `taikhoan`, `matkhau`, `chucvu`) VALUES
(3, 'admin1', '123', 'dd'),
(4, 'admin2', '123', '0'),
(25, 'hung', '1', 'nhanvien'),
(26, 'hieu', '1', 'nhanvien'),
(27, 'tuan', '1', 'nhanvien'),
(28, 'quân', '1', 'nhân viên'),
(29, 'hưởng', '1', ' nhân viên');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `id` int(11) NOT NULL,
  `tenbai` longtext NOT NULL,
  `noidung` mediumtext NOT NULL,
  `hinhanh` varchar(10000) NOT NULL,
  `tacgia` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`id`, `tenbai`, `noidung`, `hinhanh`, `tacgia`) VALUES
(13, 'Mèo trưởng thành 1+ tuổi', 'Mèo cần một chế độ ăn uống cân bằng và đầy đủ, đặc biệt là protein để tăng khối lượng cơ. Sử dụng thức ăn Whiskas® dành cho mèo trưởng thành từ 1+ tuổi.Chăm Sóc MèoNếu bạn là người mới lần đầu nuôi mèo, bạn sẽ không khỏi băn khoăn về cách chăm sóc mèo', 'anhtintuc1.jpg', 'hùng'),
(14, 'Học Cách Chăm Sóc Mèo Con', 'Chơi đùa thường xuyên với mèo con không chỉ là niềm vui mà nhờ vậy, mèo cũng tình cảm, quấn chủ hơn. Ngoài ra, việc này cũng giúp mèo con nuôi dưỡng bản năng tự nhiên vốn có của nó.', 'anhtintuc2.jpg', 'hiếu'),
(15, 'Ngôn Ngữ Dùng Cho Mèo Con', 'Hiểu được mèo con đang nghĩ gì và cảm thấy thế nào chắc chắn sẽ mang lai cho bạn những phút giây tuyệt vời bên thú cưng của mình.', 'anhtintuc3.jpg', 'hưởng'),
(16, 'Mèo lớn 7+ tuổi', 'Mèo ở độ tuổi này cần được chăm sóc đặc biệt. Sử dụng thức ăn Whiskas® dành cho mèo lớn 7+ tuổi - được thiết kế đặc biệt để trì hoãn những ảnh hưởng do tuổi già.', 'anhtintuc4.jpg', 'hưởng'),
(17, 'Sức Khỏe mèo', 'hông thể tránh khỏi việc mèo bị đau nhức và thường xuyên hơn khi già đi, nhưng có nhiều cách để cải thiện tình trạng này....', 'anhtintuc5.jpg', 'hùng'),
(18, 'Dinh Dưỡng Cho Mèo ', 'Mẹo và những lời khuyên để mèo luôn khỏe mạnh, vui tươi ngay cả khi đã già đi.', 'anhtintuc6.jpg', 'hiếu'),
(19, 'Chơi Đùa', 'Khi già đi, mèo có thể ít chạy nhảy, chơi đùa hơn so với mèo con, nhưng mèo già vẫn sẽ thích chơi đùa thường xuyên và sẽ thể hiện mong muốn của mình.', 'anhtintuc7.jpg', 'quân'),
(20, 'Bí quyết khiến mèo cưng phê pha rrrr...rừ khoái chí?', 'Tất cả những người yêu mèo đều đồng ý với một điều đó là BẠN không phải là chủ, mà chính MÈO CƯNG mới là những ông chủ, bà chủ. Làm sao bạn có thể không bị khuất phục trước sự quyến rũ của các hoàng thượng này chứ? Mèo cưng như sự tổng hòa bé nhỏ của sự dễ thương, vui tươi và hung dữ, tất cả được hòa trộn chuẩn vị khiến cho món ăn pha chế độc đáo cho tinh thần này trở nên không thể chối từ! Thời điểm mà mèo cưng bước vào cuộc sống và ngôi nhà của bạn, thì bé đã hoàn toàn chiếm lĩnh vị thế làm chủ của bạn.Hỏi bất kỳ người nuôi mèo nào xem họ yêu thích điều gì nhất ở bộ lông xù quý giá của mèo cưng và hầu hết sẽ nhận được câu trả lời là khi mèo cưng ngồi trên người bạn (đó có thể là đùi, khuôn mặt của bạn, ngực của bạn, bất cứ nơi nào mà hoàng thượng ấy ưa thích) và bắt đầu ', 'anhtintuc8.jpg', 'quân'),
(21, 'Tại sao mèo kêu ', 'Mèo kêu ', 'anhtintuc9.jpg', 'tuấn'),
(22, 'Dinh Dưỡng Cho Mèo con', 'Mèo có nhu cầu dinh dưỡng khác với con người. Chúng cần lượng protein gấp 4 lần, lượng vitamin A và taurine gấp 2 lần để đáp ứng nhu cầu dinh dưỡng.', 'anhtintuc10.jpg', 'tuấn');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `taikhoan1`
--
ALTER TABLE `taikhoan1`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `sanpham`
--
ALTER TABLE `sanpham`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT cho bảng `taikhoan1`
--
ALTER TABLE `taikhoan1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

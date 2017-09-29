-- Adminer 4.2.5 MySQL dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `akses`;
CREATE TABLE `akses` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `akses` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `akses` (`id`, `akses`) VALUES
(1,	'ADD ARTIKEL'),
(2,	'EDIT ARTIKEL'),
(3,	'DELETE ARTIKEL'),
(4,	'ADD PRODUK'),
(5,	'EDIT PRODUK'),
(6,	'DELETE PRODUK');

DROP TABLE IF EXISTS `artikel`;
CREATE TABLE `artikel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` text NOT NULL,
  `body` longtext NOT NULL,
  `url` text NOT NULL,
  `kategori` text NOT NULL,
  `tanggal` text NOT NULL,
  `penulis` text NOT NULL,
  `jumlah_baca` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `artikel` (`id`, `title`, `body`, `url`, `kategori`, `tanggal`, `penulis`, `jumlah_baca`) VALUES
(1,	'Judul Artikel 1',	'&lt;img src=&quot;https://cdn.pixabay.com/photo/2016/06/18/17/42/image-1465348_960_720.jpg&quot;&gt;\r\n\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using &#39;Content here, content here&#39;, making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for &#39;lorem ipsum&#39; will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\n',	'judul-artikel-1',	'1',	'2017-08-16',	'vulnwalker@elderscode.org',	'10'),
(2,	'Judul Artikel 2',	'&lt;img src=&quot;https://cdn.pixabay.com/photo/2013/04/06/11/50/image-editing-101040_960_720.jpg&quot;&gt;\r\n\r\n Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada, dui sit amet dignissim placerat, justo nisl placerat orci, ut laoreet lacus tellus eu lacus. Proin eu consequat quam. Maecenas vulputate rhoncus magna sed volutpat. Proin ipsum erat, commodo a tellus a, fermentum consectetur lacus. Curabitur vehicula elit quis ex maximus mattis. Duis tristique sapien et lectus mattis auctor. Cras nec interdum nunc, quis elementum quam. Aliquam viverra tempus ullamcorper. Phasellus tempus lacus sed purus accumsan, maximus placerat nibh viverra. Morbi tincidunt efficitur sodales. Duis eu metus non felis iaculis ultricies a eu quam.\r\n\r\nVestibulum sed elementum leo. Nullam quis interdum ipsum. Quisque elit ligula, finibus ut risus ac, luctus euismod nibh. Fusce hendrerit commodo luctus. Phasellus sollicitudin tortor sed diam congue commodo. Integer tempor est lobortis odio convallis, consequat condimentum sem ornare. Ut ante dui, elementum eget ultricies sit amet, tempor ac ipsum. Nunc blandit ultricies porta. Duis velit leo, placerat sed dictum non, rhoncus sed lacus. Proin non ornare urna. Nulla blandit justo sed placerat dignissim. Donec venenatis elementum justo ut sodales. Sed convallis magna maximus convallis rhoncus. Praesent pharetra, eros sed venenatis porttitor, velit mauris maximus eros, nec feugiat tellus sapien ultricies ex. Suspendisse volutpat rhoncus lorem, eu facilisis enim commodo tincidunt.\r\n\r\nDuis volutpat sagittis purus, id tincidunt felis tempor sed. Duis blandit metus turpis, eu sagittis nisl hendrerit vel. Duis a lorem vulputate, suscipit nisi rhoncus, volutpat libero. Vivamus sagittis rhoncus dui, in dignissim eros cursus in. Praesent facilisis justo eget justo tristique, in efficitur mauris ullamcorper. Ut iaculis venenatis blandit. Nullam placerat ipsum id nisi consectetur feugiat. Nullam imperdiet lorem et pretium elementum. Nullam luctus malesuada consectetur. Curabitur vel ipsum sit amet justo suscipit efficitur.\r\n\r\nProin lectus nunc, lobortis a ipsum id, condimentum sodales massa. Quisque sollicitudin turpis malesuada, ornare sapien nec, lobortis massa. Etiam molestie lacus id orci euismod, id ultrices massa hendrerit. Etiam tristique accumsan sem non mollis. Vestibulum velit diam, elementum non felis ac, blandit pretium nulla. Sed scelerisque metus vitae tempor tincidunt. Integer nec odio vitae mauris ultrices lobortis. Nam placerat molestie dapibus. Sed ultricies justo purus, ut aliquam nulla tincidunt nec. Donec accumsan erat sed elit laoreet vulputate. Fusce a dignissim quam. Phasellus molestie purus nec ligula suscipit viverra. Praesent sit amet arcu aliquet, iaculis lacus varius, sodales risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In a suscipit ligula, non malesuada quam. Praesent volutpat lorem eget diam congue varius. ',	'judul-artikel-2',	'2',	'2017-09-17',	'me.yogaesa@gmail.com',	'88'),
(3,	'Judul Artikel 3',	'&lt;img src=&quot;https://neurocrescimento.files.wordpress.com/2013/05/atalhos_curiosidade_caminho.jpg&quot;&gt;\r\n\r\n Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec malesuada, dui sit amet dignissim placerat, justo nisl placerat orci, ut laoreet lacus tellus eu lacus. Proin eu consequat quam. Maecenas vulputate rhoncus magna sed volutpat. Proin ipsum erat, commodo a tellus a, fermentum consectetur lacus. Curabitur vehicula elit quis ex maximus mattis. Duis tristique sapien et lectus mattis auctor. Cras nec interdum nunc, quis elementum quam. Aliquam viverra tempus ullamcorper. Phasellus tempus lacus sed purus accumsan, maximus placerat nibh viverra. Morbi tincidunt efficitur sodales. Duis eu metus non felis iaculis ultricies a eu quam.\r\n\r\nVestibulum sed elementum leo. Nullam quis interdum ipsum. Quisque elit ligula, finibus ut risus ac, luctus euismod nibh. Fusce hendrerit commodo luctus. Phasellus sollicitudin tortor sed diam congue commodo. Integer tempor est lobortis odio convallis, consequat condimentum sem ornare. Ut ante dui, elementum eget ultricies sit amet, tempor ac ipsum. Nunc blandit ultricies porta. Duis velit leo, placerat sed dictum non, rhoncus sed lacus. Proin non ornare urna. Nulla blandit justo sed placerat dignissim. Donec venenatis elementum justo ut sodales. Sed convallis magna maximus convallis rhoncus. Praesent pharetra, eros sed venenatis porttitor, velit mauris maximus eros, nec feugiat tellus sapien ultricies ex. Suspendisse volutpat rhoncus lorem, eu facilisis enim commodo tincidunt.\r\n\r\nDuis volutpat sagittis purus, id tincidunt felis tempor sed. Duis blandit metus turpis, eu sagittis nisl hendrerit vel. Duis a lorem vulputate, suscipit nisi rhoncus, volutpat libero. Vivamus sagittis rhoncus dui, in dignissim eros cursus in. Praesent facilisis justo eget justo tristique, in efficitur mauris ullamcorper. Ut iaculis venenatis blandit. Nullam placerat ipsum id nisi consectetur feugiat. Nullam imperdiet lorem et pretium elementum. Nullam luctus malesuada consectetur. Curabitur vel ipsum sit amet justo suscipit efficitur.\r\n\r\nProin lectus nunc, lobortis a ipsum id, condimentum sodales massa. Quisque sollicitudin turpis malesuada, ornare sapien nec, lobortis massa. Etiam molestie lacus id orci euismod, id ultrices massa hendrerit. Etiam tristique accumsan sem non mollis. Vestibulum velit diam, elementum non felis ac, blandit pretium nulla. Sed scelerisque metus vitae tempor tincidunt. Integer nec odio vitae mauris ultrices lobortis. Nam placerat molestie dapibus. Sed ultricies justo purus, ut aliquam nulla tincidunt nec. Donec accumsan erat sed elit laoreet vulputate. Fusce a dignissim quam. Phasellus molestie purus nec ligula suscipit viverra. Praesent sit amet arcu aliquet, iaculis lacus varius, sodales risus. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In a suscipit ligula, non malesuada quam. Praesent volutpat lorem eget diam congue varius. ',	'judul-artikel-3',	'2',	'2017-06-05',	'me.yogaesa@gmail.com',	'20'),
(4,	'IOT applications and Firebase Simple Using Google Cloud Platform',	'Seeing+the+current+pace+of+technological+development+is+very+rapid%2C+demanding+technology+enthusiasts+also+vying+to+follow+the+existing+technology.+What+are+the+wishful+thinking+a+few+years+ago+and+is+considered+unlikely+to+materialize+may+become+a+reality+today+or+the+next+few+months.+Similarly%2C+today%27s+Internet+technology%2C+where+the+first+time+the+technology+is+present+through+the+Personal+Computer+and+feels+quite+expensive+to+enjoy+sophistication.+Now+the+Internet+can+be+enjoyed+by+all+people+from+children+to+adults.+You+could+say+the+need+for+the+internet+in+the+past+has+now+become+a+very+important+requirement.+Can+be+proved+by+most+of+us+already+can+not+be+separated+from+Internet+services+such+as+Facebook%2C+Whatsapp%2C+Instagram%2C+as+well+as+the+various+services+provided+by+Google.+One+contributing+factor+to+this+is+the+low+cost+internet+connection+provided+by+providers+intenet%2C+so+do+not+rule+out+future+every+tool+that+we+have+will+also+be+connected+to+the+internet.%0D%0A%0D%0AIncreasingly+cheap+and+easy+internet+access+make+the+technology+more+widely+used.+It+became+an+idea+that+became+the+basis+of+the+emergence+of+the+term+Internet+of+Things%2C+where+an+internet+connection+is+not+only+used+by+humans%2C+but+is+also+used+by+the+tools+that+exist+around+us.+One+system+can+we+develop+the+concept+of+IOT+is+a+smart+home%2C+where+all+the+objects+and+conditions+of+our+homes+can+be+monitored+in+real+time+whether+we+are+inside+or+outside+the+home.+We+as+homeowners+can+easily+control+the+lighting+outside+or+inside+the+house%2C+opening+or+closing+the+blinds%2C+room+temperature+room+know+just+by+using+the+smartphone.%0D%0A%0D%0AWe+will+try+to+create+a+tool+that+can+be+applied+in+a+small+scope+SmartHome+concept.+This+tool+will+provide+a+facial+image+to+homeowners+via+smartphones+shortly+after+pressing+a+doorbell.+Every+person+who+rang+the+doorbell+of+the+house%2C+automatically+drawing+the+face+to+be+caught+by+the+camera+and+sent+to+the+homeowner+via+his+smartphone.+Homeowners+will+open+the+door+if+deemed+recognize+a+face+appearing+in+smartphones.+Indirectly%2C+this+application+can+avoid+unknown+guest+by+homeowners+so+that+the+crime+rate+can+be+minimized.%0D%0A%0D%0A%0D%0A%0D%0AThis+application+uses+the+Raspberry+Pi+3+as+the+primary+controller+containing+Things+img+Android+as+the+operating+system+%28in-depth+explanation+contained+in+the+link+https%3A%2F%2Fdeveloper.android.com+%29.+Because+this+tool+involves+two+devices+that+Raspberry+Pi+3+as+a+controller+and+Android+smartphones+as+a+user+interface%2C+and+therefore+you+need+software+that+can+be+used+to+build+the+system+on+both.+Things+Android+is+an+IDE+%28Integrated+Development+Environment%29+that+is+used+to+build+Android+applications+as+well+as+its+features+fully+compatible+with+Android+img+Things.%0D%0A%0D%0AAs+illustrated+in+the+block+diagram+above%2C+when+the+switch+%2F+doorbell+is+pressed%2C+the+camera+takes+an+image+captured+by+the+camera+immediately+after+pressing+the+button.+The+images+produced+by+the+camera+are+sent+by+the+Raspberry+Pi+to+a+cloud+storage+service+called+Firebase+and+forwarded+to+a+Cloud+service+called+Google+Cloud+Platform+Processing.+Google+Cloud+Platform+Service+is+what+will+inform+the+user+to+the+image+patterns+without+the+need+to+add+another+mobile+analytics+separately.+All+the+results+of+the+analysis+of+the+Google+Cloud+Platform+will+be+returned+to+Firebase+to+be+recorded+and+notified+to+the+user+via+the+Android+smartphone+app.+Devices+that+are+required+in+this+application+include+the+Raspberry+Pi+3%2C+micro+SD+8+GB%2C+Raspberry+Pi+camera+module%2C+and+as+a+doorbell+push+button+as+shown+in+the+figure+below.%0D%0A%0D%0A%0D%0A%0D%0AIf+all+these+components+are+assembled%2C+less+will+be+as+shown+below.%0D%0A%0D%0A%0D%0A%0D%0AWhile+the+app+on+the+Android+smartphone+display+as+shown+below.%0D%0A%0D%0A%0D%0A%0D%0ADoes+not+rule+out+the+possibility+in+the+future%2C+we+can+add+features+to+store+the+image+pattern+of+family+members+and+the+door+will+automatically+open+whenever+recognizable+image+capture.+Tutorial+to+create+Smart+Doorbell+application+can+be+followed+on+the+link+https%3A%2F%2Fdeveloper.android.com%2Fthings%2Fsdk%2Fsamples.html+.',	'IOT-applications-and-Firebase',	'1',	'2017-09-18',	'vulnwalker@elderscode.org',	'0');

DROP TABLE IF EXISTS `diskon_ongkir`;
CREATE TABLE `diskon_ongkir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tanggal_mulai` text NOT NULL,
  `tanggal_selesai` text NOT NULL,
  `jasa_pengiriman` text NOT NULL,
  `grup` text NOT NULL,
  `type` text NOT NULL,
  `jumlah` text NOT NULL,
  `produk` text NOT NULL COMMENT '1;2;3 atau all',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `diskon_ongkir` (`id`, `tanggal_mulai`, `tanggal_selesai`, `jasa_pengiriman`, `grup`, `type`, `jumlah`, `produk`) VALUES
(1,	'2017-09-18',	'2017-09-25',	'1',	'2',	'persen',	'10',	''),
(2,	'2017-09-18',	'2017-09-25',	'1',	'0',	'harga',	'10000',	'');

DROP TABLE IF EXISTS `grup`;
CREATE TABLE `grup` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_grup` text NOT NULL,
  `type` text NOT NULL,
  `akses` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `grup` (`id`, `nama_grup`, `type`, `akses`) VALUES
(1,	'ADMIN',	'user',	'1;2;3;4;5;6'),
(2,	'PELANGGAN REGION BANDUNG',	'member',	'');

DROP TABLE IF EXISTS `jasa_pengiriman`;
CREATE TABLE `jasa_pengiriman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `jasa_pengiriman` (`id`, `nama`) VALUES
(1,	'JNE'),
(2,	'POS INDONESIA'),
(3,	'TIKI'),
(4,	'DHL');

DROP TABLE IF EXISTS `kategori`;
CREATE TABLE `kategori` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_kategori` text NOT NULL,
  `deskripsi` text NOT NULL,
  `type` text NOT NULL COMMENT 'artikel / produk',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `kategori` (`id`, `nama_kategori`, `deskripsi`, `type`) VALUES
(1,	'Review',	'Review',	'artikel'),
(2,	'kategori 2',	'tentang blablabla',	'artikel'),
(3,	'kategori 3',	'tentang blablablalba',	'artikel'),
(4,	'RASPBERRY',	'-',	'barang');

DROP TABLE IF EXISTS `member`;
CREATE TABLE `member` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `grup` text NOT NULL,
  `status` text NOT NULL,
  `wish_list` text NOT NULL COMMENT '1;2;3',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `member` (`id`, `email`, `password`, `grup`, `status`, `wish_list`) VALUES
(1,	'buyer@getnada.com',	'123456',	'2',	'1',	''),
(2,	'non.region@getnada.com',	'123456',	'0',	'1',	'');

DROP TABLE IF EXISTS `produk`;
CREATE TABLE `produk` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kategori` text NOT NULL,
  `nama_produk` text NOT NULL,
  `harga` text NOT NULL,
  `berat` text NOT NULL COMMENT 'satuan kilo untuk ongkir',
  `deskripsi` text NOT NULL,
  `total_penjualan` text NOT NULL,
  `gambar` text NOT NULL COMMENT '{"no":"1","url":"/images/produk/23129.jpg","no":"2","url":"/images/produk/23139.jpg"}',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `produk` (`id`, `kategori`, `nama_produk`, `harga`, `berat`, `deskripsi`, `total_penjualan`, `gambar`) VALUES
(1,	'4',	'Raspberry Pi 3 Model B (UK Board)',	'545000',	'1',	'Raspberry Pi 3 Model B merupakan pengembangan dari board Raspberry Pi versi sebelumnya. Raspberry Pi 3 model B ini hadir dengan prosesor baru yang jauh lebih cepat dari versi pendahulunya. Selain itu produk ini juga dilengkapi Wifi dan Bluetooth Low Energy yang berfungsi sebagai media pertukaran data secara nirkabel.\r\n\r\n\r\nSpesifikasi : \r\n- Prosesor : Broadcom BCM2837 Quad Core 1.2 GHz 64-Bit\r\n- Arsitektur : ARM\r\n- Sub-Arsitektur : ARMv8\r\n- RAM : 1 GB\r\n- Jaringan Wireless : Wifi dan Bluetooth Low Energy\r\n- Ethernet : 10/100 Mbps\r\n- GPIO : 40 pin\r\n- USB : 4x USB 2.0 port\r\n- 4 Pole stereo output and composite video port\r\n- HDMI port (full size)\r\n- Port CSI kamera untuk terhubung ke Raspberry Pi camera\r\n- Port DSI display untuk terhubung ke layar sentuh Raspberry Pi \r\n- Slot Micro SD untuk memuat sistem operasi dan menyimpan data',	'0',	'{\"no\":\"1\",\"url\":\"/images/produk/raspberry1.jpg\",\"no\":\"2\",\"url\":\"/images/produk/raspberry2.jpg\"}');

DROP TABLE IF EXISTS `session_cart`;
CREATE TABLE `session_cart` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `session_id` text NOT NULL,
  `tanggal` text NOT NULL,
  `produk` text NOT NULL,
  `lokasi` text NOT NULL,
  `jumlah_barang` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `stok`;
CREATE TABLE `stok` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `produk` text NOT NULL COMMENT 'id_produk',
  `lokasi` text NOT NULL COMMENT 'id_prov.id_kota',
  `jumlah` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `stok` (`id`, `produk`, `lokasi`, `jumlah`) VALUES
(1,	'1',	'32.3273',	'50');

DROP TABLE IF EXISTS `tarif_jasa_ongkir`;
CREATE TABLE `tarif_jasa_ongkir` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `jasa_pengiriman` text NOT NULL COMMENT 'id jasa pengiriman ',
  `dari` text NOT NULL COMMENT 'provinsi.kota.kecamatan',
  `kota` text NOT NULL COMMENT 'provinsi.kota.kecamatan',
  `tarif` text NOT NULL COMMENT 'per kilo',
  `tanggal_update` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `tarif_jasa_ongkir` (`id`, `jasa_pengiriman`, `dari`, `kota`, `tarif`, `tanggal_update`) VALUES
(1,	'1',	'32.3277.3277030',	'32.3277.3277030',	'20000',	'2017-09-18');

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` text NOT NULL,
  `password` text NOT NULL,
  `nama` text NOT NULL,
  `grup` text NOT NULL,
  `status` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `user` (`id`, `email`, `password`, `nama`, `grup`, `status`) VALUES
(1,	'vulnwalker@elderscode.org',	'rf09thebye',	'VulnWalker',	'1',	'1'),
(2,	'me.yogaesa@gmail.com',	'andromeda',	'Yogas Esa Mahendra',	'1',	'1');

-- 2017-09-21 13:47:10

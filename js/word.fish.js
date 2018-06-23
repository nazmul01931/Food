		function populate(s1,s2){
			var s1 = document.getElementById(s1);
			var s2 = document.getElementById(s2);
			
			s2.innerHTML =""; 
			if(s1.value == "Bagerhat"){
				var optionarray=["|Select One","Bagerhat Sadar|Bagerhat Sadar","Chitalmari|Chitalmari","Fakirhat|Fakirhat","Kachua|Kachua","Mollahat|Mollahat","Mongla|Mongla","Morrelganj|Morrelganj","Rampal|Rampal","Sarankhola|Sarankhola"];
			}

			else if(s1.value == "Chuadanga"){
				var optionarray=["|Select One",
				"Alamdanga|Alamdanga",
				"Chuadanga Sadar|Chuadanga Sadar",
				"Damurhuda|Damurhuda",
				"Jiban Nagar|Jiban Nagar"];
			}

			else if(s1.value == "Jessore"){
				var optionarray=["|Select One",
				"Abhaynagar|Abhaynagar",
				"Bagher Para|Bagher Para",
				"Chaugachha|Chaugachha",
				"Jhikargachha|Jhikargachha",
				"Keshabpur|Keshabpur",
				"Jessore Sadar|Jessore Sadar",
				"Manirampur|Manirampur",
				"Sharsha|Sharsha"];
			}
			
			else if(s1.value == "Jhenaidah"){
				var optionarray=["|Select One",
				"Harinakunda|Harinakunda",
				"Jhenaidah Sadar|Jhenaidah Sadar",
				"Kaliganj|Kaliganj",
				"Kotchandpur|Kotchandpur",
				"Maheshpur|Maheshpur",
				"Shailkupa|Shailkupa"];
			}
			
			else if(s1.value == "Khulna"){
				var optionarray=["|Select One",
				"Batiaghata|Batiaghata",
				"Dacope|Dacope",
				"Daulatpur|Daulatpur",
				"Dumuria|Dumuria",
				"Dighalia|Dighalia",
				"Khalishpur|Khalishpur",
				"Khan Jahan Ali|Khan Jahan Ali",
				"Khulna Sadar|Khulna Sadar",
				"Koyra|Koyra",
				"Paikgachha|Paikgachha",
				"Phultala|Phultala",
				"Rupsa|Rupsa",
				"Sonadanga|Sonadanga",
				"Terokhada|Terokhada"
				];
			}
			
			else if(s1.value == "Kushtia"){
				var optionarray=["|Select One",
				"Bheramara|Bheramara",
				"Daulatpur|Daulatpur",
				"Khoksa|Khoksa",
				"Kumarkhali|Kumarkhali",
				"Kushtia Sadar|Kushtia Sadar",
				"Mirpur|Mirpur"
				];
			}
			
			else if(s1.value == "Magura"){
				var optionarray=["|Select One",
				"Magura Sadar|Magura Sadar",
				"Mohammadpur|Mohammadpur",
				"Shalikha|Shalikha",
				"Sreepur|Sreepur"
				];
			}
			
			else if(s1.value == "Meherpur"){
				var optionarray=["|Select One",
				"Gangni|Gangni",
				"Mujib Nagar|Mujib Nagar",
				"Meherpur Sadar|Meherpur Sadar"
				];
			}
			
			else if(s1.value == "Narail"){
				var optionarray=["|Select One",
				"Kalia|Kalia",
				"Lohagara|Lohagara",
				"Narail Sadar|Narail Sadar"
				];
			}
			
			else if(s1.value == "Satkhira"){
				var optionarray=["|Select One",
				"Assasuni|Assasuni",
				"Debhata|Debhata",
				"Kalaroa|Kalaroa",
				"Kaliganj|Kaliganj",
				"Satkhira Sadar|Satkhira Sadar",
				"Shyamnagar|Shyamnagar",
				"Tala|Tala"
				];
			}
			
			else if(s1.value == "Barguna"){
				var optionarray=["|Select One",
				"Amtali|Amtali",
				"Bamna|Bamna",
				"Barguna Sadar|Barguna Sadar",
				"Betagi|Betagi",
				"Patharghata|Patharghata",
				"Taltali|Taltali"
				];
							}
			
			else if(s1.value == "Barisal"){
				var optionarray=["|Select One",
				"Agailjhara|Agailjhara",
				"Babuganj|Babuganj",
				"Bakerganj|Bakerganj",
				"Banari Para|Banari Para",
				"Gaurnadi|Gaurnadi",
				"Hizla|Hizla",
				"Barisal Sadar (Kotwali)|Barisal Sadar (Kotwali)",
				"Mehendiganj|Mehendiganj",
				"Muladi|Muladi",
				"Wazirpur|Wazirpur"
				];
			}

			else if(s1.value == "Bhola"){
				var optionarray=["|Select One",
				"Bhola Sadar|Bhola Sadar",
				"Burhanuddin|Burhanuddin",
				"Char Fasson|Char Fasson",
				"Daulatkhan|Daulatkhan",
				"Lalmohan|Lalmohan",
				"Manpura|Manpura",
				"Tazumuddin|Tazumuddin"
				];
			}
			
			else if(s1.value == "Jhalokati"){
				var optionarray=["|Select One",
				"Jhalokati Sadar|Jhalokati Sadar",
				"Kanthalia|Kanthalia",
				"Nalchity|Nalchity",
				"Rajapur|Rajapur"
				];
			}
			
            else if(s1.value == "Patuakhali"){
				var optionarray=["|Select One",
				"Bauphal|Bauphal",
				"Dashmina|Dashmina",
				"Dumki|Dumki",
				"Galachipa|Galachipa",
				"Kala Para|Kala Para",
				"Mirzaganj|Mirzaganj",
				"Patuakhali Sadar|Patuakhali Sadar",
				"Rangabali|Rangabali"
				];
			}
			
            else if(s1.value == "Pirojpur"){
				var optionarray=["|Select One",
				"Bhandaria|Bhandaria",
				"Kawkhali|Kawkhali",
				"Mathbaria|Mathbaria",
				"Nazirpur|Nazirpur",
				"Pirojpur Sadar|Pirojpur Sadar",
				"Nesarabad (Swarupkati)|Nesarabad (Swarupkati)",
				"Zianagar|Zianagar"
				];
			}
			
            else if(s1.value == "Faridpur"){
				var optionarray=["|Select One",
				"Alfadanga|Alfadanga",
				"Bhanga|Bhanga",
				"Boalmari|Boalmari",
				"Char Bhadrasan|Char Bhadrasan",
				"Faridpur Sadar|Faridpur Sadar",
				"Madhukhali|Madhukhali",
				"Nagarkanda|Nagarkanda",
				"Sadarpur|Sadarpur",
				"Saltha|Saltha"
				];
			}
			
            else if(s1.value == "Gopalganj"){
				var optionarray=["|Select One",
				"Gopalganj Sadar|Gopalganj Sadar",
				"Kashiani|Kashiani",
				"Kotali Para|Kotali Para",
				"Muksudpur|Muksudpur",
				"Tungi Para|Tungi Para"
				];
			}
			
            else if(s1.value == "Madaripur"){
				var optionarray=["|Select One",
				"Kalkini|Kalkini",
				"Madaripur Sadar|Madaripur Sadar",
				"Rajoir|Rajoir",
				"Shib Char|Shib Char"
				];
			}
			
            else if(s1.value == "Rajbari"){
				var optionarray=["|Select One",
				"Baliakandi|Baliakandi",
				"Goalandaghat|Goalandaghat",
				"Kalukhali|Kalukhali",
				"Pangsha|Pangsha",
				"Rajbari Sadar|Rajbari Sadar"
				];
			}
			
            else if(s1.value == "Shariatpur"){
				var optionarray=["|Select One",
				"Bhedarganj|Bhedarganj",
				"Damudya|Damudya",
				"Gosairhat|Gosairhat",
				"Naria|Naria",
				"Shariatpur Sadar|Shariatpur Sadar",
				"Zanjira|Zanjira"
				];
			}
			
            else if(s1.value == "Cox'S Bazar"){
				var optionarray=["|Select One",
				"Chakaria|Chakaria",
				"Cox'S Bazar Sadar|Cox'S Bazar Sadar",
				"Kutubdia|Kutubdia",
				"Maheshkhali|Maheshkhali",
				"Pekua|Pekua",
				"Ramu|Ramu",
				"Teknaf|Teknaf",
				"Ukhia|Ukhia"
				];
			} 
			/* Exit of all zilla inform */
			
            
			
			for(var option in optionarray){
				var pair = optionarray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value = pair[0];
				newoption.innerHTML = pair[1];
				s2.options.add(newoption);
			}
		}
		function popular(s3,s4){
			var s3 = document.getElementById(s3);
			var s4 = document.getElementById(s4);
			
			s4.innerHTML ="";
			if(s3.value == "Bagerhat Sadar"){
				var optionarray=["|Select One","Barai Para|Barai Para","Bemarta|Bemarta","Bishnupur|Bishnupur","Dema|Dema","Gota Para|Gota Para","Jatrapur|Jatrapur","Kara Para|Kara Para","Khanpur|Khanpur","Rakhalgachhi|Rakhalgachhi","Shat Gambuj|Shat Gambuj","Paurashava|Paurashava"];
			}else if(s3.value == "Chitalmari"){
				var optionarray=["|Select One","Char Baniari|Char Baniari","Bara Baria|Bara Baria","Chitalmari|Chitalmari","Hizla|Hizla","Santoshpur|Santoshpur","Kalatala|Kalatala","Shibpur|Shibpur"];
			}
			
			else if(s3.value == "Fakirhat"){
				var optionarray=["|Select One","Bahirdia Mansa|Bahirdia Mansa","Betaga|Betaga","Fakirhat|Fakirhat","Lakhpur|Lakhpur","Mulghar|Mulghar","Naldha Maubhog|Naldha Maubhog","Piljanga|Piljanga","Subhadia|Subhadia"];
			}
			
			else if(s3.value == "Kachua"){
				var optionarray=["|Select One","Badhal|Badhal","Dhopakhali|Dhopakhali","Gazalia|Gazalia","Gopalpur|Gopalpur","Kachua|Kachua","Maghia|Maghia","Rari Para|Rari Para"];
			}
			
			else if(s3.value=="Mollahat"){
				var optionarray=["|Select One","Atjuri|Atjuri","Chunkhola|Chunkhola","Gangni|Gangni","Gaola|Gaola","Kodalia|Kodalia","Kulia|Kulia","Udaypur|Udaypur"];
			}
			
			else if(s3.value=="Mongla"){
				var optionarray=["|Select One","Chandpi|Chandpi","Burirdanga|Burirdanga","Chila|Chila","Mithakhali|Mithakhali","Suniltala|Suniltala","Sundarban|Sundarban","Chandpai Range|Chandpai Range","Paurashava|Paurashava"];
			}
			
			else if(s3.value=="Morrelganj"){
			var optionarray=["|Select One","Baharbunia|Baharbunia","Balaibunia|Balaibunia","Banagram|Banagram","Baraikhali|Baraikhali","Chingrakhali|Chingrakhali","Daibagnyahati|Daibagnyahati","Hoglabunia|Hoglabunia","Hogla Pasha|Hogla Pasha","Jiudhara|Jiudhara","Khuolia|Khuolia","Morrelganj|Morrelganj","Nishanbaria|Nishanbaria","Panchakaran|Panchakaran","Putikhali|Putikhali","Ramchandrapur|Ramchandrapur","Teligati|Teligati","Paurashava|Paurashava"];
			}
			
			else if(s3.value=="Rampal"){
				var optionarray=["|Select One","Baintala|Baintala","Banshtali|Banshtali","Bhojpatia|Bhojpatia","Gaurambha|Gaurambha","Hurka|Hurka","Malliker Ber|Malliker Ber","Perikhali|Perikhali","Rajnagar|Rajnagar","Rampal|Rampal","Ujalkur|Ujalkur"];
			}
			
			else if(s3.value=="Sarankhola"){
				var optionarray=["|Select One","Dhansagar|Dhansagar","Khontakata|Khontakata","Royenda|Royenda","Dakshin Khali|Dakshin Khali","Sharankhola Range|Sharankhola Range"];
			}
			
			else if(s3.value=="Alamdanga"){
				var optionarray=["|Select One","Baradi|Baradi","Bhangabaria|Bhangabaria","Chithla|Chithla","Dauki|Dauki","Gangni|Gangni","Hardi|Hardi","Kalidashpur|Kalidashpur","Jamjami|Jamjami","Jehala|Jehala","Khadimpur|Khadimpur","Khaskara|Khaskara","Kumari|Kumari","Nagdaha|Nagdaha","Alamdanga Paurashava|Alamdanga Paurashava"];
			}
				
			else if(s3.value=="Chuadanga Sadar"){
				var optionarray=["|Select One",
				"Alokdia|Alokdia",
				"Begampur|Begampur",
				"Kutubpur|Kutubpur",
				"Mominpur|Mominpur",
				"Padmabila|Padmabila",
				"Shankar Chandra|Shankar Chandra",
				"Titudaha|Titudaha",
				"Chuadanga Paurashava|Chuadanga Paurashava"
				];
			}
			
			
			else if(s3.value=="Damurhuda"){
				var optionarray=["|Select One",
				"Damurhuda|Damurhuda",
				"Perkrishnapur Madna|Perkrishnapur Madna",
				"Howli|Howli",
				"Juranpur|Juranpur",
				"Kapasadanga|Kapasadanga",
				"Kuralgachhi|Kuralgachhi",
				"Natipota|Natipota",
				"Darshana Paurashava|Darshana Paurashava"
				];
			}

			else if(s3.value=="Jiban Nagar"){
				var optionarray=["|Select One",
				"Andulbaria|Andulbaria",
				"Banka|Banka",
				"Simanta|Simanta",
				"Uthali|Uthali",
				"Jiban Nagar Paurashava|Jiban Nagar Paurashava"
				];
			}
			
			/*Jessore Start*/

			else if(s3.value=="Abhaynagar"){
				var optionarray=["|Select One",
				"Baghutia|Baghutia",
				"Prambag|Prambag",
				"Sundoli|Sundoli",
				"Payra|Payra",
				"Chalishia|Chalishia",
				"Siddhipasha|Siddhipasha",
				"Sreedharpur|Sreedharpur",
				"Subha Para|Subha Para",
				"Paurashava|Paurashava"];
			}

			else if(s3.value=="Bagher Para"){
				var optionarray=["|Select One",
				"Basuari|Basuari",
				"Bandabilla|Bandabilla",
				"Darajhat|Darajhat",
				"Dhalgram|Dhalgram",
				"Dohakula|Dohakula",
				"Jamdia|Jamdia",
				"Jaharpur|Jaharpur",
				"Narikelbaria|Narikelbaria",
				"Roypur|Roypur",
				"Paurashava|Paurashava"];
			}

			else if(s3.value=="Chaugachha"){
				var optionarray=["|Select One",
				"Chaugachha|Chaugachha",
				"Dhuliani|Dhuliani",
				"Hakimpur|Hakimpur",
				"Jagadishpur|Jagadishpur",
				"Swarupdaha|Swarupdaha",
				"Narayanpur|Narayanpur",
				"Pashapole|Pashapole",
				"Patibila|Patibila",
				"Phulsara|Phulsara",
				"Singhajhuli|Singhajhuli",
				"Sukpukhuria|Sukpukhuria",
				"Paurashava|Paurashava"
				];
			}

			else if(s3.value=="Jhikargachha"){
				var optionarray=["|Select One",
				"Bankra|Bankra",
				"Ganganandapur|Ganganandapur",
				"Gadkhali|Gadkhali",
				"Hajirbagh|Hajirbagh",
				"Jhikargachha|Jhikargachha",
				"Magura|Magura",
				"Nabharan|Nabharan",
				"Nibaskhola|Nibaskhola",
				"Panisara|Panisara",
				"Shankarpur|Shankarpur",
				"Shimulia|Shimulia",
				"Paurashava|Paurashava"];
			}

			else if(s3.value=="Keshabpur"){
				var optionarray=["|Select One",
				"Bidyanandakati|Bidyanandakati",
				"Gaurighona|Gaurighona",
				"Keshabpur|Keshabpur",
				"Majidpur|Majidpur",
				"Mangalkot|Mangalkot",
				"Panjia|Panjia",
				"Sagardari|Sagardari",
				"Sufalakati|Sufalakati",
				"Trimohini|Trimohini",
				"Paurashava|Paurashava"];
			}

			else if(s3.value=="Jessore Sadar"){
				var optionarray=["|Select One",
				"Arabpur|Arabpur",
				"Basundia|Basundia",
				"Chanchra|Chanchra",
				"Churamankati|Churamankati",
				"Diara|Diara",
				"Fathehpur|Fathehpur",
				"Haibatpur|Haibatpur",
				"Ichhali|Ichhali",
				"Kashimpur|Kashimpur",
				"Kachua|Kachua",
				"Lebutala|Lebutala",
				"Narendrapur|Narendrapur",
				"Noapara|Noapara",
				"Ramnagar|Ramnagar",
				"Upasahar|Upasahar",
				"Paurashava|Paurashava",];
			}

			else if(s3.value=="Manirampur"){
				var optionarray=["|Select One",
				"Bhojgati|Bhojgati",
				"Chaluahati|Chaluahati",
				"Dhakuria|Dhakuria",
				"Durbadanga|Durbadanga",
				"Haridaskati|Haridaskati",
				"Hariharnagar|Hariharnagar",
				"Jhanpa|Jhanpa",
				"Kashimnagar|Kashimnagar",
				"Khanpur|Khanpur",
				"Kheda Para|Kheda Para",
				"Kultia|Kultia",
				"Manirampur|Manirampur",
				"Manoharpur|Manoharpur",
				"Maswimnagar|Maswimnagar",
				"Nehalpur|Nehalpur",
				"Rohita|Rohita",
				"Shyamkur|Shyamkur",
				"Paurashava|Paurashava"];
			}

			else if(s3.value=="Sharsha"){
				var optionarray=["|Select One",
				"Bagachra|Bagachra",
				"Bahadurpur|Bahadurpur",
				"Benapole|Benapole",
				"Dihi|Dihi",
				"Goga|Goga",
				"Kayba|Kayba",
				"Lakshmanpur|Lakshmanpur",
				"Nizampur|Nizampur",
				"Putkhali|Putkhali",
				"Sharsha|Sharsha",
				"Ulashi|Ulashi",
				"Paurashava|Paurashava"];
			}
			
			/*Jhenaidah*/	
			else if(s3.value=="Harinakunda"){
				var optionarray=["|Select One",
				"Bhayna|Bhayna",
				"Chandpur|Chandpur",
				"Daulatpur|Daulatpur",
				"Palsi|Palsi",
				"Joradaha|Joradaha",
				"Kapashati|Kapashati",
				"Raghunathpur|Raghunathpur",
				"Taherhuda|Taherhuda",
				"Paurashava|Paurashava"];
			}

			else if(s3.value=="Jhenaidah Sadar"){
				var optionarray=["|Select One",
				"Dogachhi|Dogachhi",
				"Fursandi|Fursandi",
				"Ganna|Ganna",
				"Ghorshal|Ghorshal",
				"Halidhani|Halidhani",
				"Harishankarpur|Harishankarpur",
				"Kalicharanpur|Kalicharanpur",
				"Kumrabaria|Kumrabaria",
				"Madhuhati|Madhuhati",
				"Moharajpur|Moharajpur",
				"Naldanga|Naldanga",
				"Padmakar|Padmakar",
				"Paglakanai|Paglakanai",
				"Porahati|Porahati",
				"Saganna|Saganna",
				"Sadhuhati|Sadhuhati",
				"Surat|Surat",
				"Paurashava|Paurashava"
				];
			}

			else if(s3.value=="Kaliganj"){
				var optionarray=["|Select One",
				"Bara Bazar|Bara Bazar",
				"Jamal|Jamal",
				"Sundarpur Durgapur|Sundarpur Durgapur",
				"Kashtabhanga|Kashtabhanga",
				"Kola|Kola",
				"Maliat|Maliat",
				"Niamatpur|Niamatpur",
				"Roygram|Roygram",
				"Rakhalgachhi|Rakhalgachhi",
				"Simla Rokonpur|Simla Rokonpur",
				"Trilochanpur|Trilochanpur",
				"Paurashava|Paurashava"
				];
			}

			else if(s3.value=="Kotchandpur"){
				var optionarray=["|Select One",
				"Baluhar|Baluhar",
				"Dora|Dora",
				"Elangi|Elangi",
				"Kushna|Kushna",
				"Sabdalpur|Sabdalpur",
				"Paurashava|Paurashava"
				];
			}

			else if(s3.value=="Maheshpur"){
				var optionarray=["|Select One",
				"Azampur|Azampur",
				"Banshbaria|Banshbaria",
				"Fatehpur|Fatehpur",
				"Jadabpur|Jadabpur",
				"Kazirber|Kazirber",
				"Manderbari|Manderbari",
				"Natima|Natima",
				"Nepa|Nepa",
				"Pantha Para|Pantha Para",
				"Shyamkur|Shyamkur",
				"S.k.b.(sundarpur)|S.k.b.(sundarpur)",
				"Swaruppur|Swaruppur",
				"Paurashava|Paurashava"
				];
			}

			else if(s3.value=="Shailkupa"){
				var optionarray=["|Select One",
				"Abaipur|Abaipur",
				"Bagura|Bagura",
				"Dhalhara Chandra|Dhalhara Chandra",
				"Dignagar|Dignagar",
				"Dudhsar|Dudhsar",
				"Manoharpur|Manoharpur",
				"Fulhari|Fulhari",
				"Hakimpur|Hakimpur",
				"Kancherkol|Kancherkol",
				"Mirzapur|Mirzapur",
				"Nityanandapur|Nityanandapur",
				"Sarutia|Sarutia",
				"Tribeni|Tribeni",
				"Umedpur|Umedpur",
				"Paurashava|Paurashava"
				]
			}
			
			
			/*Khulna start*/

			else if(s3.value=="Batiaghata"){
				var optionarray=["|Select One",
				"Amirpur|Amirpur",
				"Baliadanga|Baliadanga",
				"Batiaghata|Batiaghata",
				"Bhanderkote|Bhanderkote",
				"Gangarampur|Gangarampur",
				"Jalma|Jalma",
				"Surkhali|Surkhali"
				];
			}

				else if(s3.value=="Dacope"){
				var optionarray=["|Select One",
				"Bajua|Bajua",
				"Banishanta|Banishanta",
				"Laudubi|Laudubi",
				"Dacope|Dacope",
				"Kailasganj|Kailasganj",
				"Kamarkhola|Kamarkhola",
				"Pankhali|Pankhali",
				"Sutarkhali|Sutarkhali",
				"Tildanga|Tildanga",
				"Khulna Range|Khulna Range",
				"Paurashava|Paurashava"
				];
			}

				else if(s3.value=="Daulatpur"){
				var optionarray=["|Select One",
				"Ward No-01|Ward No-01",
				"Ward No-02 (part)|Ward No-02 (part)",
				"Ward No-03|Ward No-03",
				"Ward No-04|Ward No-04",
				"Ward No-05|Ward No-05",
				"Ward No-06|Ward No-06",
				"Aranghata|Aranghata"
				];
			}

				else if(s3.value=="Dumuria"){
				var optionarray=["|Select One",
				"Atlia|Atlia",
				"Bhandar Para|Bhandar Para",
				"Dhamalia|Dhamalia",
				"Dumuria|Dumuria",
				"Gutudia|Gutudia",
				"Kharnia|Kharnia",
				"Magurkhali|Magurkhali",
				"Maguraghona|Maguraghona",
				"Raghunathpur|Raghunathpur",
				"Rangpur|Rangpur",
				"Rudaghara|Rudaghara",
				"Sahas|Sahas",
				"Sarappur|Sarappur",
				"Sobhana|Sobhana"
				];
			}

				else if(s3.value=="Dighalia"){
				var optionarray=["|Select One",
				"Barakpur|Barakpur",
				"Dighalia|Dighalia",
				"Gazir Hat|Gazir Hat",
				"Senhati|Senhati"
				];
			}

				else if(s3.value=="Khalishpur"){
				var optionarray=["|Select One",
				"Ward No-07|Ward No-07",
				"Ward No-08|Ward No-08",
				"Ward No-09|Ward No-09",
				"Ward No-10|Ward No-10",
				"Ward No-11|Ward No-11",
				"Ward No-12|Ward No-12",
				"Ward No-13|Ward No-13",
				"Ward No-14|Ward No-14",
				"Ward No-15|Ward No-15"
				];
			}

				else if(s3.value=="Khan Jahan Ali"){
				var optionarray=["|Select One",
				"Ward No-02 (part)|Ward No-02 (part)",
				"Atra Gilatala|Atra Gilatala",
				"Jugipole|Jugipole"
				];
			}

				else if(s3.value=="Khulna Sadar"){
				var optionarray=["|Select One",
				"Ward No-21|Ward No-21",
				"Ward No-22|Ward No-22",
				"Ward No-23|Ward No-23",
				"Ward No-24|Ward No-24",
				"Ward No-27|Ward No-27",
				"Ward No-28|Ward No-28",
				"Ward No-29|Ward No-29",
				"Ward No-30|Ward No-30",
				"Ward No-31|Ward No-31"
				];
			}

				else if(s3.value=="Koyra"){
				var optionarray=["|Select One",
				"Amadi|Amadi",
				"Bagali|Bagali",
				"Dakshin Bedkashi|Dakshin Bedkashi",
				"Koyra|Koyra",
				"Maharajpur|Maharajpur",
				"Maheshwaripur|Maheshwaripur",
				"Uttar Bedkashi|Uttar Bedkashi",
				"Nalian Range|Nalian Range"
				];
			}

			else if(s3.value=="Paikgachha"){
				var optionarray=["|Select One",
				"Chandkhali|Chandkhali",
				"Deluti|Deluti",
				"Gadaipur|Gadaipur",
				"Garuikhali|Garuikhali",
				"Haridhali|Haridhali",
				"Kapilmuni|Kapilmuni",
				"Laskar|Laskar",
				"Lata|Lata",
				"Raruli|Raruli",
				"Sholadana|Sholadana",
				"Paurashava|Paurashava"
				];
			}

			else if(s3.value=="Phultala"){
				var optionarray=["|Select One",
				"Damodar|Damodar",
				"Jamira|Jamira",
				"Phultala|Phultala"
				];
			}

			else if(s3.value=="Rupsa"){
				var optionarray=["|Select One",
				"Aijganti|Aijganti",
				"Ghatbhogh|Ghatbhogh",
				"Naihati|Naihati",
				"Sreefaltala|Sreefaltala",
				"T. S. Bahirdia|T. S. Bahirdia"
				];
			}

			else if(s3.value=="Sonadanga"){
				var optionarray=["|Select One",
				"Ward No-16|Ward No-16",
				"Ward No-17|Ward No-17",
				"Ward No-18|Ward No-18",
				"Ward No-19|Ward No-19",
				"Ward No-20|Ward No-20",
				"Ward No-25|Ward No-25",
				"Ward No-26|Ward No-26"
				];
			}

			else if(s3.value=="Terokhada"){
				var optionarray=["|Select One",
				"Ajugara|Ajugara",
				"Barasat|Barasat",
				"Madhupur|Madhupur",
				"Sachiadah|Sachiadah",
				"Sagladah|Sagladah",
				"Terokhada|Terokhada"
				];
			}

			
			/*Kushtia START*/	

			else if(s3.value=="Bheramara"){
				var optionarray=["|Select One",
				"Bahadurpur|Bahadurpur",
				"Bahir Char|Bahir Char",
				"Chandgram|Chandgram",
				"Dharampur|Dharampur",
				"Juniadaha|Juniadaha",
				"Mokarimpur|Mokarimpur",
				"Bheramara Paurashava|Bheramara Paurashava"
				];
			}

			else if(s3.value=="Daulatpur"){
				var optionarray=["|Select One",
				"Adabaria|Adabaria",
				"Aria|Aria",
				"Boalia|Boalia",
				"Chilmari|Chilmari",
				"Daulatpur|Daulatpur",
				"Hogalbaria|Hogalbaria",
				"Khalishakundi|Khalishakundi",
				"Maricha|Maricha",
				"Mathurapur|Mathurapur",
				"Pearpur|Pearpur",
				"Philipnagar|Philipnagar",
				"Prayagpur|Prayagpur",
				"Ramkrishnapur|Ramkrishnapur",
				"Refayetpur|Refayetpur"
				];
			}

			else if(s3.value=="Khoksa"){
				var optionarray=["|Select One",
				"Ambaria|Ambaria",
				"Betbaria|Betbaria",
				"Gopagram|Gopagram",
				"Janipur|Janipur",
				"Jayanti Hajra|Jayanti Hajra",
				"Khoksa|Khoksa",
				"Osmanpur|Osmanpur",
				"Samaspur|Samaspur",
				"Shimulia|Shimulia",
				"Khoksa Paurashava|Khoksa Paurashava"
				];
			}

			else if(s3.value=="Kumarkhali"){
				var optionarray=["|Select One",
				"Bagulat|Bagulat",
				"Chandpur|Chandpur",
				"Chapra|Chapra",
				"Jadu Boyra|Jadu Boyra",
				"Jagannathpur|Jagannathpur",
				"Kaya|Kaya",
				"Nandalalpur|Nandalalpur",
				"Panti|Panti",
				"Sadaki|Sadaki",
				"Sadipur|Sadipur",
				"Shelaidaha|Shelaidaha",
				"Kumarkhali Paurashava|Kumarkhali Paurashava"
				];
			}

			else if(s3.value=="Kushtia Sadar"){
				var optionarray=["|Select One",
				"Abdulpur|Abdulpur",
				"Ailchara|Ailchara",
				"Alampur|Alampur",
				"Barakhada|Barakhada",
				"Gosind Durgapur|Gosind Durgapur",
				"Harinarayanpur|Harinarayanpur",
				"Hatas Haripur|Hatas Haripur",
				"Jagati|Jagati",
				"Jiarakhi|Jiarakhi",
				"Jhaudia|Jhaudia",
				"Mazampur|Mazampur",
				"Manohardia|Manohardia",
				"Paitkabari|Paitkabari",
				"Ujangram|Ujangram",
				"Kushtia Paurashava|Kushtia Paurashava"
				];
			}

			
			else if(s3.value=="Mirpur"){
				var optionarray=["|Select One",
				"Ambaria|Ambaria",
				"Amla|Amla",
				"Bahalbaria|Bahalbaria",
				"Barui Para|Barui Para",
				"Chhatian|Chhatian",
				"Chithulia|Chithulia",
				"Kursha|Kursha",
				"Malihad|Malihad",
				"Fulbaria|Fulbaria",
				"Poradaha|Poradaha",
				"Sardarpur|Sardarpur",
				"Talbaria|Talbaria",
				"Mirpur Paurashava|Mirpur Paurashava"
				];
			}
			
			
			
			/*Magura Start*/


			else if(s3.value=="Magura Sadar"){
				var optionarray=["|Select One",
				"Atharakhada|Atharakhada",
				"Birail Palita|Birail Palita",
				"Bagia|Bagia",
				"Chaulia|Chaulia",
				"Gopalgram|Gopalgram",
				"Hazipur|Hazipur",
				"Hazrapur|Hazrapur",
				"Jagdal|Jagdal",
				"Kasundi|Kasundi",
				"Kuchiamora|Kuchiamora",
				"Maghi|Maghi",
				"Raghab Dair|Raghab Dair",
				"Satrujitpur|Satrujitpur",
				"Paurashava|Paurashava"
				];
			}

			
			else if(s3.value=="Mohammadpur"){
				var optionarray=["|Select One",
				"Babukhali|Babukhali",
				"Balidia|Balidia",
				"Binodepur|Binodepur",
				"Digha|Digha",
				"Mohammadpur|Mohammadpur",
				"Nahata|Nahata",
				"Palashbaria|Palashbaria",
				"Rajapur|Rajapur"
				];
			}

			
			else if(s3.value=="Shalikha"){
				var optionarray=["|Select One",
				"Arpara|Arpara",
				"Bunagati|Bunagati",
				"Dhaneshwargati|Dhaneshwargati",
				"Gangarampur|Gangarampur",
				"Shalikha|Shalikha",
				"Shatakhali|Shatakhali",
				"Talkhari|Talkhari"
				];
			}

			
			else if(s3.value=="Sreepur"){
				var optionarray=["|Select One",
				"Amalsar|Amalsar",
				"Dariapur|Dariapur",
				"Gayeshpur|Gayeshpur",
				"Kadir Para|Kadir Para",
				"Nakol|Nakol",
				"Sabdalpur|Sabdalpur",
				"Sreekol|Sreekol",
				"Sreepur|Sreepur"
				];
			}

			/*Meherpur start */

			else if(s3.value=="Gangni"){
				var optionarray=["|Select One",
				"Bamandi|Bamandi",
				"Dhankhola|Dhankhola",
				"Kathuli|Kathuli",
				"Kazipur|Kazipur",
				"Matmura|Matmura",
				"Roypur|Roypur",
				"Shaharbati|Shaharbati",
				"Shola Taka|Shola Taka",
				"Tentulbaria|Tentulbaria",
				"Gangni Paurashava|Gangni Paurashava",
				];
			}			
			
			else if(s3.value=="Mujib Nagar"){
				var optionarray=["|Select One",
				"Bagoan|Bagoan",
				"Dariapur|Dariapur",
				"Mahajanpur|Mahajanpur",
				"Monakhali|Monakhali",
				];
			}			
			
			else if(s3.value=="Meherpur Sadar"){
				var optionarray=["|Select One",
				"Amda|Amda",
				"Amjhupi|Amjhupi",
				"Buripota|Buripota",
				"Kutubpur|Kutubpur",
				"Pirojpur|Pirojpur",
				"Meherpur Paurashava|Meherpur Paurashava",
				];
			}	
			
			/*Satkhira start*/

			else if(s3.value=="Assasuni"){
				var optionarray=["|Select One",
				"Anulia|Anulia",
				"Assasuni|Assasuni",
				"Baradal|Baradal",
				"Budhhata|Budhhata",
				"Durgapur|Durgapur",
				"Kadakati|Kadakati",
				"Khajra|Khajra",
				"Kulla|Kulla",
				"Pratap Nagar|Pratap Nagar",
				"Sobhnali|Sobhnali",
				"Sreeula|Sreeula",
				];
			}			
			
			else if(s3.value=="Debhata"){
				var optionarray=["|Select One",
				"Debhata|Debhata",
				"Kulia|Kulia",
				"Noapara|Noapara",
				"Parulia|Parulia",
				"Sakhipur|Sakhipur",
				];
			}			
			
			else if(s3.value=="Kalaroa"){
				var optionarray=["|Select One",
				"Chandanpur|Chandanpur",
				"Diara|Diara",
				"Nangalthara|Nangalthara",
				"Helatala|Helatala",
				"Jallabad|Jallabad",
				"Joynagar|Joynagar",
				"Jogikhali|Jogikhali",
				"Keragachhi|Keragachhi",
				"Keralkata|Keralkata",
				"Kushadanga|Kushadanga",
				"Kaila|Kaila",
				"Sonabaria|Sonabaria",
				"Paurashava|Paurashava"
				];
			}			
			
			else if(s3.value=="Kaliganj"){
				var optionarray=["|Select One",
				"Bhara Simla|Bhara Simla",
				"Bishnupur|Bishnupur",
				"Champaphul|Champaphul",
				"Dakshin Sreepur|Dakshin Sreepur",
				"Dhalbaria|Dhalbaria",
				"Krishnanagar|Krishnanagar",
				"Kushlia|Kushlia",
				"Mathureshpur|Mathureshpur",
				"Mautala|Mautala",
				"Nalta|Nalta",
				"Ratanpur|Ratanpur",
				"Tarali|Tarali"
				];
			}			
			
			else if(s3.value=="Satkhira Sadar"){
				var optionarray=["|Select One",
				"Agardari|Agardari",
				"Alipur|Alipur",
				"Baikari|Baikari",
				"Balli|Balli",
				"Banshdaha|Banshdaha",
				"Bhomra|Bhomra",
				"Brahma Rajpur|Brahma Rajpur",
				"Fingri|Fingri",
				"Dhulihar|Dhulihar",
				"Ghona|Ghona",
				"Jhaudanga|Jhaudanga",
				"Kuskhali|Kuskhali",
				"Labsa|Labsa",
				"Shibpur|Shibpur",
				"Paurashava|Paurashava"
				];
			}			
			
			else if(s3.value=="Shyamnagar"){
				var optionarray=["|Select One",
				"Atulia|Atulia",
				"Bhurulia|Bhurulia",
				"Buri Goalini|Buri Goalini",
				"Gabura|Gabura",
				"Ishwaripur|Ishwaripur",
				"Kaikhali|Kaikhali",
				"Kashimari|Kashimari",
				"Munshiganj|Munshiganj",
				"Nurnagar|Nurnagar",
				"Padma Pukur|Padma Pukur",
				"Ramjan Nagar|Ramjan Nagar",
				"Shyamnagar|Shyamnagar",
				"Satkhira Range|Satkhira Range"
				];
			}			
			
			else if(s3.value=="Tala"){
				var optionarray=["|Select One",
				"Dhandia|Dhandia",
				"Islamkati|Islamkati",
				"Jalalpur|Jalalpur",
				"Khalilnagar|Khalilnagar",
				"Khalishkhali|Khalishkhali",
				"Khesra|Khesra",
				"Kumira|Kumira",
				"Magura|Magura",
				"Nagarghata|Nagarghata",
				"Sarulia|Sarulia",
				"Talao|Talao",
				"Tentulia|Tentulia"
				];
			}

			/*Barguna start*/

			else if(s3.value=="Amtali"){
				var optionarray=["|Select One",
				"Amtali|Amtali",
				"Arpangashia|Arpangashia",
				"Atharagashia|Atharagashia",
				"Chowra|Chowra",
				"Gulisakhali|Gulisakhali",
				"Haldia|Haldia",
				"Kukua|Kukua",
				"Paurashava|Paurashava"
				];
			}		

			else if(s3.value=="Bamna"){
				var optionarray=["|Select One",
				"Bamna|Bamna",
				"Bukabunia|Bukabunia",
				"Dauatala|Dauatala",
				"Ramna|Ramna"
				];
			}		
			

			else if(s3.value=="Barguna Sadar"){
				var optionarray=["|Select One",
				"Ayla Patakata|Ayla Patakata",
				"Badarkhali|Badarkhali",
				"Barguna|Barguna",
				"Burir Char|Burir Char",
				"Dhalua|Dhalua",
				"Phuljhury|Phuljhury",
				"Gaurichanna|Gaurichanna",
				"Keorabunia|Keorabunia",
				"M.Baliatali|M.Baliatali",
				"Naltona|Naltona",
				"Paurashava|Paurashava"
				];
			}		
			

			else if(s3.value=="Betagi"){
				var optionarray=["|Select One",
				"Betagi|Betagi",
				"Bibichini|Bibichini",
				"Bura Mazumdar|Bura Mazumdar",
				"Hosnabad|Hosnabad",
				"Kazirabad|Kazirabad",
				"Mokamia|Mokamia",
				"Sarishamuri|Sarishamuri",
				"Paurashava|Paurashava"
				];
			}		
			

			else if(s3.value=="Patharghata"){
				var optionarray=["|Select One",
				"Char Duanti|Char Duanti",
				"Kakchira|Kakchira",
				"Kalmegha|Kalmegha",
				"Kanthaltali|Kanthaltali",
				"Nachna Para|Nachna Para",
				"Patharghata|Patharghata",
				"Raihanpur|Raihanpur",
				"Paurashava|Paurashava"
				];
			}		
			

			else if(s3.value=="Taltali"){
				var optionarray=["|Select One",
				"Barabagi|Barabagi",
				"Chhota Bagi|Chhota Bagi",
				"Karaibaria|Karaibaria",
				"Nishanbaria|Nishanbaria",
				"Pancha Koralia|Pancha Koralia",
				"Sarikkhali|Sarikkhali",
				"Sonakata|Sonakata"
				];
			}		
			
			/*Barisal start*/

			else if(s3.value=="Agailjhara"){
				var optionarray=["|Select One",
				"Bagdha|Bagdha",
				"Bakal|Bakal",
				"Gaila|Gaila",
				"Rajiher|Rajiher",
				"Ratnapur|Ratnapur"
				];
			}		
			

			else if(s3.value=="Babuganj"){
				var optionarray=["|Select One",
				"Agarpur|Agarpur",
				"Chandpasha|Chandpasha",
				"Dehergati|Dehergati",
				"Kedarpur|Kedarpur",
				"Madhab Pasha|Madhab Pasha",
				"Rahmatpur|Rahmatpur"
				];
			}		
			

			else if(s3.value=="Bakerganj"){
				var optionarray=["|Select One",
				"Bhar Pasha|Bhar Pasha",
				"Charadi|Charadi",
				"Char Amaddi|Char Amaddi",
				"Darial|Darial",
				"Dudhal|Dudhal",
				"Durga Pasha|Durga Pasha",
				"Faridpur|Faridpur",
				"Garuria|Garuria",
				"Kabai|Kabai",
				"Kalaskati|Kalaskati",
				"Nalua|Nalua",
				"Niamati|Niamati",
				"Padri Shibpur|Padri Shibpur",
				"Rangasree|Rangasree",
				"Paurashava|Paurashava"
				];
			}		
			

			else if(s3.value=="Banari Para"){
				var optionarray=["|Select One",
				"Banari Para|Banari Para",
				"Baisari Para|Baisari Para",
				"Bisarkandi|Bisarkandi",
				"Chakhar|Chakhar",
				"Iluhar|Iluhar",
				"Salia Bakpur|Salia Bakpur",
				"Saidkati|Saidkati",
				"Udaykati|Udaykati",
				"Paurashava|Paurashava"
				];
			}		
			

			else if(s3.value=="Barisal Sadar (Kotwali)"){
				var optionarray=["|Select One",
				"Ward No-01|Ward No-01",
				"Ward No-02|Ward No-02",
				"Ward No-03|Ward No-03",
				"Ward No-04|Ward No-04",
				"Ward No-05|Ward No-05",
				"Ward No-06|Ward No-06",
				"Ward No-07|Ward No-07",
				"Ward No-08|Ward No-08",
				"Ward No-09|Ward No-09",
				"Ward No-10|Ward No-10",
				"Ward No-11|Ward No-11",
				"Ward No-12|Ward No-12",
				"Ward No-13|Ward No-13",
				"Ward No-14|Ward No-14",
				"Ward No-15|Ward No-15",
				"Ward No-16|Ward No-16",
				"Ward No-17|Ward No-17",
				"Ward No-18|Ward No-18",
				"Ward No-19|Ward No-19",
				"Ward No-20|Ward No-20",
				"Ward No-21|Ward No-21",
				"Ward No-22|Ward No-22",
				"Ward No-23|Ward No-23",
				"Ward No-24|Ward No-24",
				"Ward No-25|Ward No-25",
				"Ward No-26|Ward No-26",
				"Ward No-27|Ward No-27",
				"Ward No-28|Ward No-28",
				"Ward No-29|Ward No-29",
				"Ward No-30|Ward No-30",
				"Chandpur|Chandpur",
				"Chandra Mohan|Chandra Mohan",
				"Char Baria|Char Baria",
				"Char Kowa|Char Kowa",
				"Char Monai|Char Monai",
				"Jagua|Jagua",
				"Kashipur|Kashipur",
				"Roy Pasha Karapur|Roy Pasha Karapur",
				"Shayestabad|Shayestabad",
				"Tungibaria|Tungibaria"
				];
			}		
			

			else if(s3.value=="Gaurnadi"){
				var optionarray=["|Select One",
				"Barthi|Barthi",
				"Batajore|Batajore",
				"Chandshi|Chandshi",
				"Khanjapur|Khanjapur",
				"Mahilara|Mahilara",
				"Nalchira|Nalchira",
				"Sarikal|Sarikal",
				"Paurashava|Paurashava"
				];
			}		
			else if(s3.value=="Hizla"){
				var optionarray=["|Select One",
				"Bara Jalia|Bara Jalia",
				"Dhulkhola|Dhulkhola",
				"Guabaria|Guabaria",
				"Harinathpur|Harinathpur",
				"Hizla Gaurabdi|Hizla Gaurabdi",
				"Memania|Memania"
				];
			}	
			
			else if(s3.value=="Mehendiganj"){
				var optionarray=["|Select One",
				"Alimabad|Alimabad",
				"Andhar Manik|Andhar Manik",
				"Bhasan Char|Bhasan Char",
				"Bidyanandapur|Bidyanandapur",
				"Chandpur|Chandpur",
				"Gobindapur|Gobindapur",
				"Char Ekkaria|Char Ekkaria",
				"Char Gopalpur|Char Gopalpur",
				"Dari Char Khajuria|Dari Char Khajuria",
				"Jangalia|Jangalia",
				"Lata|Lata",
				"Mehendiganj|Mehendiganj",
				"Ulania|Ulania",
				"Paurashava|Paurashava"
				];
			}
			else if(s3.value=="Muladi"){
				var optionarray=["|Select One",
				"Batamara|Batamara",
				"Char Kalekhan|Char Kalekhan",
				"Gachhua|Gachhua",
				"Kazir Char|Kazir Char",
				"Muladi|Muladi",
				"Nazirpur|Nazirpur",
				"Safipur|Safipur",
				"Paurashava|Paurashava"
				];
			}		
			

			else if(s3.value=="Wazirpur"){
				var optionarray=["|Select One",
				"Bamrail|Bamrail",
				"Bara Kotha|Bara Kotha",
				"Guthia|Guthia",
				"Harta|Harta",
				"Jalla|Jalla",
				"Otra|Otra",
				"Satla|Satla",
				"Shikarpur|Shikarpur",
				"Sholak|Sholak"
				];
			}
			
			/*Bhola start*/

			else if(s3.value=="Bhola Sadar"){
				var optionarray=["|Select One",
				"Alinagar|Alinagar",
				"Bapta|Baptag",
				"Char Samaia|Char Samaia",
				"Char Shibpur|Char Shibpur",
				"Dhania|Dhania",
				"Illisha|Illisha",
				"Paschim Illisha|Paschim Illisha",
				"Kachia|Kachia",
				"Uttar Dighaldi|Uttar Dighaldi",
				"Rajapur|Rajapur",
				"Dakshin Dighaldi|Dakshin Dighaldi",
				"Bhedaria|Bhedaria",
				"Bhelu Miah|Bhelu Miah",
				"Paurashava|Paurashava"
				];
			}
			
			else if(s3.value=="Burhanuddin"){
				var optionarray=["|Select One","Bara Manika|Bara Manika","Deula|Deula","Gangapur|Gangapur","Hassan Nagar|Hassan Nagar","Kachia|Kachia","Kutba|Kutba","Pakshia|Pakshia",
									"Sachra|Sachra","Tabgi|Tabgi","Paurashava|Paurashava"];
			}
			
			else if(s3.value=="Burhanuddin"){
				var optionarray=["|Select One", "Abu Bakarpur|Abu Bakarpur", "Abdullapur|Abdullapur", "Adhakha Nazrul Nagar|Adhakha Nazrul Nagar", "Aminabad|Aminabad", "Aslampur|Aslampur",
				"Char Kalmi|Char Kalmi", "Char Madras|Char Madras", "Char Manika|Char Manika", "Dhal Char|Dhal Char", "Ewajpur|Ewajpur", "Hazariganj|Hazariganj", "Jahanpur|Jahanpur",
				"Jinnaghar|Jinnaghar", "Char Kukri Mukri|Char Kukri Mukri", "Mujib Nagar|Mujib Nagar", "Nilkamal|Nilkamal", "Nurabad|Nurabad", "Rasul Pur|Rasul Pur", "Osmanganj|Osmanganj", "Paurashava|Paurashava"];
			} 

			else if(s3.value=="Char Fasson"){
				var optionarray=["|Select One", "Bhabanipur|Bhabanipur", "Char Khalifa|Char Khalifa", "Char Pata|Char Pata", "Hajipur|Hajipur", "Madanpur|Madanpur", "Medua|Medua", "Uttar Joynagar|Uttar Joynagar",
				"Dakshin Joynagar|Dakshin Joynagar", "Saidpur|Saidpur", "Paurashava|Paurashava"];
			}
			
			
			else if(s3.value=="Daulatkhan"){
				var optionarray=["|Select One",
				"Bhabanipur|Bhabanipur",
				"Char Khalifa|Char Khalifa",
				"Char Pata|Char Pata",
				"Hajipur|Hajipur",
				"Madanpur|Madanpur",
				"Medua|Medua",
				"Uttar Joynagar|Uttar Joynagar",
				"Dakshin Joynagar|Dakshin Joynagar",
				"Saidpur|Saidpur",
				"Paurashava|Paurashava"
				];
			}
			
			
			
			else if(s3.value=="Lalmohan"){
				var optionarray=["|Select One",
				"Badarpur|Badarpur",
				"Char Bhuta|Char Bhuta",
				"Dhali Gaurnagar|Dhali Gaurnagar",
				"Farazganj|Farazganj",
				"Kalma|Kalma",
				"Lalmohan|Lalmohan",
				"Lord Hardinje|Lord Hardinje",
				"Paschim Char Umed|Paschim Char Umed",
				"Ramganj|Ramganj",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Manpura"){
				var optionarray=["|Select One",
				"Dakshin Sakuchia|Dakshin Sakuchia",
				"Hajirhat|Hajirhat",
				"Manpura|Manpura",
				"Uttar Sakuchia|Uttar Sakuchia"
				];
			}		
			
			else if(s3.value=="Tazumuddin"){
				var optionarray=["|Select One",
				"Bara Malancha|Bara Malancha",
				"Chanchra|Chanchra",
				"Chandpur|Chandpur",
				"Sonapur|Sonapur",
				"Shambhupur|Shambhupur"
				];
			}		

			/*Jhalokati start*/
			
			else if(s3.value=="Jhalokati Sadar"){
				var optionarray=["|Select One",
				"Basanda|Basanda",
				"Binoykati|Binoykati",
				"Gabkhan Dhansiri|Gabkhan Dhansiri",
				"Gabha Ramchandrapur|Gabha Ramchandrapur",
				"Keora|Keora",
				"Nathullabad|Nathullabad",
				"Kirtipasha|Kirtipasha",
				"Nabagram|Nabagram",
				"Ponabalia|Ponabalia",
				"Sekherhat|Sekherhat",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Kanthalia"){
				var optionarray=["|Select One",
				"Amua|Amua",
				"Adrabunia|Adrabunia",
				"Chenchri Rampur|Chenchri Rampur",
				"Kanthalia|Kanthalia",
				"Patkelghata|Patkelghata",
				"Sauljalia|Sauljalia"
				];
			}		
			
			else if(s3.value=="Nalchity"){
				var optionarray=["|Select One",
				"Bharabpasha|Bharabpasha",
				"Dapdapia|Dapdapia",
				"Kulkati|Kulkati",
				"Kusanghal|Kusanghal",
				"Mollahat|Mollahat",
				"Magar|Magar",
				"Nachan Mohal|Nachan Mohal",
				"Ranapasha|Ranapasha",
				"Siddhakati|Siddhakati",
				"Subidpur|Subidpur",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Rajapur"){
				var optionarray=["|Select One",
				"Baruia|Baruia",
				"Galua|Galua",
				"Mathbari|Mathbari",
				"Rajapur|Rajapur",
				"Saturia|Saturia",
				"Suktagarh|Suktagarh"
				];
			}		
			
			/*Patuakhali start*/

			else if(s3.value=="Bauphal"){
				var optionarray=["|Select One",
				"Adabaria|Adabaria",
				"Baga|Baga",
				"Bauphal|Bauphal",
				"Daspara|Daspara",
				"Dhulia|Dhulia",
				"Kanchi Para|Kanchi Para",
				"Kalaiya|Kalaiya",
				"Kalisuri|Kalisuri",
				"Kanakdia|Kanakdia",
				"Keshabpur|Keshabpur",
				"Madanpura|Madanpura",
				"Noamala|Noamala",
				"Nazirpur|Nazirpur",
				"Surjyamani|Surjyamani",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Dashmina"){
				var optionarray=["|Select One",
				"Alipur|Alipur",
				"Bahrampur|Bahrampur",
				"Banshbaria|Banshbaria",
				"Betagi Sankipura|Betagi Sankipura",
				"Dashmina|Dashmina",
				"Rangopaldi|Rangopaldi"
				];
			}		
			
			else if(s3.value=="Dumki"){
				var optionarray=["|Select One",
				"Angaria|Angaria",
				"Lebukhali|Lebukhali",
				"Muradia|Muradia",
				"Pangashia|Pangashia"
				];
			}		
			
			else if(s3.value=="Galachipa"){
				var optionarray=["|Select One",
				"Amkhola|Amkhola",
				"Bakulbaria|Bakulbaria",
				"Char Biswas|Char Biswas",
				"Char Kajal|Char Kajal",
				"Chiknikandi|Chiknikandi",
				"Dakua|Dakua",
				"Galachipa|Galachipa",
				"Gazalia|Gazalia",
				"Golkhali|Golkhali",
				"Kalyankalas|Kalyankalas",
				"Panpatty|Panpatty",
				"Ratandi Taltali|Ratandi Taltali",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Kala Para"){
				var optionarray=["|Select One",
				"Baliatali|Baliatali",
				"Chakamaiya|Chakamaiya",
				"Dalbuganj|Dalbuganj",
				"Khaprabhanga|Khaprabhanga",
				"Dhulasar|Dhulasar",
				"Lalua|Lalua",
				"Lata Chapli|Lata Chapli",
				"Dhankhali|Dhankhali",
				"Mithaganj|Mithaganj",
				"Nilganj|Nilganj",
				"Tiakhali|Tiakhali",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Mirzaganj"){
				var optionarray=["|Select One",
				"Amragachhia|Amragachhia",
				"Deuli Subidkhali|Deuli Subidkhali",
				"Karabunia|Karabunia",
				"Madhabkhali|Madhabkhali",
				"Majidbari|Majidbari",
				"Mirzaganj|Mirzaganj"
				];
			}		
			
			else if(s3.value=="Patuakhali Sadar"){
				var optionarray=["|Select One",
				"Auliapur|Auliapur",
				"Badarpur|Badarpur",
				"Chhota Bighai|Chhota Bighai",
				"Itabaria|Itabaria",
				"Jainkati|Jainkati",
				"Bara Bighai|Bara Bighai",
				"Kalikapur|Kalikapur",
				"Kamalapur|Kamalapur",
				"Lohalia|Lohalia",
				"Laukati|Laukati",
				"Madarbunia|Madarbunia",
				"Marichbunia|Marichbunia",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Rangabali"){
				var optionarray=["|Select One",
				"Bara Baisdia|Bara Baisdia",
				"Chalitabunia|Chalitabunia",
				"Char Montaz|Char Montaz",
				"Chhota Baisdia|Chhota Baisdia",
				"Rangabali|Rangabali"
				];
			}		
			
			/*Cox'S Bazar start*/
			else if(s3.value=="Chakaria"){
				var optionarray=["|Select One",
				"Badarkhali|Badarkhali",
				"Bamo Bilchari|Bamo Bilchari",
				"Baraitali|Baraitali",
				"Bheola Manik Char|Bheola Manik Char",
				"Chiringa|Chiringa",
				"Demusia|Demusia",
				"Dulahazara|Dulahazara",
				"Purba Barabheola|Purba Barabheola",
				"Fasiakhali|Fasiakhali",
				"Harbang|Harbang",
				"Kakhara|Kakhara",
				"Kaiarbil|Kaiarbil",
				"Khuntakhali|Khuntakhali",
				"Konakhali|Konakhali",
				"Lakhyarchar|Lakhyarchar",
				"Saharbil|Saharbil",
				"Surajpur Manikpur|Surajpur Manikpur",
				"Paschim Bara Bheola|Paschim Bara Bheola",
				"Chakaria Paurashava|Chakaria Paurashava"
				];
			}		
			
			else if(s3.value=="Cox'S Bazar Sadar"){
				var optionarray=["|Select One",
				"Bharuakhali|Bharuakhali",
				"Chaufaldandi|Chaufaldandi",
				"Idgaon|Idgaon",
				"Islampur|Islampur",
				"Islamabad|Islamabad",
				"Jalalabad|Jalalabad",
				"Jhilwanja|Jhilwanja",
				"Khurushkul|Khurushkul",
				"Patali Machhuakhali|Patali Machhuakhali",
				"Pokkhali|Pokkhali",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Kutubdia"){
				var optionarray=["|Select One",
				"Ali Akbar Deil|Ali Akbar Deil",
				"Baraghop|Baraghop",
				"Dakshin Dhurung|Dakshin Dhurung",
				"Kaiyarbil|Kaiyarbil",
				"Lemsikhali|Lemsikhali",
				"Uttar Dhurung|Uttar Dhurung"
				];
			}		
			
			else if(s3.value=="Maheshkhali"){
				var optionarray=["|Select One",
				"Bara Maheskhali|Bara Maheskhali",
				"Chhotamohes Khali|Chhotamohes Khali",
				"Dhalghata|Dhalghata",
				"Hoanak|Hoanak",
				"Kalarmarchhara|Kalarmarchhara",
				"Kutubjom|Kutubjom",
				"Matarbari|Matarbari",
				"Saflapur|Saflapur",
				"Maheshkhali Paurashava|Maheshkhali Paurashava"
				];
			}		
			
			else if(s3.value=="Pekua"){
				var optionarray=["|Select One",
				"Bara Bakia|Bara Bakia",
				"Ujantia|Ujantia",
				"Magnama|Magnama",
				"Pekua|Pekua",
				"Rajakhali|Rajakhali",
				"Shilkhali|Shilkhali",
				"Taitong|Taitong"
				];
			}		
			
			else if(s3.value=="Ramu"){
				var optionarray=["|Select One",
				"Chakmarkul|Chakmarkul",
				"Fatekharkul|Fatekharkul",
				"Garjania|Garjania",
				"Idgar|Idgar",
				"Joarianala|Joarianala",
				"Kachhapia|Kachhapia",
				"Khuniapalong|Khuniapalong",
				"Kauarkhop|Kauarkhop",
				"Rashid Nagar|Rashid Nagar",
				"Rajarkul|Rajarkul",
				"Dakshin Mithachhari|Dakshin Mithachhari"
				];
			}		
			
			else if(s3.value=="Teknaf"){
				var optionarray=["|Select One",
				"Baharchhara|Baharchhara",
				"Nhilla|Nhilla",
				"St.Martin Dwip|St.Martin Dwip",
				"Sabrang|Sabrang",
				"Teknaf|Teknaf",
				"Whykong|Whykong",
				"Teknaf Paurashava|Teknaf Paurashava"
				];
			}		
			
			else if(s3.value=="Ukhia"){
				var optionarray=["|Select One",
				"Haldia Palong|Haldia Palong",
				"Jalia Palong|Jalia Palong",
				"Raja Palong|Raja Palong",
				"Ratna Palong|Ratna Palong",
				"Palong Khali|Palong Khali"
				];
			}		
			
			/*Faridpur start*/
			else if(s3.value=="Alfadanga"){
				var optionarray=["|Select One",
				"Alfadanga|Alfadanga",
				"Bana|Bana",
				"Buraich|Buraich",
				"Gopalpur|Gopalpur",
				"Panchuria|Panchuria",
				"Tagarbanda|Tagarbanda"
				];
			}		
			
			else if(s3.value=="Bhanga"){
				var optionarray=["|Select One",
				"Algi|Algi",
				"Azimnagar|Azimnagar",
				"Chumordi|Chumordi",
				"Chandra|Chandra",
				"Gharua|Gharua",
				"Hamirdi|Hamirdi",
				"Kalamridha|Kalamridha",
				"Kaolibera|Kaolibera",
				"Manikdaha|Manikdaha",
				"Nasirabad|Nasirabad",
				"Nurullaganj|Nurullaganj",
				"Tuzarpur|Tuzarpur",
				"Bhanga Paurashava|Bhanga Paurashava"
				];
			}		
			
			else if(s3.value=="Boalmari"){
				var optionarray=["|Select One",
				"Boalmari|Boalmari",
				"Chandpur|Chandpur",
				"Chatul|Chatul",
				"Dadpur|Dadpur",
				"Ghoshpur|Ghoshpur",
				"Gunbaha|Gunbaha",
				"Moyna|Moyna",
				"Parameshwardi|Parameshwardi",
				"Rupapat|Rupapat",
				"Satair|Satair",
				"Shekhar|Shekhar",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Char Bhadrasan"){
				var optionarray=["|Select One",
				"Char Bhadrasan|Char Bhadrasan",
				"Char Harirampu|Char Harirampu",
				"Char Jhaukanda|Char Jhaukanda",
				"Gazirtek|Gazirtek"
				];
			}		
			
			else if(s3.value=="Faridpur Sadar"){
				var optionarray=["|Select One",
				"Aliabad|Aliabad",
				"Ambikapur|Ambikapur",
				"Char Madhabdia|Char Madhabdia",
				"Decreerchar|Decreerchar",
				"Greda|Greda",
				"Ishan Gopalpur|Ishan Gopalpur",
				"Kaijuri|Kaijuri",
				"Kanaipur|Kanaipur",
				"Krishnanagar|Krishnanagar",
				"Majchar|Majchar",
				"Uttar Channel|Uttar Channel",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Madhukhali"){
				var optionarray=["|Select One",
				"Bagat|Bagat",
				"Dumain|Dumain",
				"Gajna|Gajna",
				"Jahapur|Jahapur",
				"Kamarkhali|Kamarkhali",
				"Madhukhali|Madhukhali",
				"Megchami|Megchami",
				"Noapara|Noapara",
				"Raipur|Raipur"
				];
			}		
			
			else if(s3.value=="Nagarkanda"){
				var optionarray=["|Select One",
				"Char Jasordi|Char Jasordi",
				"Dangi|Dangi",
				"Phulsuti|Phulsuti",
				"Kaichail|Kaichail",
				"Laskardia|Laskardia",
				"Kodalia Shohidnagar|Kodalia Shohidnagar",
				"Pura Para|Pura Para",
				"Ramnagar|Ramnagar",
				"Talma|Talma",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Sadarpur"){
				var optionarray=["|Select One",
				"Akter Char|Akter Char",
				"Bhashanchar|Bhashanchar",
				"Char Bishnupur|Char Bishnupur",
				"Char Manair|Char Manair",
				"Char Nasirpur|Char Nasirpur",
				"Dheukhali|Dheukhali",
				"Krishnapur|Krishnapur",
				"Narikelbaria|Narikelbaria",
				"Sadarpur|Sadarpur"
				];
			}		
			
			else if(s3.value=="Saltha"){
				var optionarray=["|Select One",
				"Atghar|Atghar",
				"Ballabhdi|Ballabhdi",
				"Bhawal|Bhawal",
				"Gatti|Gatti",
				"Jadunandi|Jadunandi",
				"Majhardia|Majhardia",
				"Ramkantapur|Ramkantapur",
				"Sonapur|Sonapur"
				];
			}
			
			
			/*Gopalganj start*/
			else if(s3.value=="Gopalganj Sadar"){
				var optionarray=["|Select One",
				"Borasi|Borasi",
				"Baultali|Baultali",
				"Chandra Dighalia|Chandra Dighalia",
				"Durgapur|Durgapur",
				"Gobra|Gobra",
				"Gopinathpur|Gopinathpur",
				"Haridaspur|Haridaspur",
				"Jalalabad|Jalalabad",
				"Kajulia|Kajulia",
				"Karpara|Karpara",
				"Kati|Kati",
				"Latifpur|Latifpur",
				"Majhigati|Majhigati",
				"Nizra|Nizra",
				"Paikkandi|Paikkandi",
				"Raghunathpur|Raghunathpur",
				"Sahapur|Sahapur",
				"Satpar|Satpar",
				"Suktail|Suktail",
				"Ulpur|Ulpur",
				"Urafi|Urafi",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Kashiani"){
				var optionarray=["|Select One",
				"Bethuri|Bethuri",
				"Fukura|Fukura",
				"Hatiara|Hatiara",
				"Kashiani|Kashiani",
				"Mamudpur|Mamudpur",
				"Maheshpur|Maheshpur",
				"Nijamkandi|Nijamkandi",
				"Orakandi|Orakandi",
				"Parulia|Parulia",
				"Puisur|Puisur",
				"Rajpat|Rajpat",
				"Ratail|Ratail",
				"Sajail|Sajail",
				"Singa|Singa"
				];
			}		
			
			else if(s3.value=="Kotali Para"){
				var optionarray=["|Select One",
				"Amtali|Amtali",
				"Bandhabari|Bandhabari",
				"Ghagar|Ghagar",
				"Hiran|Hiran",
				"Kalabari|Kalabari",
				"Kandi|Kandi",
				"Kushla|Kushla",
				"Pinjuri|Pinjuri",
				"Radhaganj|Radhaganj",
				"Ramshil|Ramshil",
				"Sadullapur|Sadullapur",
				"Suagram|Suagram",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Muksudpur"){
				var optionarray=["|Select One",
				"Bhabrasur|Bhabrasur",
				"Bahugram|Bahugram",
				"Banshbaria|Banshbaria",
				"Batikamari|Batikamari",
				"Dignagar|Dignagar",
				"Gobindapur|Gobindapur",
				"Gohala|Gohala",
				"Jalirpar|Jalirpar",
				"Kasalia|Kasalia",
				"Khandarpar|Khandarpar",
				"Maharajpur|Maharajpur",
				"Mochna|Mochna",
				"Nanikshir|Nanikshir",
				"Pasargati|Pasargati",
				"Raghdi|Raghdi",
				"Ujani|Ujani",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Tungi Para"){
				var optionarray=["|Select One",
				"Barni|Barni",
				"Dumuria|Dumuria",
				"Gopalpur|Gopalpur",
				"Kushli|Kushli",
				"Patgati|Patgati",
				"Paurashava|Paurashava"
				];
			}	
			
			
			/*Madaripur start*/

			else if(s3.value=="Kalkini"){
				var optionarray=["|Select One",
				"Alinagar|Alinagar",
				"Baligram|Baligram",
				"Banshgari|Banshgari",
				"Char Daulat Khan|Char Daulat Khan",
				"Dasar|Dasar",
				"Enayetnagar|Enayetnagar",
				"Gopalpur|Gopalpur",
				"Kayaria|Kayaria",
				"Kazibakai|Kazibakai",
				"Lakshmipur|Lakshmipur",
				"Nabagram|Nabagram",
				"Ramjanpur|Ramjanpur",
				"Sahebrampur|Sahebrampur",
				"Shikar Mangal|Shikar Mangal",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Madaripur Sadar"){
				var optionarray=["|Select One",
				"Bahadurpur|Bahadurpur",
				"Chilar Char|Chilar Char",
				"Dhurail|Dhurail",
				"Dudkhali|Dudkhali",
				"Ghatmajhi|Ghatmajhi",
				"Jhaudi|Jhaudi",
				"Kalikapur|Kalikapur",
				"Kendua|Kendua",
				"Khoajpur|Khoajpur",
				"Kunia|Kunia",
				"Mustafapur|Mustafapur",
				"Panchkhola|Panchkhola",
				"Pearpur|Pearpur",
				"Rasti|Rasti",
				"Sirkhara|Sirkhara",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Rajoir"){
				var optionarray=["|Select One",
				"Amgram|Amgram",
				"Badar Pasha|Badar Pasha",
				"Bajitpur|Bajitpur",
				"Haridasdi Mahendradi|Haridasdi Mahendradi",
				"Hossainpur|Hossainpur",
				"Isibpur|Isibpur",
				"Kabirajpur|Kabirajpur",
				"Kadambari|Kadambari",
				"Khalia|Khalia",
				"Paik Para|Paik Para",
				"Rajoir|Rajoir"
				];
			}		
			
			else if(s3.value=="Shib Char"){
				var optionarray=["|Select One",
				"Bandarkhola|Bandarkhola",
				"Banshkandi|Banshkandi",
				"Bayratala Dakshin|Bayratala Dakshin",
				"Bayratala Uttar|Bayratala Uttar",
				"Bhadrasan|Bhadrasan",
				"Bhandarikandi|Bhandarikandi",
				"Char Janajat|Char Janajat",
				"Datta Para|Datta Para",
				"Ditiyakhanda|Ditiyakhanda",
				"Kadirpur|Kadirpur",
				"Kanthalbari|Kanthalbari",
				"Kutubpur|Kutubpur",
				"Matbarer Char|Matbarer Char",
				"Nilakhi|Nilakhi",
				"Panch Char|Panch Char",
				"Sannyasir Char|Sannyasir Char",
				"Shibchar|Shibchar",
				"Siruail|Siruail",
				"Umedpur|Umedpur",
				"Paurashava|Paurashava"
				];
			}		

			
			/*Rajbari start*/
			
			else if(s3.value=="Baliakandi"){
				var optionarray=["|Select One",
				"Baharpur|Baharpur",
				"Baliakandi|Baliakandi",
				"Islampur|Islampur",
				"Jamalpur|Jamalpur",
				"Jangal|Jangal",
				"Narua|Narua",
				"Nawabpur|Nawabpur"
				];
			}		
			
			else if(s3.value=="Goalandaghat"){
				var optionarray=["|Select One",
				"Chhota Bhakla|Chhota Bhakla",
				"Daulatdia|Daulatdia",
				"Debagram|Debagram",
				"Ujan Char|Ujan Char",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Kalukhali"){
				var optionarray=["|Select One",
				"Boalia|Boalia",
				"Kalikapur|Kalikapur",
				"Majhbari|Majhbari",
				"Madapur|Madapur",
				"Mrigi|Mrigi",
				"Ratandia|Ratandia",
				"Saorail|Saorail"
				];
			}		
			
			else if(s3.value=="Pangsha"){
				var optionarray=["|Select One",
				"Bahadurpur|Bahadurpur",
				"Habaspur|Habaspur",
				"Jashai|Jashai",
				"Kalimahar|Kalimahar",
				"Kasba Majhail|Kasba Majhail",
				"Machh Para|Machh Para",
				"Maurat|Maurat",
				"Babupara|Babupara",
				"Patta|Patta",
				"Sarisha|Sarisha",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Rajbari Sadar"){
				var optionarray=["|Select One",
				"Alipur|Alipur",
				"Banibaha|Banibaha",
				"Barat|Barat",
				"Basantapur|Basantapur",
				"Chandani|Chandani",
				"Dadshi|Dadshi",
				"Khankhanapur|Khankhanapur",
				"Khanganj|Khanganj",
				"Mizanpur|Mizanpur",
				"Mulghar|Mulghar",
				"Panchuria|Panchuria",
				"Ramkantapur|Ramkantapur",
				"Shahid Wahabpur|Shahid Wahabpur",
				"Sultanpur|Sultanpur",
				"Paurashava|Paurashava"
				];
			}		
			
			/*Shariatpur start*/
			else if(s3.value=="Bhedarganj"){
				var optionarray=["|Select One",
				"Arshi Nagar|Arshi Nagar",
				"Char Bhaga|Char Bhaga",
				"Char Kumaria|Char Kumaria",
				"Chhaygaon|Chhaygaon",
				"Char Census|Char Census",
				"Dhakhin Tarabunia|Dhakhin Tarabunia",
				"Digar Mahishkhali|Digar Mahishkhali",
				"Kachikata|Kachikata",
				"Mahisar|Mahisar",
				"Narayanpur|Narayanpur",
				"Rambhadrapur|Rambhadrapur",
				"Sakhipur|Sakhipur",
				"Tarabunia|Tarabunia",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Damudya"){
				var optionarray=["|Select One",
				"Darul Aman|Darul Aman",
				"Dhankati|Dhankati",
				"Islam Pur|Islam Pur",
				"Kaneshwar|Kaneshwar",
				"Purba Damudya|Purba Damudya",
				"Sidulkura|Sidulkura",
				"Sidya|Sidya",
				"Paurashava|Paurashava"
				];
			}		
			
			else if(s3.value=="Gosairhat"){
				var optionarray=["|Select One",
				"Gariber Char|Gariber Char",
				"Gosairhat|Gosairhat",
				"Idilpur|Idilpur",
				"Kodalpur|Kodalpur",
				"Kuchaipatti|Kuchaipatti",
				"Nager Para|Nager Para",
				"Nalmuri|Nalmuri",
				"Samantasar|Samantasar"
				];
			}
			
			else if(s3.value=="Naria"){
				var optionarray=["|Select One",
				"Bhojeshwar|Bhojeshwar",
				"Bhumkhara|Bhumkhara",
				"Bijhari|Bijhari",
				"Chamta|Chamta",
				"Char Atra|Char Atra",
				"Dinga Manik|Dinga Manik",
				"Fateh Jangapur|Fateh Jangapur",
				"Gharisar|Gharisar",
				"Japsa|Japsa",
				"Kedarpur|Kedarpur",
				"Muktarer Char|Muktarer Char",
				"Nasasan|Nasasan",
				"Noapara|Noapara",
				"Rajnagar|Rajnagar",
				"Paurashava|Paurashava"
				];
			}		
			
			
			else if(s3.value=="Shariatpur Sadar"){
			var optionarray=["|Select One",
			"Angaria|Angaria",
			"Binodpur|Binodpur",
			"Chandrapur|Chandrapur",
			"Chikandi|Chikandi",
			"Chitalia|Chitalia",
			"Domsar|Domsar",
			"Mohammadpur|Mohammadpur",
			"Palong|Palong",
			"Rudrakar|Rudrakar",
			"Shaul Para|Shaul Para",
			"Tulasar|Tulasar",
			"Paurashava|Paurashava"
			];
		}	
			
		else if(s3.value=="Zanjira"){
			var optionarray=["|Select One",
			"Bara Gopalpur|Bara Gopalpur",
			"Barakandi|Barakandi",
			"Bara Krishnaga|Bara Krishnaga",
			"Bilaspur|Bilaspur",
			"Joynagar|Joynagar",
			"Kunder Char|Kunder Char",
			"Mulna|Mulna",
			"Naodoba|Naodoba",
			"Paler Char|Paler Char",
			"Purba Naodoba|Purba Naodoba",
			"Sener Char|Sener Char",
			"Zanjira|Zanjira",
			"Paurashava|Paurashava"
			];
		}
		
			
			
			
			
			
			for(var option in optionarray){
				var pair = optionarray[option].split("|");
				var newoption = document.createElement("option");
				newoption.value = pair[0];
				newoption.innerHTML = pair[1];
				s4.options.add(newoption);
			}
		}
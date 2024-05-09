<script src="{{ asset('assets/plugins/Datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('assets/plugins/Datatable/js/dataTables.bootstrap4.js') }}"></script>

<script src="{{ asset('assets/plugins/Datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/js/datatable.js') }}"></script>

<!--DataTables js-->
<script src="{{ asset('admin/assets/plugins/Datatable/js/jquery.dataTables.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/dataTables.bootstrap4.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/jszip.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/vfs_fonts.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('admin/assets/plugins/Datatable/js/buttons.colVis.min.js') }}"></script>
<script>
    // States and Cities data
    var statesAndCities = {
        "Andaman and Nicobar Islands": ["Port Blair"],
        "Andhra Pradesh": ["Adoni", "Amalapuram", "Anantapur", "Bapatla", "Chilakaluripet", "Chittoor",
            "Dharmavaram", "Eluru", "Gooty", "Gudivada", "Guntakal", "Guntur", "Hindupur", "Jaggaiahpet",
            "Jammalamadugu", "Kadapa", "Kadiri", "Kakinada", "Kandukur", "Kavali", "Kovvur", "Kurnool",
            "Macherla", "Machilipatnam", "Madanapalle", "Mandapeta", "Markapur", "Nagari", "Naidupet",
            "Nandyal", "Narasapuram", "Narasaraopet", "Narsipatnam", "Nellore", "Nidadavole", "Nuzvid",
            "Ongole", "Palacole", "Palasa Kasibugga", "Parvathipuram", "Pedana", "Peddapuram", "Pithapuram",
            "Ponnur", "Proddatur", "Punganur", "Puttur", "Rajahmundry", "Rajam", "Rajampet", "Ramachandrapuram",
            "Rayachoti", "Rayadurg", "Renigunta", "Repalle", "Salur", "Samalkot", "Sattenapalle", "Srikakulam",
            "Srikalahasti", "Srisailam Project (Right Flank Colony) Township", "Sullurpeta", "Tadepalligudem",
            "Tadpatri", "Tanuku", "Tenali", "Tirupati", "Tiruvuru", "Tuni", "Uravakonda", "Venkatagiri",
            "Vijayawada", "Vinukonda", "Visakhapatnam", "Vizianagaram", "Yemmiganur", "Yerraguntla"
        ],
        "Arunachal Pradesh": ["Itanagar", "Naharlagun", "Pasighat"],
        "Assam": ["Barpeta", "Dhubri", "Dibrugarh", "Diphu", "Goalpara", "Guwahati", "Jorhat", "Karimganj", "Lanka",
            "Lumding", "Mangaldoi", "Mankachar", "Margherita", "Mariani", "Marigaon", "Nagaon", "Nalbari",
            "North Lakhimpur", "Rangia", "Sibsagar", "Silapathar", "Silchar", "Tezpur", "Tinsukia", "Umrangso"
        ],
        "Bihar": ["Araria", "Arrah", "Arwal", "Asarganj", "Aurangabad", "Bagaha", "Barh", "Begusarai", "Bettiah",
            "Bhabua", "Bhagalpur", "Buxar", "Chhapra", "Darbhanga", "Dehri-on-Sone", "Dumraon", "Forbesganj",
            "Gaya", "Gopalganj", "Hajipur", "Jamalpur", "Jamui", "Jehanabad", "Katihar", "Kishanganj",
            "Lakhisarai", "Lalganj", "Madhepura", "Madhubani", "Maharajganj", "Mahnar Bazar", "Makhdumpur",
            "Maner", "Manihari", "Marhaura", "Masaurhi", "Mirganj", "Mokameh", "Motihari", "Motipur", "Munger",
            "Murliganj", "Muzaffarpur", "Narkatiaganj", "Naugachhia", "Nawada", "Nokha", "Patna", "Piro",
            "Purnia", "Rafiganj", "Rajgir", "Ramnagar", "Raxaul Bazar", "Revelganj", "Rosera", "Saharsa",
            "Samastipur", "Sasaram", "Sheikhpura", "Sheohar", "Sherghati", "Silao", "Sitamarhi", "Siwan",
            "Sonepur", "Sugauli", "Sultanganj", "Supaul", "Warisaliganj"
        ],
        "Chandigarh": ["Chandigarh"],
        "Chhattisgarh": ["Ambikapur", "Bhatapara", "Bhilai Nagar", "Bilaspur", "Chirmiri", "Dalli-Rajhara",
            "Dhamtari", "Durg", "Jagdalpur", "Korba", "Mahasamund", "Manendragarh", "Mungeli", "Naila Janjgir",
            "Raigarh", "Raipur", "Rajnandgaon", "Sakti", "Tilda Newra"
        ],
        "Dadra and Nagar Haveli": ["Silvassa"],
        "Daman and Diu": ["Daman", "Diu"],
        "Delhi": ["Delhi", "New Delhi"],
        "Goa": ["Mapusa", "Margao", "Marmagao", "Panaji"],
        "Gujarat": ["Adalaj", "Ahmedabad", "Amreli", "Anand", "Anjar", "Ankleshwar", "Bharuch", "Bhavnagar", "Bhuj",
            "Bilimora", "Bodhan", "Chhapra", "Chhaprabhatha", "Dahod", "Deesa", "Dhoraji", "Godhra", "Jamnagar",
            "Kadi", "Kapadvanj", "Keshod", "Khambhat", "Lathi", "Limbdi", "Lunawada", "Mahesana", "Mahuva",
            "Manavadar", "Mandvi", "Mangrol", "Mansa", "Mahudha", "Modasa", "Morvi", "Nadiad", "Navsari",
            "Padra", "Palanpur", "Palitana", "Pardi", "Patan", "Petlad", "Porbandar", "Radhanpur", "Rajkot",
            "Rajpipla", "Rajula", "Ranavav", "Rapar", "Salaya", "Sanand", "Savarkundla", "Sidhpur", "Sihor",
            "Songadh", "Surat", "Talaja", "Thangadh", "Tharad", "Umbergaon", "Umreth", "Una", "Unjha", "Upleta",
            "Vadnagar", "Vadodara", "Valsad", "Vapi", "Vapi", "Veraval", "Vijapur", "Viramgam", "Visnagar",
            "Vyara", "Wadhwan", "Wankaner"
        ],
        "Haryana": ["Bahadurgarh", "Bhiwani", "Charkhi Dadri", "Faridabad", "Fatehabad", "Gohana", "Gurgaon",
            "Hansi", "Hisar", "Jind", "Kaithal", "Karnal", "Ladwa", "Mahendragarh", "Mandi Dabwali", "Narnaul",
            "Narwana", "Palwal", "Panchkula", "Panipat", "Pehowa", "Pinjore", "Rania", "Ratia", "Rewari",
            "Rohtak", "Safidon", "Samalkha", "Sarsod", "Shahbad", "Sirsa", "Sohna", "Sonipat", "Taraori",
            "Thanesar", "Tohana", "Yamunanagar"
        ],
        "Himachal Pradesh": ["Mandi", "Nahan", "Palampur", "Shimla", "Solan", "Sundarnagar"],
        "Jammu and Kashmir": ["Anantnag", "Baramula", "Jammu", "Kathua", "Punch", "Rajauri", "Sopore", "Srinagar",
            "Udhampur"
        ],
        "Jharkhand": ["Adityapur", "Bokaro Steel City", "Chaibasa", "Chatra", "Chirkunda",
            "Medininagar (Daltonganj)", "Deoghar", "Dhanbad", "Dumka", "Giridih", "Gumia", "Hazaribag",
            "Jamshedpur", "Jhumri Tilaiya", "Lohardaga", "Madhupur", "Mihijam", "Musabani", "Pakaur", "Patratu",
            "Phusro", "Ramgarh", "Ranchi", "Sahibganj", "Saunda", "Simdega", "Tenu dam-cum-Kathhara"
        ],
        "Karnataka": ["Adyar", "Afzalpur", "Arsikere", "Athni", "Bengaluru", "Belagavi", "Ballari",
            "Chikkamagaluru", "Davanagere", "Gokak", "Hubli-Dharwad", "Karwar", "Kolar", "Lakshmeshwar",
            "Lingsugur", "Maddur", "Madhugiri", "Madikeri", "Magadi", "Mahalingapura", "Malavalli", "Malur",
            "Mandya", "Mangaluru", "Manvi", "Mudalagi", "Mudabidri", "Muddebihal", "Mudhol", "Mulbagal",
            "Mundargi", "Nanjangud", "Nargund", "Navalgund", "Nelamangala", "Pavagada", "Piriyapatna", "Puttur",
            "Rabkavi Banhatti", "Raayachuru", "Ranebennuru", "Ramanagaram", "Ramdurg", "Ranibennur",
            "Robertson Pet", "Ron", "Sadalagi", "Sagara", "Sakleshpur", "Sankeshwara", "Saundatti-Yellamma",
            "Savanur", "Sedam", "Shahabad", "Shahpur", "Shiggaon", "Shikaripur", "Shivamogga", "Surapura",
            "Shrirangapattana", "Sidlaghatta", "Sindhagi", "Sindhnur", "Sira", "Sirsi", "Siruguppa",
            "Srinivaspur", "Tarikere", "Tekkalakote", "Terdal", "Talikota", "Tiptur", "Tumkur", "Udupi",
            "Vijayapura", "Wadi", "Yadgir"
        ],
        "Kerala": ["Adoor", "Alappuzha", "Attingal", "Chalakudy", "Changanassery", "Cherthala",
            "Chittur-Thathamangalam", "Guruvayoor", "Kanhangad", "Kannur", "Kasaragod", "Kayamkulam", "Kochi",
            "Kodungallur", "Kollam", "Kottayam", "Kozhikode", "Kunnamkulam", "Malappuram", "Mattannur",
            "Mavelikkara", "Mavoor", "Muvattupuzha", "Nedumangad", "Neyyattinkara", "Nilambur", "Ottappalam",
            "Palai", "Palakkad", "Panamattom", "Panniyannur", "Pappinisseri", "Paravoor", "Pathanamthitta",
            "Peringathur", "Perinthalmanna", "Perumbavoor", "Ponnani", "Punalur", "Puthuppally", "Koyilandy",
            "Shoranur", "Taliparamba", "Thiruvalla", "Thiruvananthapuram", "Thodupuzha", "Thrissur", "Tirur",
            "Vaikom", "Varkala", "Vatakara"
        ],
        "Ladakh": ["Leh", "Kargil"],
        "Lakshadweep": ["Kavaratti"],
        "Madhya Pradesh": ["Alirajpur", "Ashok Nagar", "Balaghat", "Bhopal", "Ganjbasoda", "Gwalior", "Indore",
            "Itarsi", "Jabalpur", "Lahar", "Maharajpur", "Mahidpur", "Maihar", "Malaj Khand", "Manasa",
            "Manawar", "Mandideep", "Mandla", "Mandsaur", "Mauganj", "Mhow Cantonment", "Mhowgaon", "Morena",
            "Multai", "Mundi", "Murwara", "Nagda", "Nainpur", "Narsinghgarh", "Narsinghgarh", "Neemuch",
            "Nepanagar", "Niwari", "Nowgong", "Nowrozabad", "Pachore", "Pali", "Panagar", "Pandhurna", "Panna",
            "Pasan", "Pipariya", "Pithampur", "Porsa", "Prithvipur", "Raghogarh-Vijaypur", "Rahatgarh",
            "Raisen", "Rajgarh", "Ratlam", "Rau", "Rehli", "Rewa", "Sabalgarh", "Sagar", "Sanawad", "Sarangpur",
            "Sarni", "Satna", "Sausar", "Sehore", "Sendhwa", "Seoni", "Seoni-Malwa", "Shahdol", "Shajapur",
            "Shamgarh", "Sheopur", "Shivpuri", "Shujalpur", "Sidhi", "Sihora", "Singrauli", "Sironj",
            "Sohagpur", "Tarana", "Tikamgarh", "Ujjain", "Umaria", "Vidisha", "Vijaypur", "Wara Seoni"
        ],
        "Maharashtra": ["Achalpur", "Ahmednagar", "Akola", "Amravati", "Arvi", "Aurangabad", "Baramati",
            "Chalisgaon", "Chandrapur", "Dahanu", "Devgarh", "Dhule", "Gondiya", "Hinganghat", "Ichalkaranji",
            "Jalna", "Kalyan-Dombivali", "Latur", "Loha", "Lonar", "Lonavla", "Mahad", "Malegaon", "Malkapur",
            "Mangalvedhe", "Mangrulpir", "Manjlegaon", "Manmad", "Manwath", "Mehkar", "Mhaswad", "Miraj",
            "Morshi", "Mukhed", "Mul", "Mumbai", "Murtijapur", "Nagpur", "Nanded-Waghala", "Nandgaon",
            "Nandura", "Nandurbar", "Narkhed", "Nashik", "Navi Mumbai", "Nawapur", "Nilanga", "Osmanabad",
            "Ozar", "Pachora", "Paithan", "Palghar", "Pandharkaoda", "Pandharpur", "Panvel", "Parbhani",
            "Parli", "Partur", "Pathardi", "Pathri", "Patur", "Pauni", "Pen", "Phaltan", "Pulgaon", "Pune",
            "Purna", "Pusad", "Rahuri", "Rajura", "Ramtek", "Ratnagiri", "Raver", "Risod", "Sailu", "Sangamner",
            "Sangli", "Sangole", "Sasvad", "Satana", "Satara", "Savner", "Sawantwadi", "Shahade", "Shegaon",
            "Shendurjana", "Shirdi", "Shirpur-Warwade", "Shirur", "Shrigonda", "Shrirampur", "Sillod", "Sinnar",
            "Solapur", "Soyagaon", "Talegaon Dabhade", "Talode", "Tasgaon", "Thane", "Tirora", "Tuljapur",
            "Tumsar", "Uchgaon", "Udgir", "Umarga", "Umarkhed", "Umred", "Uran", "Uran Islampur",
            "Vadgaon Kasba", "Vaijapur", "Vasai-Virar", "Vita", "Wadgaon Road", "Wai", "Wani", "Wardha",
            "Warora", "Warud", "Washim", "Yavatmal", "Yawal", "Yevla"
        ],
        "Manipur": ["Imphal", "Lilong", "Mayang Imphal", "Thoubal"],
        "Meghalaya": ["Nongstoin", "Shillong", "Tura"],
        "Mizoram": ["Aizawl", "Lunglei"],
        "Nagaland": ["Dimapur", "Kohima"],
        "Odisha": ["Balangir", "Baleshwar Town", "Barbil", "Bargarh", "Baripada Town", "Bhadrak", "Bhawanipatna",
            "Bhubaneswar", "Brahmapur", "Byasanagar", "Cuttack", "Dhenkanal", "Jatani", "Jharsuguda",
            "Kendrapara", "Kendujhar", "Malkangiri", "Nabarangapur", "Paradip", "Parlakhemundi", "Pattamundai",
            "Phulabani", "Puri", "Rairangpur", "Rajagangapur", "Raurkela", "Rayagada", "Sambalpur", "Soro",
            "Sunabeda", "Sundargarh", "Talcher", "Tarbha", "Titlagarh"
        ],
        "Puducherry": ["Karaikal", "Mahe", "Puducherry", "Yanam"],
        "Punjab": ["Amritsar", "Barnala", "Batala", "Bathinda", "Dhuri", "Faridkot", "Fazilka", "Firozpur",
            "Firozpur Cantt.", "Gobindgarh", "Gurdaspur", "Hoshiarpur", "Jagraon", "Jalandhar", "Kapurthala",
            "Khanna", "Kharar", "Kot Kapura", "Longowal", "Ludhiana", "Malerkotla", "Malout", "Mansa", "Moga",
            "Mohali", "Morinda", "Mukerian", "Muktsar", "Nabha", "Nakodar", "Nangal", "Nawanshahr", "Pathankot",
            "Patiala", "Pattran", "Patti", "Phagwara", "Phillaur", "Qadian", "Raikot", "Rajpura",
            "Rampura Phul", "Rupnagar", "Samana", "Sangrur", "Sirhind Fatehgarh Sahib", "Sujanpur", "Sunam",
            "Talwara", "Tarn Taran", "Urmar Tanda", "Zira", "Zirakpur"
        ],
        "Rajasthan": ["Ajmer", "Alwar", "Bikaner", "Bharatpur", "Bhilwara", "Bhiwadi", "Bikaner", "Bundi",
            "Chittorgarh", "Chomun", "Churu", "Daosa", "Fatehpur", "Ganganagar", "Gangapur", "Hindaun",
            "Jaipur", "Jaisalmer", "Jalore", "Jhalawar", "Jhunjhunu", "Jodhpur", "Kishangarh", "Kota", "Ladnu",
            "Lakheri", "Lalsot", "Losal", "Makrana", "Nadbai", "Nagar", "Nagaur", "Nasirabad", "Nathdwara",
            "Navalgund", "Nawalgarh", "Neem-Ka-Thana", "Nimbahera", "Nohar", "Nokha", "Pali", "Phalodi",
            "Phulera", "Pilani", "Pilibanga", "Pindwara", "Pipar City", "Prantij", "Pratapgarh",
            "Raisinghnagar", "Rajakhera", "Rajaldesar", "Rajgarh (Alwar)", "Rajgarh (Churu)", "Rajsamand",
            "Ramganj Mandi", "Ramngarh", "Ratangarh", "Rawatbhata", "Rawatsar", "Reengus", "Sadri",
            "Sadulshahar", "Sadulpur", "Sagwara", "Sambhar", "Sanchore", "Sangaria", "Sardarshahar",
            "Sawai Madhopur", "Shahpura", "Shahpura", "Sheoganj", "Sikar", "Sirohi", "Sojat", "Sri Madhopur",
            "Sujangarh", "Sumerpur", "Suratgarh", "Taranagar", "Todabhim", "Todaraisingh", "Tonk", "Udaipur",
            "Udaipurwati", "Vijainagar, Ajmer", "Viratnagar"
        ],
        "Sikkim": ["Gangtok"],
        "Tamil Nadu": ["Arcot", "Aruppukkottai", "Chennai", "Coimbatore", "Erode", "Kanchipuram", "Karur",
            "Lalgudi", "Madurai", "Mettur", "Nagapattinam", "Nagercoil", "Namagiripettai", "Namakkal",
            "Nandivaram-Guduvancheri", "Nanjikottai", "Natham", "Nellikuppam", "Neyveli (TS)", "O' Valley",
            "Oddanchatram", "P.N.Patti", "Pacode", "Padmanabhapuram", "Palani", "Palladam", "Pallapatti",
            "Pallikonda", "Panagudi", "Panruti", "Paramakudi", "Parangipettai", "Pattukkottai", "Perambalur",
            "Peravurani", "Periyakulam", "Periyasemur", "Pernampattu", "Pollachi", "Polur", "Ponneri",
            "Pudukkottai", "Pudupattinam", "Puliyankudi", "Punjaipugalur", "Ranipet", "Rajapalayam",
            "Ramanathapuram", "Rameshwaram", "Rasipuram", "Salem", "Sankarankoil", "Sankari", "Sathyamangalam",
            "Sattur", "Shenkottai", "Sholavandan", "Sholingur", "Sirkali", "Sivaganga", "Sivagiri", "Sivakasi",
            "Srivilliputhur", "Surandai", "Suriyampalayam", "Tenkasi", "Thammampatti", "Thanjavur",
            "Tharamangalam", "Tharangambadi", "Theni Allinagaram", "Thirumangalam", "Thirupuvanam",
            "Thiruthuraipoondi", "Thiruvallur", "Thiruvarur", "Thoothukudi", "Thuraiyur", "Tindivanam",
            "Tiruchendur", "Tiruchengode", "Tiruchirappalli", "Tirukalukundram", "Tirukkoyilur", "Tirunelveli",
            "Tirupathur", "Tirupathur", "Tiruppur", "Tiruttani", "Tiruvannamalai", "Tiruvethipuram",
            "Tittakudi", "Udhagamandalam", "Udumalaipettai", "Unnamalaikadai", "Usilampatti", "Uthamapalayam",
            "Uthiramerur", "Vadakkuvalliyur", "Vadalur", "Vadipatti", "Valparai", "Vandavasi", "Vaniyambadi",
            "Vedaranyam", "Vellakoil", "Vellore", "Vikramasingapuram", "Viluppuram", "Virudhachalam",
            "Virudhunagar", "Viswanatham"
        ],
        "Telangana": ["Adilabad", "Bellampalle", "Bhadrachalam", "Bhainsa", "Bhongir", "Bodhan", "Farooqnagar",
            "Gadwal", "Hyderabad", "Jagtial", "Jangaon", "Kagaznagar", "Kamareddy", "Karimnagar", "Khammam",
            "Koratla", "Kothagudem", "Kyathampalle", "Mahbubnagar", "Mancherial", "Mandamarri", "Manuguru",
            "Medak", "Miryalaguda", "Nagarkurnool", "Narayanpet", "Nirmal", "Nizamabad", "Palwancha",
            "Ramagundam", "Sadasivpet", "Sangareddy", "Siddipet", "Sircilla", "Suryapet", "Tandur", "Vikarabad",
            "Wanaparthy", "Warangal", "Yellandu"
        ],
        "Tripura": ["Agartala", "Belonia", "Dharmanagar", "Kailasahar", "Khowai", "Pratapgarh", "Udaipur"],
        "Uttar Pradesh": ["Achhnera", "Agra", "Aligarh", "Allahabad", "Amroha", "Azamgarh", "Bahraich", "Chandausi",
            "Etawah", "Firozabad", "Fatehpur Sikri", "Hapur", "Hardoi", "Jhansi", "Kalpi", "Kanpur", "Khair",
            "Laharpur", "Lakhimpur", "Lal Gopalganj Nindaura", "Lalganj", "Lalitpur", "Lar", "Loni", "Lucknow",
            "Mathura", "Meerut", "Modinagar", "Moradabad", "Nagina", "Najibabad", "Nakur", "Nanpara", "Naraura",
            "Naugawan Sadat", "Nautanwa", "Nawabganj", "Nehtaur", "Niwai", "Noida", "Obra", "Orai", "Padrauna",
            "Palia Kalan", "Parasi", "Phulpur", "Pihani", "Pilibhit", "Pilkhuwa", "Powayan", "Pukhrayan",
            "Puranpur", "Purquazi", "Purwa", "Rae Bareli", "Rampur", "Rampur Maniharan", "Rampur Maniharan",
            "Rasra", "Rath", "Renukoot", "Reoti", "Robertsganj", "Rudauli", "Rudrapur", "Sadabad", "Safipur",
            "Saharanpur", "Sahaswan", "Sahawar", "Sahjanwa", "Saidpur", "Sambhal", "Samdhan", "Samthar",
            "Sandi", "Sandila", "Sardhana", "Seohara", "Shahabad, Hardoi", "Shahabad, Rampur", "Shahganj",
            "Shahjahanpur", "Shamli", "Shamsabad, Agra", "Shamsabad, Farrukhabad", "Sherkot",
            "Shikarpur, Bulandshahr", "Shikohabad", "Shishgarh", "Siana", "Sikanderpur", "Sikandra Rao",
            "Sikandrabad", "Sirsaganj", "Sirsi", "Sitapur", "Soron", "Suar", "Sultanpur", "Sumerpur", "Tanda",
            "Thakurdwara", "Thana Bhawan", "Tilhar", "Tirwaganj", "Tulsipur", "Tundla", "Ujhani", "Unnao",
            "Utraula", "Varanasi", "Vrindavan"
        ],
        "Uttarakhand": ["Bageshwar", "Dehradun", "Haldwani-cum-Kathgodam", "Hardwar", "Kashipur", "Manglaur",
            "Mussoorie", "Nagla", "Nainital", "Pauri", "Pithoragarh", "Ramnagar", "Rishikesh", "Roorkee",
            "Rudrapur", "Sitarganj", "Srinagar", "Tehri"
        ],
        "West Bengal": ["Adra", "Alipurduar", "Arambagh", "Asansol", "Baharampur", "Balurghat", "Bankura",
            "Darjiling", "English Bazar", "Gangarampur", "Habra", "Hugli-Chinsurah", "Jalpaiguri", "Jhargram",
            "Kalimpong", "Kharagpur", "Kolkata", "Mainaguri", "Malda", "Mathabhanga", "Medinipur", "Memari",
            "Monoharpur", "Murshidabad", "Nabadwip", "Naihati", "Panchla", "Pandua", "Paschim Punropara",
            "Purulia", "Raghunathpur", "Raghunathganj", "Raiganj", "Rampurhat", "Ranaghat", "Sainthia",
            "Santipur", "Siliguri", "Sonamukhi", "Srirampore", "Tarakeswar"
        ],
    };


    // Function to populate cities based on selected state
    function populateCities() {
        var stateSelect = document.getElementById("state");
        var citySelect = document.getElementById("city");
        var state = stateSelect.options[stateSelect.selectedIndex].value;
        citySelect.innerHTML = ""; // Clear previous options

        // Populate cities based on selected state
        if (statesAndCities.hasOwnProperty(state)) {
            var cities = statesAndCities[state];
            for (var i = 0; i < cities.length; i++) {
                addOption(citySelect, cities[i]);
            }
        } else {
            addOption(citySelect, "--Select City--");
        }
    }

    // Function to add options to a select element
    function addOption(selectElement, optionText) {
        var option = document.createElement("option");
        option.text = option.value = optionText;
        selectElement.add(option);
    }

    // Populate states dropdown
    var stateSelect = document.getElementById("state");
    for (var state in statesAndCities) {
        if (statesAndCities.hasOwnProperty(state)) {
            addOption(stateSelect, state);
        }
    }
</script>

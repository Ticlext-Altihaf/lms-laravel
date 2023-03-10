<?php 
return [
  'accepted' => ' :attribute harus diterima.',
  'accepted_if' => ' :attribute harus diterima ketika :other adalah :value.',
  'active_url' => ' :attribute bukan URL yang valid.',
  'after' => ' :attribute harus berupa tanggal setelah :date.',
  'after_or_equal' => ' :attribute harus berupa tanggal setelah atau sama dengan :date.',
  'alpha' => ' :attribute hanya boleh berisi huruf.',
  'alpha_dash' => ' :attribute hanya boleh berisi huruf, angka, tanda hubung, dan garis bawah.',
  'alpha_num' => ' :attribute hanya boleh berisi huruf dan angka.',
  'array' => ' :attribute harus berupa array.',
  'ascii' => ' :attribute hanya boleh berisi karakter dan simbol alfanumerik byte tunggal.',
  'before' => ' :attribute harus tanggal sebelum :date.',
  'before_or_equal' => ' :attribute harus berupa tanggal sebelum atau sama dengan :date.',
  'between' => [
    'array' => ' :attribute harus memiliki item antara :min dan :max.',
    'file' => ' :attribute harus antara :min dan :max kilobyte.',
    'numeric' => ' :attribute harus antara :min dan :max.',
    'string' => ' :attribute harus antara karakter :min dan :max.',
  ],
  'boolean' => 'Bidang :attribute harus benar atau salah.',
  'confirmed' => 'Konfirmasi :attribute tidak cocok.',
  'current_password' => 'Kata sandi salah.',
  'date' => ' :attribute bukan tanggal yang valid.',
  'date_equals' => ' :attribute harus berupa tanggal yang sama dengan :date.',
  'date_format' => ' :attribute tidak cocok dengan format :format.',
  'decimal' => ' :attribute harus memiliki tempat desimal :decimal.',
  'declined' => ' :attribute harus ditolak.',
  'declined_if' => ' :attribute harus ditolak ketika :other adalah :value.',
  'different' => ' :attribute dan :other harus berbeda.',
  'digits' => ' :attribute harus :digits digit.',
  'digits_between' => ' :attribute harus antara digit :min dan :max.',
  'dimensions' => ' :attribute memiliki dimensi gambar yang tidak valid.',
  'distinct' => 'Bidang :attribute memiliki nilai duplikat.',
  'doesnt_end_with' => ' :attribute tidak boleh diakhiri dengan salah satu dari yang berikut: :values.',
  'doesnt_start_with' => ' :attribute mungkin tidak dimulai dengan salah satu dari yang berikut: :values.',
  'email' => ' :attribute harus berupa alamat email yang valid.',
  'ends_with' => ' :attribute harus diakhiri dengan salah satu dari yang berikut: :values.',
  'enum' => ' :attribute yang dipilih tidak valid.',
  'exists' => ' :attribute yang dipilih tidak valid.',
  'file' => ' :attribute harus berupa file.',
  'filled' => 'Bidang :attribute harus memiliki nilai.',
  'gt' => [
    'array' => ' :attribute harus memiliki lebih dari item :value.',
    'file' => ' :attribute harus lebih besar dari :value kilobyte.',
    'numeric' => ' :attribute harus lebih besar dari :value.',
    'string' => ' :attribute harus lebih besar dari karakter :value.',
  ],
  'gte' => [
    'array' => ' :attribute harus memiliki item :value atau lebih.',
    'file' => ' :attribute harus lebih besar dari atau sama dengan :value kilobyte.',
    'numeric' => ' :attribute harus lebih besar dari atau sama dengan :value.',
    'string' => ' :attribute harus lebih besar dari atau sama dengan :value karakter.',
  ],
  'image' => ' :attribute harus berupa gambar.',
  'in' => ' :attribute yang dipilih tidak valid.',
  'in_array' => 'Bidang :attribute tidak ada di :other.',
  'integer' => ' :attribute harus bilangan bulat.',
  'ip' => ' :attribute harus berupa alamat IP yang valid.',
  'ipv4' => ' :attribute harus berupa alamat IPv4 yang valid.',
  'ipv6' => ' :attribute harus berupa alamat IPv6 yang valid.',
  'json' => ' :attribute harus berupa string JSON yang valid.',
  'lowercase' => ' :attribute harus huruf kecil.',
  'lt' => [
    'array' => ' :attribute harus memiliki item kurang dari :value.',
    'file' => ' :attribute harus kurang dari :value kilobyte.',
    'numeric' => ' :attribute harus kurang dari :value.',
    'string' => ' :attribute harus kurang dari :value karakter.',
  ],
  'lte' => [
    'array' => ' :attribute tidak boleh memiliki lebih dari :value item.',
    'file' => ' :attribute harus kurang dari atau sama dengan :value kilobyte.',
    'numeric' => ' :attribute harus kurang dari atau sama dengan :value.',
    'string' => ' :attribute harus kurang dari atau sama dengan :value karakter.',
  ],
  'mac_address' => ' :attribute harus berupa alamat MAC yang valid.',
  'max' => [
    'array' => ' :attribute tidak boleh memiliki lebih dari :max item.',
    'file' => ' :attribute tidak boleh lebih besar dari :max kilobyte.',
    'numeric' => ' :attribute tidak boleh lebih besar dari :max.',
    'string' => ' :attribute tidak boleh lebih besar dari :max karakter.',
  ],
  'max_digits' => ' :attribute tidak boleh lebih dari :max digit.',
  'mimes' => ' :attribute harus berupa file bertipe: :values.',
  'mimetypes' => ' :attribute harus berupa file bertipe: :values.',
  'min' => [
    'array' => ' :attribute harus memiliki setidaknya :min item.',
    'file' => ' :attribute minimal harus :min kilobyte.',
    'numeric' => ' :attribute harus minimal :min.',
    'string' => ' :attribute minimal harus :min karakter.',
  ],
  'min_digits' => ' :attribute harus memiliki setidaknya :min digit.',
  'missing' => 'Bidang :attribute harus hilang.',
  'missing_if' => 'Bidang :attribute harus hilang saat :other adalah :value.',
  'missing_unless' => 'Bidang :attribute harus hilang kecuali :other adalah :value.',
  'missing_with' => 'Bidang :attribute harus hilang saat :values ada.',
  'missing_with_all' => 'Bidang :attribute harus hilang saat :values ada.',
  'multiple_of' => ' :attribute harus merupakan kelipatan dari :value.',
  'not_in' => ' :attribute yang dipilih tidak valid.',
  'not_regex' => 'Format :attribute tidak valid.',
  'numeric' => ' :attribute harus berupa angka.',
  'password' => [
    'letters' => ' :attribute harus berisi setidaknya satu huruf.',
    'mixed' => ' :attribute harus berisi setidaknya satu huruf besar dan satu huruf kecil.',
    'numbers' => ' :attribute harus berisi setidaknya satu angka.',
    'symbols' => ' :attribute harus berisi setidaknya satu simbol.',
    'uncompromised' => 'X1 yang diberikan telah muncul dalam kebocoran data. Harap pilih :attribute yang berbeda.',
  ],
  'present' => 'Bidang :attribute harus ada.',
  'prohibited' => 'Bidang :attribute dilarang.',
  'prohibited_if' => 'Bidang :attribute dilarang saat :other adalah :value.',
  'prohibited_unless' => 'Bidang :attribute dilarang kecuali :other ada di :values.',
  'prohibits' => 'Bidang :attribute melarang :other untuk hadir.',
  'regex' => 'Format :attribute tidak valid.',
  'required' => 'Bidang :attribute diperlukan.',
  'required_array_keys' => 'Bidang :attribute harus berisi entri untuk: :values.',
  'required_if' => 'Bidang :attribute diperlukan saat :other adalah :value.',
  'required_if_accepted' => 'Kolom :attribute diperlukan saat :other diterima.',
  'required_unless' => 'Bidang :attribute diperlukan kecuali :other ada di :values.',
  'required_with' => 'Bidang :attribute diperlukan saat :values ada.',
  'required_with_all' => 'Bidang :attribute diperlukan saat :values ada.',
  'required_without' => 'Bidang :attribute diperlukan saat :values tidak ada.',
  'required_without_all' => 'Bidang :attribute diperlukan bila tidak ada :values yang ada.',
  'same' => ' :attribute dan :other harus cocok.',
  'size' => [
    'array' => ' :attribute harus berisi item :size.',
    'file' => ' :attribute harus :size kilobyte.',
    'numeric' => ' :attribute harus :size.',
    'string' => ' :attribute harus :size karakter.',
  ],
  'starts_with' => ' :attribute harus dimulai dengan salah satu dari yang berikut: :values.',
  'string' => ' :attribute harus berupa string.',
  'timezone' => ' :attribute harus berupa zona waktu yang valid.',
  'unique' => ' :attribute sudah diambil.',
  'uploaded' => ' :attribute gagal diunggah.',
  'uppercase' => ' :attribute harus huruf besar.',
  'url' => ' :attribute harus berupa URL yang valid.',
  'ulid' => ' :attribute harus berupa ULID yang valid.',
  'uuid' => ' :attribute harus berupa UUID yang valid.',
  'custom' => [
    'attribute-name' => [
      'rule-name' => 'custom-message',
    ],
  ],
  'attributes' => [
  ],
];
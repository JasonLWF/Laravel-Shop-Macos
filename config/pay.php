<?php 

return [
	'alipay' => [
		'app_id' 	     => '2016091700534416',
		'ali_public_key' => 'MIIBIjANBgkqhkiG9w0BAQEFAAOCAQ8AMIIBCgKCAQEApIA3wy1vPtRNOvhFR6Qzaut1GKFBpZQZUpk/n6WhUaq6b7jtW3krSGHTvUNp7RiwjFFuuTyevEfb/XPALTyDSmLo3d8bDcYw4UnliXL4gL03bUZKDJTUm2OqL6P+mR/aCek5MI2II3sruC3PyFjLwvFt/qNhjcBvG74U9zcEA61EDlK/qR9NTgGi352Pc3ygC1a1muYKSDnqWvyZ/oqELWVtfYtRbWA1p6yYKF6H//NN7WbsFQoMiiAIOvOgA84Ye6SeI1VacpLkqBbiqDDQGVKoXMbm/XkL5CmfPeWeYSPFCB6is8C11L6yCYadAGFk6B1MrJ/JMrM3tbxlke1QgQIDAQAB',
		'private_key'    => 'MIIEpAIBAAKCAQEArPH5kZQ4IJx3FWYIv5Q3SmnMAS2fd0fLWL8mX8YQMLkh5b/YoQa7Xm5WzYds7ynUhE4EDekU5YWM/ou0FuAtZ4FvAesd/uG6EBsTPsQDYnp7rDw0TTdB0tkkPVYLZWAixVc2lImxskPBzD2l3DaLRJXKl8vvrc2A2OhZuwiyL1NgClqdmuT7FxhQwv/9HLtLwYiHJjdlx4Lk42gzh/hh1P1VaQqPfs5qNYQGlWQWq3l8qs8PMa64qc4SqD/krxta1zjvW0cfpMwU+6tBWB8pAPCcOKF8W55s+JPOMP+nyGedrsH+GJEJm1ZyUoIiS+bvMEgexD7ejRsC0PoQRknZmwIDAQABAoIBAFoc6xEzzdsQK+x2cfCA5h5b6fRjNUgNnKLtVq1ool8A1+zCfbnJrC+UBp6pBdXIUfduPyaQYFcHs2Oen4Ob44yfIJw7SjHYo/5oXSrDL5BMicxAwm/Jbv7SLdPX1bBI21VAECxtYq2kKIKnTJjlwsNF2X4mwQgqoAxlZPvTmCSXzP/c5K/VZx7fZ5Oiowjc1VwAJKkT6cFID1t2SWhIyAkOTsYkMJbvNFf31I/BRQq0ctQTbcXgIEDtl2BWO2oHbjJ0Z4hj7PQ5aDZuXi+NSkrGzkKNgbiOTW6gUdfNO0txGw5cokSjkjP7WLbOBeSf2uCc1HfD8JdssM8mrFFe/4ECgYEA4oVJfmoKrsr4uVZH65Ykf+D3hmpv7x9RWgSHGq1rtN/Jrp5xDVvCT+FSgT5Q9VUVj8XG+A97ZLwxfGyuZkZ1Uy3JBhD/hiZNpJJGxBklrRcHKuErI1ZZFUsm8m9OYfOgdAiKeUgAiY1booUPC5fIlj6Hgmzi6n9qmHvaD7pBAAsCgYEAw3PHtZIdgcrUfEN4WxZ/iitQIsJ98aANrE9Rkn3+LKi/Pim5/nCnzSXztqReJupOO7JlfIKf9IgAYbX2s8D/z0We2zC0aaneGEAzbPqElJe1f04ysdtg8hqnuDiRfkMJoBo1mEv6RgC+aZcfVFZV8oE+MEsPuTGLSiCmxKmTtrECgYEAxU+Qqvq3f3XxnY8Yao+ID5PoSD9ibQn8lMqo3IX+8biVNvNwSlCJO4drlISxhGGuvGNsYxspQp/jAxyv9Qqem+uf1RbtXO70Zsu7tIirFtCeP62PI+LNCg1CSZ7Gye+q7ieaZvZe8XIeRbxdVJ3L7YNeCi/KoLSIJ3aKhXSZte0CgYA6VxLjhau9FDf8p38DYWHMckVHOtqxBt9N8ZcdrPHzjqMXAQl9g07zE0L9324jG4kilItqcOsh6H6Eq/XpjdBNpDBYqN8RMx0SDAfNnbF5URdh2ouTPzJe0coCWRBEqenzmh8pSHR59LrhdbRqTiL1cdKIQ797vegfxkNBLITk4QKBgQCJ91DCKbzpYQgkch5hQE/3kvWk6B3rcMjLIwdjtJgHjGzIH4qufjODfc3QMUVdOZk/a7st8wPhjHRUt/QCT71ibRIOargdGbM8VWdevTYGaneH1zPVcZaBElMUd865VT2XTLayc/sqeWINIuyO65fUrcCekIEDVmnUcoorJA15lw==',
		'log'			 => [
			'file' => storage_path('logs/alipay.log'),
		],
	],

	'wechat' => [
		'app_id'      => '',
		'mch_id'	  => '',
		'key'	 	  => '',
		'cert_client' => '',
		'cert_key'	  => '',
		'log'		  => [
			'file' => storage_path('logs/wechat_pay.log'),
		],
	],
];
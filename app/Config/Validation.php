<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];
		public $patientCondition = [
			'condition_id' => [
				'label' => 'Condition',
				'rules' => 'required',
				'errors' => [
					'required' => 'Condition field is required'
				]
			]
		];
    public $role = [
        'role_name' => [
            'label'  => 'Role Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Role Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role desciption field is required.'
            ]
        ],

        'function_id' => [
            'label'  => 'Landing Page',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Landing Page field is required.'
            ]
        ],
    ];

	public $user = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha_space' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha_space' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],
        'password' => [
            'label'  => 'Password',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Password field is required.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'required|matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],
        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

    public $user_edit = [
        'lastname' => [
            'label'  => 'Lastname',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Lastname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'firstname' => [
            'label'  => 'Firstname',
            'rules'  => 'required|alpha_space',
            'errors' => [
                'required' => 'Firstname field is required.',
                'alpha' => 'Lastname must not have numbers.'
            ]
        ],
        'username' => [
            'label'  => 'Username',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Username field is required.'
            ]
        ],
        'email' => [
            'label'  => 'Email',
            'rules'  => 'required|valid_email',
            'errors' => [
                'required' => 'Email field is required.',
                'valid_email' => 'You must provide a valid email address.'
            ]
        ],

        'password_retype' => [
            'label'  => 'Password Retype',
            'rules'  => 'matches[password]',
            'errors' => [
                'required' => 'Password field is required.',
                'matches' => 'Password Retype field must match password.'
            ]
        ],

        'birthdate' => [
            'label'  => 'Birthdate',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Birthdate field is required.'
            ]
        ],
        'role_id' => [
            'label'  => 'Role',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Role field is required.'
            ]
        ],

    ];

		public $supply = [
				'supply_type_id' => [
						'label'  => 'Supply Type',
						'rules'  => 'required',
						'errors' => [
								'required' => 'This is required.'
						]
				],

				'name' => [
						'label'  => 'Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Name field is required.'
						]
				],

				'description' => [
						'label'  => 'Supplies Description',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Supply description field is required.'
						]
				],

				'quantity' => [
						'label'  => 'Quantity',
						'rules'  => 'required|numeric',
						'errors' => [
								'required' => 'Quantity field is required.',
								'numeric' => 'Input a number.'
						]
				],

				'unit' => [
						'label'  => 'Unit',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Unit field is required.',

						]
				]

		];

		public $supply_type = [
				'type_name' => [
						'label'  => 'Supply Type',
						'rules'  => 'required',
						'errors' => [
								'required' => 'This is required.'
						]
				],

				'description' => [
						'label'  => 'Supplies Description',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Supply description field is required.'
						]
				]

		];
		public $vitals = [
				'weight' => [
						'label'  => 'Height',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Weight Field is required.'
						]
				],
				'height' => [
						'label'  => 'Height',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Height field is required.'
						]
				],
				'temperature' => [
						'label'  => 'Temperature',
						'rules'  => 'required|greater_than[20]',
						'errors' => [
								'required' => 'Temperature field is required.',
								'greater_than' => 'Temperature must be greater than 20'
						]
				],
				'respiratory_rate' => [
						'label'  => 'Respiratory Rate',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Supply description field is required.'
						]
				],
				'pulse_rate' => [
						'label'  => 'Pulse Rate',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Pulse Rate field is required.'
						]
				],
				'blood_pressure_numerator' => [
						'label'  => 'Supplies Description',
						'rules'  => 'required|greater_than[0]',
						'errors' => [
								'required' => 'Supply description field is required.',
								'greater_than' => 'Blood Pressure Must not be Zero.'
						]
				],
				'blood_pressure_denominator' => [
						'label'  => 'Supplies Description',
						'rules'  => 'required|greater_than[0]',
						'errors' => [
								'required' => 'Supply description field is required.',
								'greater_than' => 'Blood Pressure Must not be Zero.'
						]
				],
		];
		public $condition = [
					 'name' => [
							 'label'  => 'Condition Name',
							 'rules'  => 'required',
							 'errors' => [
									 'required' => 'Condition Name field is required.',
							 ]
					 ],
		];
		public $allergy = [
					 'name' => [
							 'label'  => 'Allergy Name',
							 'rules'  => 'required',
							 'errors' => [
									 'required' => 'Allergy Name field is required.',
							 ]
					 ],
		];
		public $patient = [
						'last_name' => [
								'label'  => 'Last Name',
								'rules'  => 'required|alpha',
								'errors' => [
										'required' => 'Last Name field is required.',
										'alpha' => 'Last Name must not have numbers.'
								]
						],

						'first_name' => [
								'label'  => 'First Name',
								'rules'  => 'required|alpha',
								'errors' => [
										'required' => 'First Name field is required.',
										'alpha' => 'First Name must not have numbers.'
								]
						],

						'birthdate' => [
								'label'  => 'Birth Date',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Birth Date field is required.'
								]
						],

						'gender' => [
								'label'  => 'Gender',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Gender field is required.'
								]
						],

						'cellphone_no' => [
								'label'  => 'Contact No.',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Contact No. field is required.'
								]
						],

						'address' => [
								'label'  => 'Address',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Address field is required.'
								]
						],

						'city' => [
								'label'  => 'City',
								'rules'  => 'required',
								'errors' => [
										'required' => 'City field is required.'
								]
						],

						'province' => [
								'label'  => 'Province',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Province field is required.'
								]
						],

						'postal' => [
								'label'  => 'Postal',
								'rules'  => 'required',
								'errors' => [
										'required' => 'Postal field is required.'
								]
						],

						// 'relative_name' => [
						// 		'label'  => 'Relative Name',
						// 		'rules'  => 'required',
						// 		'errors' => [
						// 				'required' => 'Relative Name field is required.'
						// 		]
						// ],
						//
						// 'relative_contact' => [
						// 		'label'  => 'Relative Contact',
						// 		'rules'  => 'required',
						// 		'errors' => [
						// 				'required' => 'Relative Contact field is required.'
						// 		]
						// ],

       ];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}

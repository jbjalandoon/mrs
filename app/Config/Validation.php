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

	public $accreditation_templates = [
        'template_code' => [
            'label'  => 'Template Code',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Template Code field is required.'
            ]
        ],

        'template_name' => [
            'label'  => 'Template Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Template Name field is required.'
            ]
        ],

				'description' => [
					'label'  => 'Node Description',
					'rules'  => 'required',
					'errors' => [
						'required' => 'Node desciption field is required.'
					]
				],

        'accreditation_level_id' => [
            'label'  => 'Acceditation Level',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Acceditation Level field is required.'
            ]
        ],

        'academic_program_id' => [
            'label'  => 'Academic Program',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Academic Program field is required.'
            ]
        ],

        'area_id' => [
            'label'  => 'Area',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Area field is required.'
            ]
        ],
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

    public $area = [
        'area_code' => [
            'label'  => 'Area Code',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Area Code field is required.'
            ]
        ],

        'area_name' => [
            'label'  => 'Area Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Area Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Area Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Area desciption field is required.'
            ]
        ],

        'area_head_id' => [
            'label'  => 'Area Head',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Area Head field is required.'
            ]
        ],

    ];

    public $document_type = [
        'document_type_code' => [
            'label'  => 'Document Type Code',
            'rules'  => 'required|alpha_numeric_space',
            'errors' => [
                'required' => 'Document Type Code field is required.'
            ]
        ],

        'document_type_name' => [
            'label'  => 'Document Type Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Document Type Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Document Type Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Document Type desciption field is required.'
            ]
        ],
    ];

    public $academic_program = [
        'program_name' => [
            'label'  => 'Program Name',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Program Name field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Academic Program Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Academic Program desciption field is required.'
            ]
        ],

				'program_head_id' => [
						'label'  => 'Program Head',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Program Head field is required.'
						]
				],
    ];

    public $addParameterItem = [
        'parameter_item' => [
            'label'  => 'Program Item',
            'rules'  => 'required',
            'errors' => [
                'required' => 'Parameter field is required.'
            ]
        ],

        'description' => [
            'label'  => 'Parameter Item Details / Description',
            'rules'  => 'required',
            'errors' => [
                'required' => 'parameter item details / desciption field is required.'
            ]
        ],

        'document_needed_list' => [
            'label'  => 'Needed Documents',
            'rules'  => 'required',
            'errors' => [
                'required' => 'needed document field is required.'
            ]
        ],

				'parameter_section_id' => [
						'label'  => 'Parameter Section',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Parameter Section field is required.'
						]
				],

				'template_parameter_id' => [
						'label'  => 'Parameter Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Parameter Name field is required.'
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

		public $department = [
				'department_name' => [
						'label'  => 'Department Name',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Department Name field is required.'
						]
				],

				'description' => [
						'label'  => 'Department Description',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Department desciption field is required.'
						]
				],

				'dept_head_id' => [
						'label'  => 'Department Head',
						'rules'  => 'required',
						'errors' => [
								'required' => 'Department Head field is required.'
						]
				],

		];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}

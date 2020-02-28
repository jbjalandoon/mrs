<?php namespace App\Database\Migrations;

class CreateIndicatorsBsaav extends \CodeIgniter\Database\Migration {

        private $table = 'parameter_items';
        public function up()
        {
          $data = [
              [
                  'id' => 1,
                  'parameter_item' => 'S.1 The institutions research agenda is in consonance with institutional, regional and national priorities concerned such as DOST, CHED - National Higher Education Research Agenda, NEDA,  etc.',
                  'description' => 'S.1 The institutions research agenda is in consonance with institutional, regional and national priorities concerned such as DOST, CHED - National Higher Education Research Agenda, NEDA, etc.',
                  'document_needed_list' => '•Copy of the developmental goals of NEDA  •Copy of the development goals and research agenda of DOST, •Copy of the CHED-National Higher Education Research Agenda,
                        •Copy of the PUP Research Agenda
                        •Matrix of Benchmark of PUP Research Agenda with NEDA, DOST and CHED
                        •Notice of consultative meeting received by different stakeholders
                        •Minutes of the consultative meetings with attendance of participants
                        •Action photos of the proceedings
                        •Copy of the College and Department Research Agenda
                        •Matrix of Benchmark of College and Department Research Agenda with NEDA, DOST CHED, PUP Notice of consultative meeting received by different stakeholders
                        •Minutes of the college and department meetings with attendance of participantsx',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '22',
                  'parent_parameter_item_id' => '0',
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
            /* [
                  'id' => 2,
                  'parameter_item' => 'S.2 The institution has an approved Research Manual',  //msi-accountancy.pdf
                  'description' => 'S.2 The institution has an approved Research Manual',
                  'document_needed_list' => '•Copy of the University Research Manual
                                      •BOR approval of the University Research Manual
                                      •Notice of dissemination received by faculty and administrators',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 3,
                  'parameter_item' => 'I.1 The approved Research Agenda is implemented',  //msi-accountancy.pdf
                  'description' => 'I.1 The approved Research Agenda is implemented',
                  'document_needed_list' => '•Copy of the College and Department Research Agenda
                                      •Notice of dissemination received by stakeholders
                                      •Matrix of Completed and Outgoing research works classified according to research thrust and priorities',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 4,
                  'parameter_item' => 'I.2 The following stakeholders participate in the formulation of research agenda as bases for identifying institutional thrusts and priorities',  //msi-accountancy.pdf
                  'description' => 'I.2 The following stakeholders participate in the formulation of research agenda as bases for identifying institutional thrusts and priorities',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 5,
                  'parameter_item' => 'I.2.1 administration;',  //msi-accountancy.pdf
                  'description' => 'I.2.1 administration;',
                  'document_needed_list' => '•Notice of Meeting received by stakeholders
                          •Letters of invitation to government agencies, graduates and others
                          •Minutes of the proceedings with the attendance of stakeholders
                          •Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '4', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 6,
                  'parameter_item' => 'I.2.2 faculty;',  //msi-accountancy.pdf
                  'description' => 'I.2.2 faculty;',
                  'document_needed_list' => '•Notice of Meeting received by stakeholders
                      •Letters of invitation to government agencies, graduates and others
                      •Minutes of the proceedings with the attendance of stakeholders
                      •Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '4', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 7,
                  'parameter_item' => 'I.2.3 students;',  //msi-accountancy.pdf
                  'description' => 'I.2.3 students;',
                  'document_needed_list' => '•Notice of Meeting received by stakeholders
                        •Letters of invitation to government agencies, graduates and others
                        •Minutes of the proceedings with the attendance of stakeholders
                        •Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '4', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 8,
                  'parameter_item' => 'I.2.4 government agency representatives (DOST, CHED, NEDA, etc)',  //msi-accountancy.pdf
                  'description' => 'I.2.4 government agency representatives (DOST, CHED, NEDA, etc)',
                  'document_needed_list' => '•Notice of Meeting received by stakeholders
                        •Letters of invitation to government agencies, graduates and others
                        •Minutes of the proceedings with the attendance of stakeholders
                        •Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '4', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 9,
                  'parameter_item' => '1.2.5 other stakeholders (alumni, parents, etc.).',  //msi-accountancy.pdf
                  'description' => '1.2.5 other stakeholders (alumni, parents, etc.).',
                  'document_needed_list' => '•Notice of Meeting received by stakeholders
                        •Letters of invitation to government agencies, graduates and others
                        •Minutes of the proceedings with the attendance of stakeholders
                        •Action photos of the proceedings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '4', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 10,
                  'parameter_item' => 'I.3 Action researches to test theory in practice are conducted by faulty and students',  //msi-accountancy.pdf
                  'description' => 'I.3 Action researches to test theory in practice are conducted by faulty and students',
                  'document_needed_list' => '•Matrix of action research works conducted by faculty and students
                                •Copies of the action research works',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 11,
                  'parameter_item' => 'I.4 Team/collaborative and interdisciplinary research is encouraged',  //msi-accountancy.pdf
                  'description' => 'I.4 Team/collaborative and interdisciplinary research is encouraged',
                  'document_needed_list' => '•Matrix of team. collaborative and interdisciplinary research works conducted by faculty and students
                      •Copies of team. collaborative and interdisciplinary research works conducted by faculty and students
                      •Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 12,
                  'parameter_item' => 'I.5 Research outputs are published in refereed national and/or international journals.',  //msi-accountancy.pdf
                  'description' => 'I.5 Research outputs are published in refereed national and/or international journals.',
                  'document_needed_list' => '•Matrix of research works published in referred national and international journals
                            •Copies of the referred national and international journals',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 13,
                  'parameter_item' => 'O.1 Priority researches are identified and conducted.',  //msi-accountancy.pdf
                  'description' => 'O.1 Priority researches are identified and conducted.',
                  'document_needed_list' => '•Awards and recognition of research and research works
                                      •Results of faculty evaluation
                                      •OPCR and IPCR with ratings
                                      •PBB Rating
                                      •PASUC Promotion',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 14,
                  'parameter_item' => 'O.2 Research results are published',  //msi-accountancy.pdf
                  'description' => 'O.2 Research results are published',
                  'document_needed_list' => '•Awards and recognition of research and research works
                            •Results of faculty evaluation
                            •OPCR and IPCR with ratings
                            •PBB Rating
                            •PASUC Promotion',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '22', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 15,
                  'parameter_item' => 'S.1 The institution has an approved and adequate budget for research.',  //msi-accountancy.pdf
                  'description' => 'S.1 The institution has an approved and adequate budget for research.',
                  'document_needed_list' => '•Policy on Research Budget
                              •Notice dissemination of the policy received by stakeholders
                              •Copy of the approved budget for research
                              •Report of budget utilization
                              •Approved letters for research funding',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 16,
                  'parameter_item' => 'S.2 There are provisions for the following.',  //msi-accountancy.pdf
                  'description' => 'S.2 There are provisions for the following.',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 17,
                  'parameter_item' => 'S.2.1 facilities and equipment such as Internet, statistical, software, and other ICT resources;',  //msi-accountancy.pdf
                  'description' => 'S.2.1 facilities and equipment such as Internet, statistical, software, and other ICT resources;',
                  'document_needed_list' => '•Inventory of research facilities and equipment such ICT, library, statistical soft wares and others
                            •Photos of research facilities and equipment such ICT, library, statistical soft wares and others
                            •Letters of requests for research facilities and equipment',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '16', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 18,
                  'parameter_item' => 'S.2.2 research staff;',  //msi-accountancy.pdf
                  'description' => 'S.2.2 research staff;',
                  'document_needed_list' => '•Profile matrix of the research staff
                        •Copies of TORs, certificates of trainings completed and conferences, seminars  attended, certificates of recognition and appreciation, and copies of research works',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '16', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 19,
                  'parameter_item' => 'S.2.3 supplies and materials;and',  //msi-accountancy.pdf
                  'description' => 'S.2.3 supplies and materials;and',
                  'document_needed_list' => '•Inventory of research supplies and materials
                        •Letters of requests for research supplies and materials',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '16', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 20,
                  'parameter_item' => 'S.2.4 workplace.',  //msi-accountancy.pdf
                  'description' => 'S.2.4 workplace.',
                  'document_needed_list' => '•Photo of research office and laboratory',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '16', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 21,
                  'parameter_item' => 'I.1 allocates adequate funds for the conduct of faculty andstudent research.',  //msi-accountancy.pdf
                  'description' => 'I.1 allocates adequate funds for the conduct of faculty andstudent research.',
                  'document_needed_list' => '•Copy of the approved budget for research
                            •Report of budget utilization
                            •Approved letters for research funding',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 22,
                  'parameter_item' => 'I.2 establishes linkages with the local/national/international agencies for funding support and assistance.',  //msi-accountancy.pdf
                  'description' => 'I.2 establishes linkages with the local/national/international agencies for funding support and assistance.',
                  'document_needed_list' => '•Matrix of research linkages and networks
                                •Copies of MOA/MOU
                                •Action photos of the MOA/MOU signing
                                •Letters of invitation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 23,
                  'parameter_item' => 'I.3 maintains a functional and long-range program of faculty/staff development to enhance competence.',  //msi-accountancy.pdf
                  'description' => 'I.3 maintains a functional and long-range program of faculty/staff development to enhance competence.',
                  'document_needed_list' => '•Copy of the University, College and Department Research Program
                        •BOR approval of  University, College and Department Research Program
                        •Notice of dissemination
                        •Matrix of faculty and staff development projects and activities
                        •Action photos of faculty and staff development projects and activities
                        •Evaluation of  faculty and staff development projects and activities
                        •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 24,
                  'parameter_item' => 'I.4 encourage the conduct of externally funded researches.',  //msi-accountancy.pdf
                  'description' => 'I.4 encourage the conduct of externally funded researches.',
                  'document_needed_list' => '•Policy on externally funded research
                            •Notice of dissemination
                            •Matrix of externally funded research works
                            •Copies of MOA/MOU
                            •Action photos of MOA/MOU signing',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 25,
                  'parameter_item' => 'O.1 Priority researches are identified and conducted.',  //msi-accountancy.pdf
                  'description' => 'O.1 Priority researches are identified and conducted.',
                  'document_needed_list' => '•Matrix of completed and on-going research works
                          •Awards and recognition of researchers and research works
                          •Faculty evaluation ratings
                          •OPCR/IPCR with ratings
                          •PBB ratings
                          •PASUC promotion',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '23', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 26,
                  'parameter_item' => 'S.1 There is a system of implementation, monitoring, evaluation and utilization of research outputs.',  //msi-accountancy.pdf
                  'description' => 'S.1 There is a system of implementation, monitoring, evaluation and utilization of research outputs.',
                  'document_needed_list' => '•Policy on the implementation, monitoring, evaluation and utilization of research outputs.
                              •Notice of dissemination
                              •Matrix of research implementation, monitoring, evaluation and utilization of research outputs
                              •Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 27,
                  'parameter_item' => 'S.2 The institution has a policy on intellectual Property Rights (IPR).',  //msi-accountancy.pdf
                  'description' => 'S.2 The institution has a policy on intellectual Property Rights (IPR).',
                  'document_needed_list' => '•Policy on Intellectual Property Rights (IPR).
                                  •Matrix of research works applied  for and approved copyright and patent',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 28,
                  'parameter_item' => 'I.1. The institution/College/Academic Unit has a Research Unit managed by competent staff.',  //msi-accountancy.pdf
                  'description' => 'I.1. The institution/College/Academic Unit has a Research Unit managed by competent staff.',
                  'document_needed_list' => '•Profile matrix OVPRED/College/Department
                                •Copies of CV, TOR, certificates of recognition or appreciation, certificates of training completed, conferences, convention, seminars, workshops attended, copies of completed and on-going research works',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 29,
                  'parameter_item' => 'I.2. The Research Manual provides guidelines and procedures for the administration and conduct of research.',  //msi-accountancy.pdf
                  'description' => 'I.2. The Research Manual provides guidelines and procedures for the administration and conduct of research.',
                  'document_needed_list' => '•Copy of guidelines and procedures for the administration and conduct of research
                                  •Matrix of completed and ongoing research works
                                  •Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 30,
                  'parameter_item' => 'I.3. The faculty conduct applied and operational researches in their fields of specialization in accordance with the thrusts and priorities of the program/institution.',  //msi-accountancy.pdf
                  'description' => 'I.3. The faculty conduct applied and operational researches in their fields of specialization in accordance with the thrusts and priorities of the program/institution.',
                  'document_needed_list' => '•	Matrix of completed and ongoing research works classified according to the Research Thrusts and Priorities
                        •	Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 31,
                  'parameter_item' => 'I.4. The institution provides incentives to faculty researchers such as honoraria, service credits, deloading, etc.',  //msi-accountancy.pdf
                  'description' => 'I.4. The institution provides incentives to faculty researchers such as honoraria, service credits, deloading, etc.',
                  'document_needed_list' => '•Policy on the Incentives to faculty researchers such as honoraria, service credits, deloading, etc.
                                      •Notice of dissemination
                                      •List of faculty granted honoraria, service credits, deloading, etc.',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 32,
                  'parameter_item' => 'I.5. The College/Academic Unit requires its students to conduct research as a course requirement, (whenever applicable).',  //msi-accountancy.pdf
                  'description' => 'I.5. The College/Academic Unit requires its students to conduct research as a course requirement, (whenever applicable).',
                  'document_needed_list' => '•Policy requiring students to conduct research, as a course requirement,
                              •Copy of the curriculum and syllabus
                              •Matrix of completed and ongoing student research works
                              •Copies of completed and ongoing student research works',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 33,
                  'parameter_item' => 'I.6. The institution provides opportunities for advanced studies and/or training to enhance faculty/staff research competence.',  //msi-accountancy.pdf
                  'description' => 'I.6. The institution provides opportunities for advanced studies and/or training to enhance faculty/staff research competence.',
                  'document_needed_list' => '•Policy for advanced studies and/or training to enhance faculty/staff research competence
                                  •Notice of dissemination
                                  •Matrix of advanced studies and training attended by faculty
                                  •Copies of TOR/Certificates of Grade/Certificates of attendance or Participation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 34,
                  'parameter_item' => 'I.7. Completed and on-going research studies are periodically monitored and evaluated in local and regional in-house reviews.',  //msi-accountancy.pdf
                  'description' => 'I.7. Completed and on-going research studies are periodically monitored and evaluated in local and regional in-house reviews.',
                  'document_needed_list' => '•Proof of attendance in local, regional, national and international research conference, colloquia, symposia, conventions
                                      •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 35,
                  'parameter_item' => 'I.8. Research outputs are utilized as inputs in:',  //msi-accountancy.pdf
                  'description' => 'I.8. Research outputs are utilized as inputs in:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 36,
                  'parameter_item' => 'I.8.1. Institutional development;',  //msi-accountancy.pdf
                  'description' => 'I.8.1. Institutional development;',
                  'document_needed_list' => '•Letter of transmittal of completed research works to administrators
                                •Letter of acknowledgement of completed research works by  administrators
                                •Copy of the completed research works
                                •Minutes of the meeting
                                •Certificate of recognition or appreciation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '35', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 37,
                  'parameter_item' => 'I.8.2. the improvement of instructional processes; and',  //msi-accountancy.pdf
                  'description' => 'I.8.2. the improvement of instructional processes; and',
                  'document_needed_list' => '•Letter of transmittal of completed research works to administrators
                                •Letter of acknowledgement of completed research works by  administrators
                                •Copy of the completed research works
                                •Minutes of the meeting
                                •Certificate of recognition or appreciation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '35', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 38,
                  'parameter_item' => 'I.8.3. the transfer of generated technology/knowledge to the community.',  //msi-accountancy.pdf
                  'description' => 'I.8.3. the transfer of generated technology/knowledge to the community.',
                  'document_needed_list' => '•Letter of transmittal of completed research works to administrators
                                •Letter of acknowledgement of completed research works by  administrators
                                •Copy of the completed research works
                                •Minutes of the meeting
                                •Certificate of recognition or appreciation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '35', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 39,
                  'parameter_item' => 'I.9. Packaged technologies and new information are disseminated to target clientele through appropriate delivery systems.',  //msi-accountancy.pdf
                  'description' => 'I.9. Packaged technologies and new information are disseminated to target clientele through appropriate delivery systems.',
                  'document_needed_list' => '•List of  package technologies and new information used in the conduct of research
                                •Notice of dissemination',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 40,
                  'parameter_item' => 'I.10. The institution ensures that:',  //msi-accountancy.pdf
                  'description' => 'I.10. The institution ensures that:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 41,
                  'parameter_item' => 'I.10.1. research outputs are protected by IPR laws; and',  //msi-accountancy.pdf
                  'description' => 'I.10.1. research outputs are protected by IPR laws; and',
                  'document_needed_list' => '•Policy on IPR for research works
                              •List of research works submitted for patent and copyright
                              •List of research works with approved patent and copyright',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '40', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 42,
                  'parameter_item' => 'I.10.2. faculty and students observe research ethics to avoid malpractices like plagiarism, fabrication of data, etc.',  //msi-accountancy.pdf
                  'description' => 'I.10.2. faculty and students observe research ethics to avoid malpractices like plagiarism, fabrication of data, etc.',
                  'document_needed_list' => '•Policy on research ethics
                            •Notice of dissemination',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '40', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 43,
                  'parameter_item' => 'O.1. Implementation, monitoring, evaluation and research utilization of outputs are effective.',  //msi-accountancy.pdf
                  'description' => 'O.1. Implementation, monitoring, evaluation and research utilization of outputs are effective.',
                  'document_needed_list' => '•Matrix of completed and on-going research works
                                  •Awards and recognition of researchers and research works
                                  •Faculty evaluation rating
                                  •OPCR/IPCR with ratings
                                  •PBB ratings
                                  •PASUC promotion',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '24', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 44,
                  'parameter_item' => 'S.1. The institution has an approved and copyrighted Research Journal.',  //msi-accountancy.pdf
                  'description' => 'S.1. The institution has an approved and copyrighted Research Journal.',
                  'document_needed_list' => '•List of approved and copyrighted University Research Journal.
                                •Copies of the approved and copyrighted University Research Journal.',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 45,
                  'parameter_item' => 'S.2. The institution has incentives for:',  //msi-accountancy.pdf
                  'description' => 'S.2. The institution has incentives for:',
                  'document_needed_list' => '',
                  'tagged_documents' => '',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 46,
                  'parameter_item' => 'S.2.1. paper presentations;',  //msi-accountancy.pdf
                  'description' => 'S.2.1. paper presentations;',
                  'document_needed_list' => '•Policy on Incentives of Faculty Researcher
                                  •Matrix of faculty and students who received incentives as paper presentor, with journal publication, outstanding research related performance; and patented outputs.
                                  •Matrix of research works presented in regional, national and international research conference, published in local, regional, national and internal research journal
                                  •Matrix of research works with awards and recognition
                                  •Matrix of research works with patent or copyright
                                  •Copies of patent or copyright certificates
                                  •Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '45', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 47,
                  'parameter_item' => 'S.2.2. journal publication;',  //msi-accountancy.pdf
                  'description' => 'S.2.2. journal publication;',
                  'document_needed_list' => '•Policy on Incentives of Faculty Researcher
                                  •Matrix of faculty and students who received incentives as paper presentor, with journal publication, outstanding research related performance; and patented outputs.
                                  •Matrix of research works presented in regional, national and international research conference, published in local, regional, national and internal research journal
                                  •Matrix of research works with awards and recognition
                                  •Matrix of research works with patent or copyright
                                  •Copies of patent or copyright certificates
                                  •Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '45', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 48,
                  'parameter_item' => 'S.2.3. outstanding research related performance; and',  //msi-accountancy.pdf
                  'description' => 'S.2.3. outstanding research related performance; and',
                  'document_needed_list' => '•Policy on Incentives of Faculty Researcher
                                  •Matrix of faculty and students who received incentives as paper presentor, with journal publication, outstanding research related performance; and patented outputs.
                                  •Matrix of research works presented in regional, national and international research conference, published in local, regional, national and internal research journal
                                  •Matrix of research works with awards and recognition
                                  •Matrix of research works with patent or copyright
                                  •Copies of patent or copyright certificates
                                  •Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '45', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 49,
                  'parameter_item' => 'S.2.4. patented outputs.',  //msi-accountancy.pdf
                  'description' => 'S.2.4. patented outputs.',
                  'document_needed_list' => '•Policy on Incentives of Faculty Researcher
                                  •Matrix of faculty and students who received incentives as paper presentor, with journal publication, outstanding research related performance; and patented outputs.
                                  •Matrix of research works presented in regional, national and international research conference, published in local, regional, national and internal research journal
                                  •Matrix of research works with awards and recognition
                                  •Matrix of research works with patent or copyright
                                  •Copies of patent or copyright certificates
                                  •Accomplishment Reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '1', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '45', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 50,
                  'parameter_item' => 'I.1. The institution provides opportunities for the dissemination of research results in fora, conferences, seminars and other related means.',  //msi-accountancy.pdf
                  'description' => 'I.1. The institution provides opportunities for the dissemination of research results in fora, conferences, seminars and other related means.',
                  'document_needed_list' => '•Policy for the dissemination of research results in fora, conferences, seminars, and other related means.
                                  •Notice of  dissemination
                                  •Matrix of faculty researchers who presented in colloquia,fora, conferences, seminars, and other related means.
                                  •Approved request
                                  •Copies of Special Order
                                  •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 51,
                  'parameter_item' => 'I.2. The institution regularly publishes a research journal.',  //msi-accountancy.pdf
                  'description' => 'I.2. The institution regularly publishes a research journal.',
                  'document_needed_list' => '•Policy for the publication of research works
                                    •Notice of  dissemination
                                    •List of published research journals
                                    •Copies of the research journals
                                    •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 52,
                  'parameter_item' => 'I.3. Library exchange of research reports are well-written, and edited following the institutional format.',  //msi-accountancy.pdf
                  'description' => 'I.3. Library exchange of research reports are well-written, and edited following the institutional format.',
                  'document_needed_list' => '•List of linkage for Library exchange of research publication
                                    •Copies of MOA/MOU
                                    •Action photos of MOA/MOU signing
                                    •Proofs of library exchange',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 53,
                  'parameter_item' => 'I.4. Research manuscripts/technical reports are well-written, and edited following the institutional format.',  //msi-accountancy.pdf
                  'description' => 'I.4. Research manuscripts/technical reports are well-written, and edited following the institutional format.',
                  'document_needed_list' => '•Policy for critiquing, editing and review of research works
                              •Notice of dissemination
                              •Members of the editorial board of research journal
                              •Profile of the editorial board of research journal
                              •Matrix of faculty researchers and research works
                              •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 54,
                  'parameter_item' => 'I.5. The institution supports the researchers in all of the following activities:',  //msi-accountancy.pdf
                  'description' => 'I.5. The institution supports the researchers in all of the following activities:',
                  'document_needed_list' => '',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 55,
                  'parameter_item' => 'I.5.1. Instructional Materials Development;',  //msi-accountancy.pdf
                  'description' => 'I.5.1. Instructional Materials Development;',
                  'document_needed_list' => '•Policy on Instructional Materials Development
                            •Notice of dissemination
                            •List of faculty and their approved instructional materials
                            •Copies of approved instructional materials
                            •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '54', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 56,
                  'parameter_item' => 'I.5.2. paper presentations journal publication, classroom Lectures, and other similar activities;',  //msi-accountancy.pdf
                  'description' => 'I.5.2. paper presentations journal publication, classroom Lectures, and other similar activities;',
                  'document_needed_list' => '•Policy on paper presentations, journal publication, classroom lectures, and other similar activities
                              •Notice of dissemination
                              •List of faculty who availed supports for paper presentations, journal publication, classroom lectures, and other similar activities
                              •Copies of SO
                              •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '54', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 57,
                  'parameter_item' => 'I.5.3. editorship/writing in academic, scientific and professional journals;',  //msi-accountancy.pdf
                  'description' => 'I.5.3. editorship/writing in academic, scientific and professional journals;',
                  'document_needed_list' => '•Policy and procedure on editorship/writing in academic, scientific and professional journals
                                    •Notice of dissemination
                                    •Composition of editorial board
                                    •List of research journals
                                    •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '54', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 58,
                  'parameter_item' => 'I.5.4. thesis/dissertation advising; and',  //msi-accountancy.pdf
                  'description' => 'I.5.4. thesis/dissertation advising; and',
                  'document_needed_list' => '•Policy on thesis/dissertation advising
                            •Notice of dissemination
                            •Composition of thesis advisers
                            •List of completed thesis/dissertation',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '54', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 59,
                  'parameter_item' => 'I.5.5. patenting of research outputs.',  //msi-accountancy.pdf
                  'description' => 'I.5.5. patenting of research outputs.',
                  'document_needed_list' => '•Policy on patenting of research outputs
                              •Notice of dissemination
                              •List of research outputs with patents or with application for patents
                              •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '54', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 60,
                  'parameter_item' => 'I.6. Research results are published preferably in refereed journals.',  //msi-accountancy.pdf
                  'description' => 'I.6. Research results are published preferably in refereed journals.',
                  'document_needed_list' => '•Matrix of research works published in journals
                      •Copies of the journals
                      •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 61,
                  'parameter_item' => 'I.7. Research results are disseminated to the clientele.',  //msi-accountancy.pdf
                  'description' => 'I.7. Research results are disseminated to the clientele.',
                  'document_needed_list' => '•Proofs of dissemination of research works to target clientele like colloquia, conference, convention, seminars, fora, journals
                                •Accomplishment reports',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 62,
                  'parameter_item' => 'I.8. The College/Academic Unit generates income from patents, licenses, copyrights, ad other research outputs.',  //msi-accountancy.pdf
                  'description' => 'I.8. The College/Academic Unit generates income from patents, licenses, copyrights, ad other research outputs.',
                  'document_needed_list' => '•Policy on income generation from patents, licenses, copyrights, and other research outputs
                          •List of research works that earned income from patents, licenses, copyrights, and other research outputs',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '2', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 63,
                  'parameter_item' => 'O.1. Research outputs are published in refereed journals.',  //msi-accountancy.pdf
                  'description' => 'O.1. Research outputs are published in refereed journals.',
                  'document_needed_list' => '•Matrix of published research works
                              •Awards and recognition of researchers and research works
                              •Faculty evaluation ratings
                              •PASUC promotion
                              •OPCR/IPCR with ratings
                              •PBB ratings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 64,
                  'parameter_item' => 'O.2. Research outputs are utilized.',  //msi-accountancy.pdf
                  'description' => 'O.2. Research outputs are utilized.',
                  'document_needed_list' => '•	Matrix of published research works
                              •	Awards and recognition of researchers and research works
                              •	Faculty evaluation ratings
                              •	PASUC promotion
                              •	OPCR/IPCR with ratings
                              •	PBB ratings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3', //1-system and process 2-implementation 33-outcomes
                  'accreditation_template_id' => '5', //accre_template_bsa_area_one
                  'template_parameter_id' => '25', //template_parameters
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ],
              [
                  'id' => 65,
                  'parameter_item' => 'O.3. Patented and copyrighted research outputs are commercialized.',  //msi-accountancy.pdf
                  'description' => 'O.3. Patented and copyrighted research outputs are commercialized.',
                  'document_needed_list' => '•	Matrix of published research works
                        •	Awards and recognition of researchers and research works
                        •	Faculty evaluation ratings
                        •	PASUC promotion
                        •	OPCR/IPCR with ratings
                        •	PBB ratings',
                  'tagged_documents' => '[]',
                  'parameter_section_id' => '3',
                  'accreditation_template_id' => '5',
                  'template_parameter_id' => '25',
                  'parent_parameter_item_id' => '0', //parent 0 child 1
                  'status' => 'a',
                  'created_at' => date('Y-m-d H:i:s')
              ]*/
          ];

          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $builder->insertBatch($data);
        }

        public function down()
        {
          $db      = \Config\Database::connect();
          $builder = $db->table($this->table);
          $db->simpleQuery('DELETE FROM '.$this->table.' WHERE id >= 1 AND id <= 65');
        }
}

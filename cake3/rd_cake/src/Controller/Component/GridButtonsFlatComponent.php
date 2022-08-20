<?php
//----------------------------------------------------------
//---- Author: Dirk van der Walt
//---- License: GPL v3
//---- Description: A component used to check and produce Ajax-ly called grid tooblaar items
//---- Date: 20-JUL-2022
//------------------------------------------------------------

namespace App\Controller\Component;
use Cake\Controller\Component;

use Cake\Core\Configure;
use Cake\Core\Configure\Engine\PhpConfig;

class GridButtonsFlatComponent extends Component {

    protected $scale   = 'large';  //Later we will improve the code to change this to small for smaller screens
    
    protected $btnUiReload  = 'button-orange';
    protected $btnUiAdd     = 'button-green';
    protected $btnUiDelete  = 'button-red';
    protected $btnUiEdit    = 'button-blue';
    protected $btnUiView    = 'button-orange';
    
    protected $btnUiNote    = 'default';
    protected $btnUiCSV     = 'default';
    protected $btnUiPassword = 'default';
    protected $btnUiRadius  = 'default';
    protected $btnUiEnable  = 'default';
    protected $btnUiGraph   = 'default';
    protected $btnUiMail    = 'default';
    protected $btnUiPdf     = 'default';
    protected $btnUiMap     = 'default';
    protected $btnUiUnknownClients = 'button-metal';
    protected $btnUiByod    = 'button-metal';
    
    protected $btnUiConfigure = 'default';
    protected $btnUiPolicies  = 'default';
    protected $btnUiUsers     = 'default';
    protected $btnUiTags      = 'default';
    protected $btnUiChangeMode = 'default';
    protected $btnUiRedirect  = 'default';
    protected $btnUiAttach    = 'button-blue';
    protected $btnUiAdvancedEdit = 'button-orange';
    
    protected $btnUiExecute     = 'button-green';
    protected $btnUiHistory     = 'button-blue';
    protected $btnUiRestart     = 'button-red';
    protected $btnUiRogue       = 'button-orange';
     
    protected $btnUiProfComp    = 'button-metal';
    
    
    // Execute any other additional setup for your component.
    public function initialize(array $config)
    {
        $this->btnReload = [
            'xtype'     =>  'button', 
            'glyph'     => Configure::read('icnReload'),
            'scale'     => $this->scale,
            'itemId'    => 'reload',
            'tooltip'   => __('Reload'),
            'ui'        => $this->btnUiReload
        ];
        $this->btnReloadTimer = [
            'xtype'     => "splitbutton",
            'glyph'     => Configure::read('icnReload'),
            'scale'     => $this->scale,
            'itemId'    => 'reload',
            'tooltip'   => __('Reload'),
            'ui'        => $this->btnUiReload,
            'menu'      => [
                'items' => [
                    '<b class="menu-title">Reload every:</b>',
                    array( 'text'  => __('30 seconds'),      'itemId'    => 'mnuRefresh30s', 'group' => 'refresh','checked' => false ),
                    array( 'text'  => __('1 minute'),        'itemId'    => 'mnuRefresh1m', 'group' => 'refresh' ,'checked' => false),
                    array( 'text'  => __('5 minutes'),       'itemId'    => 'mnuRefresh5m', 'group' => 'refresh', 'checked' => false ),
                    array( 'text'  => __('Stop auto reload'),'itemId'    => 'mnuRefreshCancel', 'group' => 'refresh', 'checked' => true)
                ]
            ]
        ];
        $this->btnAdd =  [
            'xtype'     => 'button',
            'glyph'     => Configure::read('icnAdd'),
            'scale'     => $this->scale,
            'itemId'    => 'add',
            'tooltip'   => __('Add'),
            'ui'        => $this->btnUiAdd
        ];
		
        $this->btnEdit =  [
            'xtype'     => 'button',
            'glyph'     => Configure::read('icnEdit'),
            'scale'     => $this->scale,
            'itemId'    => 'edit',
            'tooltip'   => __('Edit'),
            'ui'        => $this->btnUiEdit
        ];
		
        $this->btnDelete =  [
            'xtype'     => 'button',
            'glyph'     => Configure::read('icnDelete'),
            'scale'     => $this->scale,
            'itemId'    => 'delete',
            'tooltip'   => __('Delete'),
            'ui'        => $this->btnUiDelete
        ];

        $this->btnNote = [
            'xtype'     => 'button',     
            'glyph'     => Configure::read('icnNote'), 
            'scale'     => $this->scale, 
            'itemId'    => 'note',    
            'tooltip'   => __('Add notes'),
            'ui'        => $this->btnUiNote
        ];

        $this->btnCSV = [
            'xtype'     => 'button',     
            'glyph'     => Configure::read('icnCsv'), 
            'scale'     => $this->scale, 
            'itemId'    => 'csv',      
            'tooltip'   => __('Export CSV'),
            'ui'        => $this->btnUiCSV
        ];

        $this->btnPassword = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnLock'), 
            'scale'     => $this->scale, 
            'itemId'    => 'password', 
            'tooltip'   => __('Change Password'),
            'ui'        => $this->btnUiPassword
        ];

        $this->btnEnable = [
            'xtype'     => 'button',  
            'glyph'     => Configure::read('icnLight'),
            'scale'     => $this->scale, 
            'itemId'    => 'enable_disable',
            'tooltip'   => __('Enable / Disable'),
            'ui'        => $this->btnUiEnable
        ];

        $this->btnRadius = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnRadius'), 
            'scale'     => $this->scale, 
            'itemId'    => 'test_radius',  
            'tooltip'   => __('Test RADIUS'),
            'ui'        => $this->btnUiRadius
        ];

        $this->btnGraph = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnGraph'),   
            'scale'     => $this->scale, 
            'itemId'    => 'graph',  
            'tooltip'   => __('Graphs'),
            'ui'        => $this->btnUiGraph
        ];

        $this->btnMail = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnEmail'),
            'scale'     => $this->scale, 
            'itemId'    => 'email', 
            'tooltip'   => __('e-Mail voucher'),
            'ui'        => $this->btnUiMail
        ];

        $this->btnPdf  = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnPdf'),    
            'scale'     => $this->scale, 
            'itemId'    => 'pdf',      
            'tooltip'   => __('Export to PDF'),
            'ui'        => $this->btnUiPdf
        ];
        
        $this->btnAttach = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnAttach'), 
            'scale'     => $this->scale,
            'itemId'    => 'attach',      
            'tooltip'=> __('Attach'),
            'ui'        => $this->btnUiAttach
        ];
        
        $this->btnRedirect = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnRedirect'), 
            'scale'     => $this->scale, 
            'itemId'    => 'redirect',   
            'tooltip'   => __('Redirect'),
            'ui'        => $this->btnUiRedirect
        ];
        
        $this->btnChangeMode = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnSpanner'), 
            'scale'     => $this->scale, 
            'itemId'    => 'change_device_mode',   
            'tooltip'   => __('Change Device Mode'),
            'ui'        => $this->btnUiChangeMode
        ];
		
        $this->btnMap = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnMap'), 
            'scale'     => $this->scale, 
            'itemId'    => 'map',   
            'tooltip'   => __('Map'),
            'ui'        => $this->btnUiMap
        ];
      
		
        $this->btnTags = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnTag'), 
            'scale'     => $this->scale, 
            'itemId'    => 'tag',   
            'tooltip'   => __('Manage tags'),
            'ui'        => $this->btnUiTags
        ];
        
        $this->btnPolicies = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnScale'), 
            'scale'     => $this->scale, 
            'itemId'    => 'btnPolicies',   
            'tooltip'   => __('Policies'),
            'ui'        => $this->btnUiPolicies 
        ];
        
        $this->btnUsers = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnUser'), 
            'scale'     => $this->scale, 
            'itemId'    => 'btnUsers',   
            'tooltip'   => __('Users'),
            'ui'        => $this->btnUiUsers 
        ];
        $this->btnConfigure = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnConfigure'), 
            'scale'     => $this->scale, 
            'itemId'    => 'preferences',   
            'tooltip'   => __('Preferences'),
            'ui'        => $this->btnUiConfigure
        ];
        $this->btnByod = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnDevice'), 
            'scale'     => $this->scale,
            'itemId'    => 'byod',
            'tooltip'   => __('BYOD'),
            'ui'        => $this->btnUiByod
        ];
        
        $this->btnProfComp = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnComponent'), 
            'scale'     => $this->scale,
            'itemId'    => 'profile_components',
            'tooltip'   => __('Profile Components'),
            'ui'        => $this->btnUiProfComp
        ];
        
        $this->btnUnknownClients = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnQuestion'), 
            'scale'     => $this->scale,
            'itemId'    => 'unknown_clients',
            'tooltip'   => __('Unknown Clients'),
            'ui'        => $this->btnUiUnknownClients
        ];
        
        $this->btnAdvancedEdit = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnGears'), 
            'scale'     => $this->scale,
            'itemId'    => 'advanced_edit',
            'tooltip'   => __('Advanced Edit'),
            'ui'        => $this->btnUiAdvancedEdit
        ]; 
        
        $this->btnView = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnView'), 
            'scale'     => $this->scale,
            'itemId'    => 'view',
            'tooltip'   => __('View'),
            'ui'        => $this->btnUiView
        ];
        
        $this->btnExecute = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnSpanner'), 
            'scale'     => $this->scale,
            'itemId'    => 'execute',
            'tooltip'   => __('Execute'),
            'ui'        => $this->btnUiExecute
        ];
        
        $this->btnHistory = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnWatch'), 
            'scale'     => $this->scale,
            'itemId'    => 'history',
            'tooltip'   => __('View execute history'),
            'ui'        => $this->btnUiHistory
        ];
        
        $this->btnRestart = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnPower'), 
            'scale'     => $this->scale,
            'itemId'    => 'restart',
            'tooltip'   =>  __('Restart'),
            'ui'        => $this->btnUiRestart
        ];
        
        $this->btnRogue = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnEyeSlash'), 
            'scale'     => $this->scale,
            'itemId'    => 'rogue_detect',
            'tooltip'   =>  __('Detect Rogue Access Points'),
            'ui'        => $this->btnUiRogue
        ];
        
        $this->btnAvailable = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnWatch'), 
            'scale'     => $this->scale,
            'itemId'    => 'available',
            'tooltip'   => __('View Availability History'),
            'ui'        => $this->btnUiHistory
        ]; 
        
        $this->btnAcknowledged = [
            'xtype'     => 'button', 
            'glyph'     => Configure::read('icnHandshake'), 
            'scale'     => $this->scale,
            'itemId'    => 'acknowledged',
            'tooltip'   => __('Acknowlege Alert'),
            'ui'        => $this->btnUiEdit
        ]; 
                            
    }

    public function returnButtons($title = true,$type='basic'){
        //First we will ensure there is a token in the request
        $this->controller = $this->_registry->getController();
        
        $this->title = $title;
        
        if($title){
            $this->t = __('Action');
        }else{
            $this->t = null;
        }
        
        $menu = [];

           
        if($type == 'basic'){
            $b = $this->_fetchBasic();
            $menu = [$b];
        }
        
       	if($type == 'top_ups'){
            $b  = $this->_fetchBasic();
            $d  = $this->_fetchDocumentTopUp();
            $menu = [$b,$d];
        }
        
      	if($type == 'access_providers'){
            $b  = $this->_fetchBasic();
            $d  = $this->_fetchDocument();
            $a  = $this->_fetchApExtras();                
            $menu = [$b,$a,$d];
        }
               
        if($type == 'Hardwares'){
            $b = $this->_fetchBasic();
            array_push($b['items'],[
                    'xtype'     => 'button', 
                    'glyph'     => Configure::read('icnCamera'),
                    'scale'     => $this->scale, 
                    'itemId'    => 'photo',     
                    'tooltip'   => __('Edit Photo'),
                    'ui'        => $this->btnUiEdit
                ]);
            $menu = [$b];
        }
        
         if($type == 'profiles'){
            $b  = $this->_fetchBasic();
            $a  = $this->_fetchProfilesExtras();
            $menu = array($b,$a);
        }
        
        if($type == 'DynamicClients'){      
            $shared_secret = "(Please specify one)";
            if(Configure::read('DynamicClients.shared_secret')){
                $shared_secret = Configure::read('DynamicClients.shared_secret');
            }
                  
            $b = $this->_fetchBasic('disabled',true,$type);
            $a  = $this->_fetchDynamicClientsExtras();
            $n = [
                'xtype'     => 'buttongroup',
                'width'     => 180,
               // 'title'     => '<span class="txtBlue"><i class="fa  fa-lightbulb-o"></i> Site Wide Shared Secret</span>',
                'items'     => [
                    [
                    'xtype'     => 'tbtext', 
                    'html'      => [
                        '<div style="padding:2px;">',
                        '<div class="txtBlue" style="text-align: center;"><i class="fa  fa-lightbulb-o"></i> Site Wide Shared Secret</div>',
                        '<div style="margin:3px; text-align: center;"><font size="4"><b>'.$shared_secret.'</b></font></div>',
                        '</div>'
                    ]
                ]
                ]];
            $menu = [$b,$a,$n];
            
        }
        
        if($type == 'vouchers'){
            $b  = $this->_fetchBasicVoucher();
            $d  = $this->_fetchDocumentVoucher();
            $a  = $this->_fetchVoucherExtras();
            $menu = array($b,$d,$a);
        }
        
        if($type == 'fr_acct_and_auth'){
            $b  = $this->_fetchFrAcctAuthBasic();
            $menu = [$b];
        }
        
         if($type == 'permanent_users'){
            $b  = $this->_fetchBasic(true);
            $d  = $this->_fetchDocument();
            $a  = $this->_fetchPermanentUserExtras();
            $menu = [$b,$d,$a];
        }
        
         if($type == 'devices'){
            $b  = $this->_fetchBasic(true);
            $d  = $this->_fetchDocument();
            $a  = $this->_fetchDeviceExtras();
            $menu = array($b,$d,$a);
        }
        
        if($type == 'dynamic_details'){
            $b  = $this->_fetchBasic(true);
            $d  = $this->_fetchDocument();
            $a  = $this->_fetchDynamicDetailExtras();
            $dc = $this->_fetchDynamicDetailDataCollection();
            $menu = [$b,$d,$a,$dc];
        }
        
       	if($type == 'dynamic_translations'){
            $b = $this->_fetchDynamicTranslations();
            $menu = $b; 
        }
                       
        return $menu;
    }
   
  	private function _fetchBasic($with_reload_timer=false){       
        $menu 	= [];         
        $reload = $this->btnReload;     
        if($with_reload_timer == true){
            $reload = $this->btnReloadTimer;
        }
        $menu = ['xtype' => 'buttongroup','title' => $this->t, 'items' => [
                $reload,
                $this->btnAdd,
                $this->btnDelete,
				$this->btnEdit
            ]
        ];     
        return $menu;
    }
    
    private function _fetchDocumentTopUp(){
        $menu = [];
        if($this->title){
            $t = __('Document');
        }else{
            $t = null;
        } 
        
        $menu = [
            'xtype' => 'buttongroup',
            'title' => $t, 
            'width' => 100,
            'items' => [
                $this->btnCSV
            ]
        ];         
        return $menu;  
    }
    
    private function _fetchDocument(){

        $menu = [];      
        if($this->title){
            $t = __('Document');
        }else{
            $t = null;
        }
        
        $menu = [
            'xtype' => 'buttongroup',
            'title' => $t,
            'width' => 100,
            'items' => [
                $this->btnCSV
            ]
        ];           
        return $menu;
    }
    
    private function _fetchApExtras(){

        $menu = [];     
        if($this->title){
            $t = __('Extra Actions');
        }else{
            $t = null;
        }        
        $menu = [
            'xtype' => 'buttongroup',
            'title' => $t, 
            'items' => [
                $this->btnPassword,
                $this->btnEnable
            ]
        ];                    
        return $menu;
    }
    
       private function _fetchProfilesExtras(){
       
        $menu = [];      
        if($this->title){
            $t = __('Extra Actions');
            $w = 150;
        }else{
            $t = null;
            $w = 110;
        }    
	     $menu = [
	        'xtype' => 'buttongroup',
	        'title' => $t,
	        'width' => $w,
	        'items' => [
	            $this->btnProfComp,
	            $this->btnAdvancedEdit
	        ]
        ];    
        return $menu;
    }
    
    function _fetchDynamicClientsExtras(){  
        $menu = [];        
        if($this->title){
            $t = __('Extra Actions');
        }else{
            $t = null;
        }       
        $m_items = [
            $this->btnGraph,
            //$this->btnMap,
            //$this->btnAvailable
        ];      
      	array_push($m_items,$this->btnUnknownClients);      
        $menu = ['xtype' => 'buttongroup','title' => $t, 'items' => $m_items ];    
        return $menu;  
    }
    
   	private function _fetchBasicVoucher(){
    
        $disabled   = false;   
        $menu       = [];
    
        $add = [
            'xtype' 	=> 'splitbutton',   
            'glyph' 	=> Configure::read('icnAdd'),    
            'scale' 	=> $this->scale, 
            'itemId' 	=> 'add',      
            'tooltip'	=> __('Add'),
            'disabled'  => $disabled,
            'ui'        => $this->btnUiAdd,
            'menu'      => [
                    'items' => [
                        array( 'text'  => __('Single field'),      		'itemId'    => 'addSingle', 'group' => 'add', 'checked' => true ),
                        array( 'text'  => __('Username and Password'),   'itemId'    => 'addDouble', 'group' => 'add' ,'checked' => false), 
                        array( 'text'  => __('Import CSV List'),         'itemId'    => 'addCsvList','group' => 'add' ,'checked' => false),  
                    ]
            ]
        ];

        $delete = [
            'xtype' 	=> 'splitbutton',   
            'glyph' 	=> Configure::read('icnDelete'),    
            'scale' 	=> $this->scale, 
            'itemId' 	=> 'delete',      
            'tooltip'	=> __('Delete'),
            'disabled'  => $disabled,
            'ui'        => $this->btnUiDelete,
            'menu'      => [
                    'items' => [
                        array( 'text'  => __('Simple Delete'), 'itemId'    => 'deleteSimple', 'group' => 'delete', 'checked' => true ),
                        array( 'text'  => __('Bulk Delete'),   'itemId'    => 'deleteBulk', 'group' => 'delete' ,'checked' => false),  
                    ]
            ]
        ];


        $menu = array('xtype' => 'buttongroup','title' => $this->t, 'items' => array(
                $this->btnReloadTimer,
                $add,
                $delete,
                $this->btnEdit
            )
        );
      
        return $menu;
    }
    
    private function _fetchDocumentVoucher(){
        $menu = [];        
        if($this->title){
            $t = __('Document');
        }else{
            $t = null;
        }               
        $menu = [
            'xtype' => 'buttongroup',
            'title' => $t, 
            'items' => [
                $this->btnPdf,
                $this->btnCSV,
                $this->btnMail
            ]
        ];
        return $menu;
    }
    
     private function _fetchVoucherExtras(){  
        $menu = [];   
        if($this->title){
            $t = __('Extra Actions');
        }else{
            $t = null;
        } 
		$menu = [
			'xtype' => 'buttongroup',
			'title' => $t, 
			'items' => [
			   $this->btnPassword,
			   $this->btnRadius,
			   $this->btnGraph
			]
		];    
        return $menu;
    }
    
        
   	private function _fetchFrAcctAuthBasic(){
        $menu = [];
        $menu = [
                ['xtype' => 'buttongroup','title' => null, 'items' => [
                    $this->btnReload,
                   $this->btnDelete, 
            ]] 
        ];
        return $menu;
    }
    
     private function _fetchPermanentUserExtras(){
        $menu = []; 
        if($this->title){
            $t = __('Extra Actions');
        }else{
            $t = null;
        } 

         $menu = [
            'xtype' => 'buttongroup',
            'title' => $t, 
            'items' => [
               $this->btnPassword,
               $this->btnEnable,
               $this->btnRadius,
               $this->btnGraph,
               $this->btnByod
            ]
        ];                   
        return $menu;
    }
    
    private function _fetchDeviceExtras(){  
        $menu = [];    
        if($this->title){
            $t = __('Extra Actions');
        }else{
            $t = null;
        } 
		$menu = [
			'xtype' => 'buttongroup',
			'title' => $t, 
			'items' => [
				$this->btnEnable,
				$this->btnRadius,
				$this->btnGraph
			]
		];    
        return $menu;
    }
    
    private function _fetchDynamicDetailExtras(){
      
        if($this->title){
            $t = __('Preview');
        }else{
            $t = null;
        } 
        $menu = array(
            'xtype' => 'buttongroup',
            'title' => $t, 
            'items' => array(
                array(
                    'xtype'     => 'button',  
                    'glyph'     => Configure::read('icnMobile'),  
                    'scale'     => $this->scale, 
                    'itemId'    => 'mobile',    
                    'tooltip'   => __('Preview')
                )
            )
        );             
        return $menu;
    }
    
     private function _fetchDynamicDetailDataCollection(){
    
        if($this->title){
            $t = __('Data Collection');
        }else{
            $t = null;
        } 
    
        $menu = array(
            'xtype' => 'buttongroup',
            'title' => $t,
           // 'width' => 150, 
            'items' => [
                [
                    'xtype'     => 'button',  
                    'glyph'     => Configure::read('icnEmail'),  
                    'scale'     => $this->scale, 
                    'itemId'    => 'dcEmail',    
                    'tooltip'   => __('Email Addresses')
                ],
                [
                    'xtype'     => 'button',  
                    'glyph'     => Configure::read('icnGlobe'),  
                    'scale'     => $this->scale, 
                    'itemId'    => 'translate',    
                    'tooltip'   => __('Translated Phrases')
                ]
            ]
        );             
        return $menu;
    }
    
  	private function _fetchDynamicTranslations(){       
        $cmb_options = [
            'xtype'     => 'cmbDynamicDetailTransOptions',
            'margin'    => '5 0 5 0',
            'isRoot'    => true,
            'itemId'    => 'cmbDynamicDetailTransOptions'  
        ];  
        
        $a = ['xtype' => 'buttongroup', 'title' => $this->t, 'items' => [
            [
                'xtype'         => 'cmbDynamicDetailTransPages',
                'width'         => 350,
                'margin'   => '5 0 5 0',
                'labelWidth'    => 80,
                'itemId'        => 'tbCmbDynamicDetailTransPages'
            ],
            $this->btnReload
        ]];
        $b = ['xtype' => 'buttongroup', 'title' => $this->t, 'items' => [
            $cmb_options,         
            $this->btnAdd,
            $this->btnDelete,
            $this->btnEdit
            ]
	    ];
	    $c = ['xtype' => 'buttongroup', 'title' => $this->t, 'items' => [
            [
                'xtype'     => 'button', 
                'glyph'     => Configure::read('icnGears'), 
                'scale'     => $this->scale,
                'itemId'    => 'preview',
                'tooltip'   =>  __('API Reply Preview'),
                'ui'        => $this->btnUiProfComp
            ]                   
        ]];
     
        $menu = [$a,$b,$c];
        return $menu; 
    }
    
    
}
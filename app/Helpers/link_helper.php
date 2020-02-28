<?php
if (! function_exists('hasPrimary'))
{
	function hasPrimary($module_id, array $array_permissions)
	{
		foreach($array_permissions as $permission)
		{
			if($permission['module_id'] == $module_id && $permission['func_type'] == 1 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				return true;
			}
		}
		return false;
	}
}

if (! function_exists('user_primary_links'))
{
	function user_primary_links(array $array_permissions)
	{
		$strAdditionalUrl = '';
		foreach($_SESSION['appmodules'] as $module)
		{
			if(hasPrimary($module['id'], $array_permissions))
			{
				echo '<li class="nav-item active">';
				echo '<div class="dropdown primary-menu-top">';
				echo '<button class="btn btn-secondary btn-sm dropdown-toggle" type="button" id="'.str_replace(' ', '', ucwords(name_on_system($module['id'], $_SESSION['appmodules'], 'modules'))).'" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">';
				echo getIcon($module['id'], $_SESSION['appmodules'], false).' '. ucwords(name_on_system($module['id'], $_SESSION['appmodules'], 'modules'));
				echo '</button>';
				echo '<div class="dropdown-menu drop-items-primary" aria-labelledby="'.str_replace(' ', '', ucwords(name_on_system($module['id'], $_SESSION['appmodules'], 'modules'))).'">';
				foreach($array_permissions as $permission)
				{
					if($permission['status'] == 'a' && $permission['module_id'] == $module['id'] && $permission['func_type'] == 1 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
					{
						if($permission['slugs'] == 'user-own-profile')
						{
							echo '<a class="dropdown-item" title="'.ucwords($permission['function_name']) .'" data-toggle="tooltip" data-placement="bottom" class="nav-link" href="'. base_url() .''.str_replace("_","-",$permission['table_name']).'/own/'.$_SESSION['uid'] .'">'.getIcon($permission['id'], $_SESSION['userPermmissions']).' '.ucwords($permission['function_name']) .' </a>';
						}
						else
						{
							if('upload-academic-document' == $permission['slugs'])
							{
								$strAdditionalUrl = '/upload-academic-document';
							}

							echo '<a class="dropdown-item" title="'.ucwords($permission['function_name']) .'" data-toggle="tooltip" data-placement="bottom" class="nav-link" href="'. base_url() .''.str_replace("_","-",$permission['table_name']).''.$strAdditionalUrl.'">'.getIcon($permission['id'], $_SESSION['userPermmissions']).' '.ucwords($permission['function_name']) .' </a>';
							$strAdditionalUrl = '';
						}
					}
				}
				echo '</div>';
				echo '</div>';
				echo '</li>';
			}
		}
	}
}

if (! function_exists('user_add_link'))
{
	function user_add_link(string $table, array $array_permissions)
	{
		foreach($array_permissions as $permission)
		{
			if($permission['table_name'] == $table && $permission['func_type'] == 3 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				switch($table)
				{
					case 'parameter_items':
						echo '<button type="button" class="btn btn-info" data-toggle="modal" data-target="#frmParameterItems"><i class="fas fa-plus"></i> Add Parameter Items</button>';
						break;
					default:
						echo  '<a href="'. base_url() .''.str_replace("_","-",$table).'/add" class="btn btn-sm btn-primary btn-block float-right"><i class="fas fa-plus"></i> Add '.ucwords(str_replace('_', ' ', $table)) .'</a>';
						break;
				}
				break;
			}
		}

	}
}

if (! function_exists('file_upload_link'))
{
	function file_upload_link($slugs, array $array_permissions, $name, $class, $hasStyle = 1)
	{
		foreach($array_permissions as $permission)
		{
			if($permission['slugs'] == $slugs && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				echo '<div class="col-md">';
					echo '<a id = "'.$name.'" name="'.$name.'" href="'.base_url('academic-documents/'.$slugs) .'" class="'.$class.'">';
					if($hasStyle == 1){
						echo '<i style="font-size: 3em" class="fas fa-file-upload"></i> <br>'.$permission['function_name'];
					}
					else {
						echo '<i style="font-size: 1.3em" class="fas fa-file-upload"></i> '.$permission['function_name'];
					}
		 	    echo '</a>';
				echo '</div>';
				break;
			}
		}

	}
}

if (! function_exists('user_edit_link'))
{
	function user_edit_link(string $table, string $slugs, array $array_permissions, $id)
	{
		foreach($array_permissions as $permission)
		{
			if($permission['slugs'] == $slugs && $permission['func_type'] == 3 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				echo  '<a href="'. base_url() .''.str_replace("_","-",$table).'/edit/'.$id.'" class="btn btn-sm btn-warning btn-block"><i class="far fa-edit"></i> Edit</a>';
				break;
			}
		}

	}
}

if (! function_exists('users_action'))
{
	function users_action(string $table, array $array_permissions, $id)
	{

		foreach($array_permissions as $permission)
		{
			if($permission['table_name'] == $table && $permission['func_type'] == 3 && in_array($_SESSION['rid'], json_decode($permission['allowed_roles'])))
			{
				switch($permission['func_action'])
				{
					case 'show':
						echo '<a class="btn btn-info btn-sm" title="show" href="'. base_url() .''.str_replace("_","-",$table).'/'.$permission['func_action'].'/'. $id.'"><i class="fas fa-bars"></i></a> ';
						break;
					case 'edit':
						echo '<a class="btn btn-warning btn-sm" title="edit" href="'. base_url() .''.str_replace("_","-",$table).'/'.$permission['func_action'].'/'. $id.'"><i class="far fa-edit"></i></a> ';
						break;
					case 'delete':
						echo  '<a class="btn btn-danger btn-sm remove" onClick="confirmDelete(\''.base_url().''.str_replace("_","-",$table).'/delete/\','.$id.')" title="delete"><i class="far fa-trash-alt"></i></a>';
						break;
				}
			}
		}
	}
}

if (! function_exists('user_link'))
{
	function user_link(string $slugs, array $array_permissions)
	{
		$isValidSlug = 0;

		if(!empty($array_permissions))
		{
			foreach($array_permissions as $permission)
			{
				if(in_array($slugs, $permission))
				{
					return 1;
				}
			}

			if($isValidSlug == 0)
			{
				return 0;
			}

		}
	}
}

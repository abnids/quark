<?php  

namespace horsefly\Repositories;

use horsefly\User;
use horsefly\Task;

class TaskRepository
 {
	public function forUser(User $user)
	{
		return Task::where('user_id',$user->id)
				->orderBy('created_at', 'des')
				->get();
	}
}
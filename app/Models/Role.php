<?php
class Role extends Model

{
    use HasFactory;

    public function users() {
        return $this->hasMany(User::class);
    }
}
?>
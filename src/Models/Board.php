<?php

/*
 * This file is part of Laravel Leaderboard.
 *
 * (c) DraperStudio <hello@draperstudio.tech>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace DraperStudio\Leaderboard\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Board.
 *
 * @author DraperStudio <hello@draperstudio.tech>
 */
class Board extends Model
{
    /**
     * @var string
     */
    protected $table = 'leaderboard';

    /**
     * @var array
     */
    protected $fillable = ['points', 'rank', 'locked'];

    /**
     * @var array
     */
    protected $casts = [
        'points' => 'integer',
        'rank' => 'integer',
        'locked' => 'boolean',
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphTo
     */
    public function boardable()
    {
        return $this->morphTo();
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->boardable_id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->boardable_type;
    }
}

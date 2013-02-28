<?php
/**
 * Raises on trying to change the value of a non-existant property.
 *
 * This file is part of Tox.
 *
 * Tox is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Tox is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Tox.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @package   Tox\Web
 * @author    Snakevil Zen <zsnakevil@gmail.com>
 * @copyright © 2012 szen.in
 * @license   http://www.gnu.org/licenses/gpl.html
 */

namespace Tox;

class PropertyWriteDeniedException extends Exception
{
    const CODE = 0x80000002;

    protected static $TEMPLATE = 'data \'%value$s\' assigned to a non-existant property \'%property$s\' of \'%object$s\'';
}

// vi:se ft=php fenc=utf-8 ff=unix ts=4 sts=4 et sw=4 fen fdm=indent fdl=1 tw=120:
<?php
/**
 * Localized data
 *
 * @copyright Copyright (C) 2010-2018 Combodo SARL
 * @license	http://opensource.org/licenses/AGPL-3.0
 *
 * This file is part of iTop.
 *
 * iTop is free software; you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * iTop is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License
 * along with iTop. If not, see <http://www.gnu.org/licenses/>
 */
Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	// Dictionary entries go here
	'Class:UserRequest/Attribute:status/Value:dispatched' => 'Encaminhado',
	'Class:UserRequest/Attribute:status/Value:redispatched' => 'Reencaminhado',
	'Class:UserRequest/Stimulus:ev_dispatch' => 'Encaminhar para uma equipe',
	// Menu entry
	'Menu:UserRequest:RequestsDispatchedToMyTeams' => 'Solicitações encaminhadas para minhas equipes',
	'Menu:UserRequest:RequestsDispatchedToMyTeams+' => 'Solicitações abertas para alguma de minhas equipes',
));

//
// Class: UserRequest
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:UserRequest/Attribute:tto' => 'TTO',
	'Class:UserRequest/Attribute:tto+' => 'Tempo de atribuição',
	'Class:UserRequest/Attribute:ttr' => 'TTR',
	'Class:UserRequest/Attribute:ttr+' => 'Tempo de resolução',
));

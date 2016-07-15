<?php

/**
 * This file is part of the FrostPimcoreExample package.
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the LICENSE is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use SeerUK\Frost\FeatureDirector;

/**
 * Example Controller
 *
 * @author Elliot Wright <elliot@elliotwright.co>
 */
final class ExampleController extends \Website\Controller\Action
{
    /**
     * @Inject
     * @var FeatureDirector
     */
    private $director;


    /**
     * Example action
     *
     * @return void
     */
    public function exampleAction()
    {
        $this->view->enableAdditionalDialog = $this->director->isEnabled("example.basic");
    }
}

{if $msgs->isError()}

	<div class="col-md-6">
		<div class="row mb-5">
		<div class="col-md-12">
			<h2 class="h3 mb-3 text-black">Info </h2>
			<div class="p-3 p-lg-5 border bg-white">
				<ul>
					{foreach $msgs->getMessages() as $msg}
						{strip}
							<li class="">{$msg->text}</li>
						{/strip}
					{/foreach}
				</ul>
			</div>
			</div>
		</div>
		</div>
	</div>	

{/if}
{if $msgs->isWarning()}

	<div class="col-md-6">
		<div class="row mb-5">
		<div class="col-md-12">
			<h2 class="h3 mb-3 text-black">Info </h2>
			<div class="p-3 p-lg-5 border bg-white">
				<ul>
					{foreach $msgs->getMessages() as $msg}
						{strip}
							<li class="">{$msg->text}</li>
						{/strip}
					{/foreach}
				</ul>
			</div>
			</div>
		</div>
		</div>
	</div>	

{/if}
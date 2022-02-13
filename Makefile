.PHONY: test
test-all:
	./vendor/bin/phpunit

test-stack:
	./vendor/bin/phpunit test/ADT/StackTest.php

test-queue:
	./vendor/bin/phpunit test/ADT/QueueTest.php

test-bowling:
	./vendor/bin/phpunit test/Bowling/GameTest.php

test-int:
	./vendor/bin/phpunit test/Mutation/MyIntTest.php

test-celebration:
	./vendor/bin/phpunit test/Celebration/CardManagerTest.php

mutate:
	XDEBUG_MODE=coverage ./vendor/bin/infection
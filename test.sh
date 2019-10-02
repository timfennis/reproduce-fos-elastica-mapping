curl -XDELETE http://localhost:9201/foobar
bin/console fos:elastica:create
curl -XGET http://localhost:9201/foobar/_mapping\?pretty\=true
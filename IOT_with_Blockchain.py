from iota import Iota
from iota import ProposedTransaction
from iota import Address
from iota import Tag
from iota import TryteString

import json

api = Iota('https://nodes.devnet.iota.org:443')
address = '9FNJWLMBECSQDKHQAGDHDPXBMZFMQIMAFAUIQTDECJVGKJBKHLEBVU9TWCTPRJGYORFDSYENIQKBVSYKW9NSLGS9UW'

data = [{'temperature': '20.1', 'humidity': '42' ,'pressure' : '54.0'}]


tx = ProposedTransaction(
    address=Address(address),
    message=TryteString.from_unicode(json.dumps(data)),
    tag=Tag('TEMPERATURE'),
    value=0)

tx = api.prepare_transfer(transfers=[tx])
result = api.send_trytes(tx['trytes'], depth=3, min_weight_magnitude=9)

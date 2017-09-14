<?php

namespace DockerPhpClient\Normalizer;

use Joli\Jane\Runtime\Reference;
use Symfony\Component\Serializer\Exception\InvalidArgumentException;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\DenormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\DenormalizerInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareInterface;
use Symfony\Component\Serializer\Normalizer\NormalizerAwareTrait;
use Symfony\Component\Serializer\Normalizer\NormalizerInterface;
class TaskSpecContainerSpecNormalizer implements DenormalizerInterface, NormalizerInterface, DenormalizerAwareInterface, NormalizerAwareInterface
{
    use DenormalizerAwareTrait;
    use NormalizerAwareTrait;
    public function supportsDenormalization($data, $type, $format = null)
    {
        if ($type !== 'DockerPhpClient\\Model\\TaskSpecContainerSpec') {
            return false;
        }
        return true;
    }
    public function supportsNormalization($data, $format = null)
    {
        if ($data instanceof \DockerPhpClient\Model\TaskSpecContainerSpec) {
            return true;
        }
        return false;
    }
    public function denormalize($data, $class, $format = null, array $context = array())
    {
        if (!is_object($data)) {
            throw new InvalidArgumentException();
        }
        if (isset($data->{'$ref'})) {
            return new Reference($data->{'$ref'}, $context['document-origin']);
        }
        $object = new \DockerPhpClient\Model\TaskSpecContainerSpec();
        if (property_exists($data, 'Image')) {
            $object->setImage($data->{'Image'});
        }
        if (property_exists($data, 'Labels')) {
            $values = new \ArrayObject(array(), \ArrayObject::ARRAY_AS_PROPS);
            foreach ($data->{'Labels'} as $key => $value) {
                $values[$key] = $value;
            }
            $object->setLabels($values);
        }
        if (property_exists($data, 'Command')) {
            $values_1 = array();
            foreach ($data->{'Command'} as $value_1) {
                $values_1[] = $value_1;
            }
            $object->setCommand($values_1);
        }
        if (property_exists($data, 'Args')) {
            $values_2 = array();
            foreach ($data->{'Args'} as $value_2) {
                $values_2[] = $value_2;
            }
            $object->setArgs($values_2);
        }
        if (property_exists($data, 'Hostname')) {
            $object->setHostname($data->{'Hostname'});
        }
        if (property_exists($data, 'Env')) {
            $values_3 = array();
            foreach ($data->{'Env'} as $value_3) {
                $values_3[] = $value_3;
            }
            $object->setEnv($values_3);
        }
        if (property_exists($data, 'Dir')) {
            $object->setDir($data->{'Dir'});
        }
        if (property_exists($data, 'User')) {
            $object->setUser($data->{'User'});
        }
        if (property_exists($data, 'Groups')) {
            $values_4 = array();
            foreach ($data->{'Groups'} as $value_4) {
                $values_4[] = $value_4;
            }
            $object->setGroups($values_4);
        }
        if (property_exists($data, 'Privileges')) {
            $object->setPrivileges($this->denormalizer->denormalize($data->{'Privileges'}, 'DockerPhpClient\\Model\\TaskSpecContainerSpecPrivileges', 'json', $context));
        }
        if (property_exists($data, 'TTY')) {
            $object->setTTY($data->{'TTY'});
        }
        if (property_exists($data, 'OpenStdin')) {
            $object->setOpenStdin($data->{'OpenStdin'});
        }
        if (property_exists($data, 'ReadOnly')) {
            $object->setReadOnly($data->{'ReadOnly'});
        }
        if (property_exists($data, 'Mounts')) {
            $values_5 = array();
            foreach ($data->{'Mounts'} as $value_5) {
                $values_5[] = $this->denormalizer->denormalize($value_5, 'DockerPhpClient\\Model\\Mount', 'json', $context);
            }
            $object->setMounts($values_5);
        }
        if (property_exists($data, 'StopSignal')) {
            $object->setStopSignal($data->{'StopSignal'});
        }
        if (property_exists($data, 'StopGracePeriod')) {
            $object->setStopGracePeriod($data->{'StopGracePeriod'});
        }
        if (property_exists($data, 'HealthCheck')) {
            $object->setHealthCheck($this->denormalizer->denormalize($data->{'HealthCheck'}, 'DockerPhpClient\\Model\\HealthConfig', 'json', $context));
        }
        if (property_exists($data, 'Hosts')) {
            $values_6 = array();
            foreach ($data->{'Hosts'} as $value_6) {
                $values_6[] = $value_6;
            }
            $object->setHosts($values_6);
        }
        if (property_exists($data, 'DNSConfig')) {
            $object->setDNSConfig($this->denormalizer->denormalize($data->{'DNSConfig'}, 'DockerPhpClient\\Model\\TaskSpecContainerSpecDNSConfig', 'json', $context));
        }
        if (property_exists($data, 'Secrets')) {
            $values_7 = array();
            foreach ($data->{'Secrets'} as $value_7) {
                $values_7[] = $this->denormalizer->denormalize($value_7, 'DockerPhpClient\\Model\\TaskSpecContainerSpecSecretsItem', 'json', $context);
            }
            $object->setSecrets($values_7);
        }
        if (property_exists($data, 'Configs')) {
            $values_8 = array();
            foreach ($data->{'Configs'} as $value_8) {
                $values_8[] = $this->denormalizer->denormalize($value_8, 'DockerPhpClient\\Model\\TaskSpecContainerSpecConfigsItem', 'json', $context);
            }
            $object->setConfigs($values_8);
        }
        return $object;
    }
    public function normalize($object, $format = null, array $context = array())
    {
        $data = new \stdClass();
        if (null !== $object->getImage()) {
            $data->{'Image'} = $object->getImage();
        }
        if (null !== $object->getLabels()) {
            $values = new \stdClass();
            foreach ($object->getLabels() as $key => $value) {
                $values->{$key} = $value;
            }
            $data->{'Labels'} = $values;
        }
        if (null !== $object->getCommand()) {
            $values_1 = array();
            foreach ($object->getCommand() as $value_1) {
                $values_1[] = $value_1;
            }
            $data->{'Command'} = $values_1;
        }
        if (null !== $object->getArgs()) {
            $values_2 = array();
            foreach ($object->getArgs() as $value_2) {
                $values_2[] = $value_2;
            }
            $data->{'Args'} = $values_2;
        }
        if (null !== $object->getHostname()) {
            $data->{'Hostname'} = $object->getHostname();
        }
        if (null !== $object->getEnv()) {
            $values_3 = array();
            foreach ($object->getEnv() as $value_3) {
                $values_3[] = $value_3;
            }
            $data->{'Env'} = $values_3;
        }
        if (null !== $object->getDir()) {
            $data->{'Dir'} = $object->getDir();
        }
        if (null !== $object->getUser()) {
            $data->{'User'} = $object->getUser();
        }
        if (null !== $object->getGroups()) {
            $values_4 = array();
            foreach ($object->getGroups() as $value_4) {
                $values_4[] = $value_4;
            }
            $data->{'Groups'} = $values_4;
        }
        if (null !== $object->getPrivileges()) {
            $data->{'Privileges'} = $this->normalizer->normalize($object->getPrivileges(), 'json', $context);
        }
        if (null !== $object->getTTY()) {
            $data->{'TTY'} = $object->getTTY();
        }
        if (null !== $object->getOpenStdin()) {
            $data->{'OpenStdin'} = $object->getOpenStdin();
        }
        if (null !== $object->getReadOnly()) {
            $data->{'ReadOnly'} = $object->getReadOnly();
        }
        if (null !== $object->getMounts()) {
            $values_5 = array();
            foreach ($object->getMounts() as $value_5) {
                $values_5[] = $this->normalizer->normalize($value_5, 'json', $context);
            }
            $data->{'Mounts'} = $values_5;
        }
        if (null !== $object->getStopSignal()) {
            $data->{'StopSignal'} = $object->getStopSignal();
        }
        if (null !== $object->getStopGracePeriod()) {
            $data->{'StopGracePeriod'} = $object->getStopGracePeriod();
        }
        if (null !== $object->getHealthCheck()) {
            $data->{'HealthCheck'} = $this->normalizer->normalize($object->getHealthCheck(), 'json', $context);
        }
        if (null !== $object->getHosts()) {
            $values_6 = array();
            foreach ($object->getHosts() as $value_6) {
                $values_6[] = $value_6;
            }
            $data->{'Hosts'} = $values_6;
        }
        if (null !== $object->getDNSConfig()) {
            $data->{'DNSConfig'} = $this->normalizer->normalize($object->getDNSConfig(), 'json', $context);
        }
        if (null !== $object->getSecrets()) {
            $values_7 = array();
            foreach ($object->getSecrets() as $value_7) {
                $values_7[] = $this->normalizer->normalize($value_7, 'json', $context);
            }
            $data->{'Secrets'} = $values_7;
        }
        if (null !== $object->getConfigs()) {
            $values_8 = array();
            foreach ($object->getConfigs() as $value_8) {
                $values_8[] = $this->normalizer->normalize($value_8, 'json', $context);
            }
            $data->{'Configs'} = $values_8;
        }
        return $data;
    }
}